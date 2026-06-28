<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ConsoleAuthenticationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that guests are redirected to login when trying to access the console dashboard.
     */
    public function test_guests_are_redirected_to_login(): void
    {
        $response = $this->get(route('console.dashboard'));

        $response->assertRedirect(route('console.login'));
    }

    /**
     * Test that the login page renders successfully.
     */
    public function test_login_page_renders_successfully(): void
    {
        $response = $this->get(route('console.login'));

        $response->assertStatus(200);
        $response->assertSee('Masuk ke Console');
    }

    /**
     * Test that authenticated users are redirected to the dashboard when trying to view the login page.
     */
    public function test_authenticated_users_are_redirected_to_dashboard_from_login(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('console.login'));

        $response->assertRedirect(route('console.dashboard'));
    }

    /**
     * Test successful login.
     */
    public function test_user_can_login_with_valid_credentials(): void
    {
        $user = User::factory()->create([
            'password' => bcrypt($password = 'secret-password'),
        ]);

        $response = $this->post(route('console.login'), [
            'username' => $user->username,
            'password' => $password,
        ]);

        $response->assertRedirect(route('console.dashboard'));
        $this->assertAuthenticatedAs($user);
    }

    /**
     * Test login with invalid credentials.
     */
    public function test_user_cannot_login_with_invalid_credentials(): void
    {
        $user = User::factory()->create();

        $response = $this->post(route('console.login'), [
            'username' => $user->username,
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors('username');
        $this->assertGuest();
    }

    /**
     * Test successful logout.
     */
    public function test_user_can_logout(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('console.logout'));

        $response->assertRedirect(route('console.login'));
        $this->assertGuest();
    }
}
