<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PrayerRequestSubmissionTest extends TestCase
{
    use RefreshDatabase;

    public function test_valid_submission_persists_and_flashes_status(): void
    {
        $response = $this->post('/prayer', [
            'name' => 'Mary K.',
            'email' => 'mary@example.com',
            'message' => 'Please pray for my family.',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('status');

        $this->assertDatabaseHas('prayer_requests', [
            'name' => 'Mary K.',
            'email' => 'mary@example.com',
        ]);
    }

    public function test_missing_required_fields_fails_validation(): void
    {
        $this->post('/prayer', [])
            ->assertSessionHasErrors(['name', 'message']);

        $this->assertDatabaseCount('prayer_requests', 0);
    }

    public function test_honeypot_field_blocks_submission(): void
    {
        $this->post('/prayer', [
            'name' => 'Bot',
            'message' => 'Spam content here.',
            'website' => 'http://spam.example',
        ])->assertSessionHasErrors('website');

        $this->assertDatabaseCount('prayer_requests', 0);
    }
}
