<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class ConsoleUserCrudTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test guest cannot access users CRUD.
     */
    public function test_guests_cannot_access_users_crud(): void
    {
        $user = User::factory()->create();

        $this->get(route('console.users.index'))->assertRedirect(route('console.login'));
        $this->get(route('console.users.create'))->assertRedirect(route('console.login'));
        $this->post(route('console.users.store'))->assertRedirect(route('console.login'));
        $this->get(route('console.users.edit', $user))->assertRedirect(route('console.login'));
        $this->put(route('console.users.update', $user))->assertRedirect(route('console.login'));
        $this->delete(route('console.users.destroy', $user))->assertRedirect(route('console.login'));
    }

    /**
     * Test listing and searching users.
     */
    public function test_authenticated_user_can_view_and_search_users(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $editor = User::factory()->create(['name' => 'Unique Editor Name', 'username' => 'editor123']);

        $response = $this->actingAs($admin)->get(route('console.users.index'));
        $response->assertStatus(200);
        $response->assertSee('Unique Editor Name');

        // Test search
        $searchResponse = $this->actingAs($admin)->get(route('console.users.index', ['search' => 'Unique Editor']));
        $searchResponse->assertStatus(200);
        $searchResponse->assertSee('Unique Editor Name');
    }

    /**
     * Test user creation with validation.
     */
    public function test_user_creation_saves_to_database(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);

        $response = $this->actingAs($admin)->post(route('console.users.store'), [
            'name' => 'New User',
            'username' => 'newuser',
            'email' => 'newuser@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'role' => 'editor',
            'status' => 'active',
            'phone' => '12345',
            'bio' => 'Some bio text',
            'birth_date' => '1995-10-10',
        ]);

        $response->assertRedirect(route('console.users.index'));
        $this->assertDatabaseHas('users', [
            'username' => 'newuser',
            'email' => 'newuser@example.com',
            'role' => 'editor',
            'phone' => '12345',
        ]);

        $user = User::where('username', 'newuser')->first();
        $this->assertTrue(Hash::check('password123', $user->password));
    }

    /**
     * Test user updates with and without changing password.
     */
    public function test_user_update_modifies_data(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $editor = User::factory()->create(['role' => 'editor']);

        // Update without password change
        $response = $this->actingAs($admin)->put(route('console.users.update', $editor), [
            'name' => 'Updated Editor Name',
            'username' => 'updatededitor',
            'email' => 'updatededitor@example.com',
            'role' => 'verifikator',
            'status' => 'inactive',
            'phone' => '54321',
        ]);

        $response->assertRedirect(route('console.users.index'));
        $this->assertDatabaseHas('users', [
            'id' => $editor->id,
            'name' => 'Updated Editor Name',
            'username' => 'updatededitor',
            'role' => 'verifikator',
            'status' => 'inactive',
        ]);

        // Update with password change
        $oldPassword = $editor->password;
        $this->actingAs($admin)->put(route('console.users.update', $editor), [
            'name' => 'Updated Editor Name',
            'username' => 'updatededitor',
            'email' => 'updatededitor@example.com',
            'role' => 'verifikator',
            'status' => 'inactive',
            'password' => 'newpassword123',
            'password_confirmation' => 'newpassword123',
        ]);

        $editor->refresh();
        $this->assertTrue(Hash::check('newpassword123', $editor->password));
    }

    /**
     * Test self-updates prevent role and status modification.
     */
    public function test_self_updates_ignore_role_and_status_changes(): void
    {
        $admin = User::factory()->create(['role' => 'admin', 'status' => 'active']);

        $response = $this->actingAs($admin)->put(route('console.users.update', $admin), [
            'name' => 'New Admin Name',
            'username' => $admin->username,
            'email' => $admin->email,
            'role' => 'editor', // Attempt to self-demote
            'status' => 'inactive', // Attempt to self-deactivate
        ]);

        $admin->refresh();
        $this->assertEquals('admin', $admin->role);
        $this->assertEquals('active', $admin->status);
        $this->assertEquals('New Admin Name', $admin->name);
    }

    /**
     * Test user deletion works.
     */
    public function test_user_deletion_removes_from_database(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $editor = User::factory()->create();

        $response = $this->actingAs($admin)->delete(route('console.users.destroy', $editor));

        $response->assertRedirect(route('console.users.index'));
        $this->assertDatabaseMissing('users', ['id' => $editor->id]);
    }

    /**
     * Test self-deletion is prevented.
     */
    public function test_self_deletion_is_prevented(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);

        $response = $this->actingAs($admin)->delete(route('console.users.destroy', $admin));

        $response->assertRedirect(route('console.users.index'));
        $response->assertSessionHas('error');
        $this->assertDatabaseHas('users', ['id' => $admin->id]);
    }
}
