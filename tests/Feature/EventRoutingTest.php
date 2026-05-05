<?php

namespace Tests\Feature;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventRoutingTest extends TestCase
{
    use RefreshDatabase;

    public function test_existing_event_renders(): void
    {
        $event = Event::factory()->create([
            'slug' => 'community-outreach',
            'title' => 'Community Outreach',
        ]);

        $this->get('/events/'.$event->slug)
            ->assertOk()
            ->assertSee('Community Outreach');
    }

    public function test_unknown_event_slug_returns_404(): void
    {
        $this->get('/events/does-not-exist')->assertNotFound();
    }
}
