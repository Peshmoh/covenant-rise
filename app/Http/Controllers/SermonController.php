<?php

namespace App\Http\Controllers;

use App\Models\Sermon;
use Illuminate\View\View;

class SermonController extends Controller
{
    public function show(Sermon $sermon): View
    {
        return view('page', [
            'pageTitle' => $sermon->title,
            'eyebrow' => 'Sermons',
            'headline' => $sermon->title,
            'body' => $sermon->excerpt ?? 'This sermon page is ready for your message archive, notes, and replay links.',
            'metaDescription' => $sermon->excerpt ?? 'Browse a sermon message from the Covenant Rise Ministries archive.',
            'highlights' => [
                [
                    'icon' => 'fas fa-microphone-lines',
                    'title' => $sermon->speaker,
                    'text' => 'Speaker for this message.',
                ],
                [
                    'icon' => 'fas fa-clock',
                    'title' => $sermon->duration ?? 'Full message',
                    'text' => $sermon->category,
                ],
                [
                    'icon' => 'fas fa-calendar-day',
                    'title' => $sermon->date ?? 'Recent',
                    'text' => 'When this message was preached.',
                ],
            ],
            'primary' => ['label' => 'Back to Media', 'url' => '/media#sermons'],
            'secondary' => ['label' => 'Watch Online', 'url' => '/online-church'],
            'anchorId' => null,
            'bodyParagraphs' => array_filter([$sermon->body]),
            'actions' => [],
            'sections' => [],
        ]);
    }
}
