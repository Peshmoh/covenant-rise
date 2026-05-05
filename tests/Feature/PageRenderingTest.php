<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PageRenderingTest extends TestCase
{
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

    public function test_sermon_slug_renders(): void
    {
        $this->get('/sermons/faith-for-the-long-road')
            ->assertOk()
            ->assertSee('Faith For The Long Road');
    }

    public function test_event_slug_renders(): void
    {
        $this->get('/events/friday-night-prayer')
            ->assertOk()
            ->assertSee('Friday Night Prayer');
    }

    public function test_ministry_slug_renders_with_label_map(): void
    {
        $this->get('/ministries/mens')
            ->assertOk()
            ->assertSee("Men&#039;s Ministry", escape: false);
    }

    public function test_redirects_resolve_to_anchors(): void
    {
        $this->get('/services')->assertRedirect('/about#services');
        $this->get('/leadership')->assertRedirect('/about#leadership');
        $this->get('/blogs')->assertRedirect('/media#blogs');
        $this->get('/gallery')->assertRedirect('/media#gallery');
    }

    public function test_prayer_post_flashes_status(): void
    {
        $this->post('/prayer', [])
            ->assertRedirect()
            ->assertSessionHas('status');
    }

    public function test_contact_post_flashes_status(): void
    {
        $this->post('/contact', [])
            ->assertRedirect()
            ->assertSessionHas('status');
    }
}
