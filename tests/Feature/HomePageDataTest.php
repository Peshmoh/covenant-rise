<?php

namespace Tests\Feature;

use App\Models\Event;
use App\Models\Sermon;
use App\Models\Testimony;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomePageDataTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_renders_seeded_sermons_events_and_testimonies(): void
    {
        Sermon::factory()->create([
            'title' => 'Anchored In Hope',
            'slug' => 'anchored-in-hope',
            'published_at' => now()->subDay(),
        ]);

        Event::factory()->create([
            'title' => 'Worship Encounter',
            'slug' => 'worship-encounter',
            'starts_at' => now()->addWeek(),
        ]);

        Testimony::factory()->create([
            'name' => 'Grace M.',
            'quote' => 'God restored my family through this church.',
            'is_published' => true,
        ]);

        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('Anchored In Hope');
        $response->assertSee('Worship Encounter');
        $response->assertSee('Grace M.');
    }
}
