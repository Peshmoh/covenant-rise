<?php

namespace Tests\Feature;

use App\Models\Sermon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SermonRoutingTest extends TestCase
{
    use RefreshDatabase;

    public function test_existing_sermon_renders(): void
    {
        $sermon = Sermon::factory()->create([
            'slug' => 'walking-by-faith',
            'title' => 'Walking By Faith',
        ]);

        $this->get('/sermons/'.$sermon->slug)
            ->assertOk()
            ->assertSee('Walking By Faith');
    }

    public function test_unknown_sermon_slug_returns_404(): void
    {
        $this->get('/sermons/does-not-exist')->assertNotFound();
    }
}
