<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactMessageSubmissionTest extends TestCase
{
    use RefreshDatabase;

    public function test_valid_submission_persists_and_flashes_status(): void
    {
        $response = $this->post('/contact', [
            'name' => 'John D.',
            'email' => 'john@example.com',
            'message' => 'I would like to plan a visit.',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('status');

        $this->assertDatabaseHas('contact_messages', [
            'name' => 'John D.',
            'email' => 'john@example.com',
        ]);
    }

    public function test_missing_required_fields_fails_validation(): void
    {
        $this->post('/contact', [])
            ->assertSessionHasErrors(['name', 'email', 'message']);

        $this->assertDatabaseCount('contact_messages', 0);
    }

    public function test_honeypot_field_blocks_submission(): void
    {
        $this->post('/contact', [
            'name' => 'Bot',
            'email' => 'bot@example.com',
            'message' => 'Spam content here.',
            'website' => 'http://spam.example',
        ])->assertSessionHasErrors('website');

        $this->assertDatabaseCount('contact_messages', 0);
    }
}
