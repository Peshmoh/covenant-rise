<?php

namespace Tests\Feature;

use Database\Seeders\EventSeeder;
use Database\Seeders\MinistrySeeder;
use Database\Seeders\SermonSeeder;
use Database\Seeders\TestimonySeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PageRenderingTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->seed([
            SermonSeeder::class,
            EventSeeder::class,
            MinistrySeeder::class,
            TestimonySeeder::class,
        ]);
    }

    #[DataProvider('pages')]
    public function test_page_renders_with_expected_copy(string $uri, string $expectedFragment): void
    {
        $response = $this->get($uri);

        $response->assertOk();
        $response->assertSee($expectedFragment, escape: false);
    }

    public static function pages(): array
    {
        return [
            'home' => ['/', 'Grow in Faith'],
            'about' => ['/about', 'Vision &amp; Mission'],
            'media' => ['/media', 'Sermons, blogs, and gallery moments'],
            'visit' => ['/visit', 'Guest Experience'],
            'ministries' => ['/ministries', 'Serve Together'],
            'events' => ['/events', 'Church Calendar'],
            'give' => ['/give', 'Generosity'],
            'online-church' => ['/online-church', 'Livestream'],
            'prayer' => ['/prayer', 'Prayer Request'],
            'contact' => ['/contact', 'Stay Connected'],
        ];
    }

    public function test_redirects_resolve_to_anchors(): void
    {
        $this->get('/services')->assertRedirect('/about#services');
        $this->get('/leadership')->assertRedirect('/about#leadership');
        $this->get('/blogs')->assertRedirect('/media#blogs');
        $this->get('/gallery')->assertRedirect('/media#gallery');
    }
}
