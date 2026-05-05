<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class SermonController extends Controller
{
    public function show(string $slug): View
    {
        $label = ucwords(str_replace('-', ' ', $slug));

        return view('page', [
            'pageTitle' => $label,
            'eyebrow' => 'Sermons',
            'headline' => $label,
            'body' => 'This sermon page is ready for your message archive, notes, and replay links.',
            'metaDescription' => 'Browse a sermon message from the Covenant Rise Ministries archive.',
            'highlights' => [
                [
                    'icon' => 'fas fa-book-open',
                    'title' => 'Scripture Focus',
                    'text' => 'Every message should point back to the Word of God.',
                ],
                [
                    'icon' => 'fas fa-play',
                    'title' => 'Watch Again',
                    'text' => 'Use this page for the replay and key sermon clips.',
                ],
                [
                    'icon' => 'fas fa-share-nodes',
                    'title' => 'Share Hope',
                    'text' => 'Add notes, downloads, and easy ways to share the message.',
                ],
            ],
            'primary' => ['label' => 'Back to Media', 'url' => '/media#sermons'],
            'secondary' => ['label' => 'Watch Online', 'url' => '/online-church'],
            'anchorId' => null,
            'bodyParagraphs' => [],
            'actions' => [],
            'sections' => [],
        ]);
    }
}
