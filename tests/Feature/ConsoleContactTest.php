<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ConsoleContactTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that guests cannot access contacts routes.
     */
    public function test_guests_cannot_access_contacts(): void
    {
        $contact = Contact::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Hello',
            'message' => 'This is a message',
        ]);

        $this->get(route('console.contacts.index'))->assertRedirect(route('console.login'));
        $this->get(route('console.contacts.show', $contact))->assertRedirect(route('console.login'));
        $this->delete(route('console.contacts.destroy', $contact))->assertRedirect(route('console.login'));
    }

    /**
     * Test that authenticated users can view contacts.
     */
    public function test_authenticated_users_can_view_contacts(): void
    {
        $user = User::factory()->create();
        $contact = Contact::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Feedback',
            'message' => 'Loved the article!',
        ]);

        $response = $this->actingAs($user)->get(route('console.contacts.index'));

        $response->assertStatus(200);
        $response->assertSee('john@example.com');
        $response->assertSee('Feedback');
    }

    /**
     * Test that authenticated users can view contact details.
     */
    public function test_authenticated_users_can_view_contact_details(): void
    {
        $user = User::factory()->create();
        $contact = Contact::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'subject' => 'Advertise Info',
            'message' => 'I would like to advertise on your portal.',
        ]);

        $response = $this->actingAs($user)->get(route('console.contacts.show', $contact));

        $response->assertStatus(200);
        $response->assertSee('Jane Smith');
        $response->assertSee('jane@example.com');
        $response->assertSee('I would like to advertise on your portal.');
    }

    /**
     * Test that contact search works.
     */
    public function test_contact_search_works(): void
    {
        $user = User::factory()->create();
        $matchingContact = Contact::create([
            'name' => 'Specific Target Name',
            'email' => 'match@example.com',
            'subject' => 'General Topic',
            'message' => 'Message here',
        ]);
        $nonMatchingContact = Contact::create([
            'name' => 'Other Name',
            'email' => 'other@example.com',
            'subject' => 'Topic',
            'message' => 'Message here',
        ]);

        $response = $this->actingAs($user)->get(route('console.contacts.index', ['search' => 'Specific Target']));

        $response->assertStatus(200);
        $response->assertSee('Specific Target Name');
        $response->assertDontSee('Other Name');
    }

    /**
     * Test that authenticated users can delete contacts.
     */
    public function test_authenticated_users_can_delete_contacts(): void
    {
        $user = User::factory()->create();
        $contact = Contact::create([
            'name' => 'Spam Sender',
            'email' => 'spam@spam.com',
            'subject' => 'Buy things',
            'message' => 'A lot of spam text',
        ]);

        $response = $this->actingAs($user)->delete(route('console.contacts.destroy', $contact));

        $response->assertRedirect(route('console.contacts.index'));
        $response->assertSessionHas('success');
        $this->assertDatabaseMissing('contacts', ['id' => $contact->id]);
    }
}
