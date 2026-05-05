<?php

namespace Tests\Feature;

use App\Models\Ministry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MinistryRoutingTest extends TestCase
{
    use RefreshDatabase;

    public function test_existing_ministry_renders(): void
    {
        $ministry = Ministry::factory()->create([
            'slug' => 'mens',
            'name' => "Men's Ministry",
        ]);

        $this->get('/ministries/'.$ministry->slug)
            ->assertOk()
            ->assertSee("Men&#039;s Ministry", escape: false);
    }

    public function test_unknown_ministry_slug_returns_404(): void
    {
        $this->get('/ministries/does-not-exist')->assertNotFound();
    }
}
