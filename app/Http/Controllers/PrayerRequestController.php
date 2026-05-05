<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrayerRequestRequest;
use App\Models\PrayerRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PrayerRequestController extends Controller
{
    public function create(): View
    {
        return view('page', [
            'pageTitle' => 'Prayer',
            'eyebrow' => 'Prayer Request',
            'headline' => 'We are here to pray with you',
            'body' => 'Send your request and our team will stand with you in faith, care, and confidentiality.',
            'metaDescription' => 'Send a prayer request to Covenant Rise Ministries.',
            'highlights' => [
                [
                    'icon' => 'fas fa-lock',
                    'title' => 'Confidential Care',
                    'text' => 'We handle requests with care and respect.',
                ],
                [
                    'icon' => 'fas fa-hands-praying',
                    'title' => 'Intercession',
                    'text' => 'Our prayer team stands with individuals, families, and leaders.',
                ],
                [
                    'icon' => 'fas fa-phone-volume',
                    'title' => 'Follow Up',
                    'text' => 'When needed, we can connect you with pastoral support.',
                ],
            ],
            'primary' => ['label' => 'Contact Us', 'url' => '/contact'],
            'secondary' => ['label' => 'Visit Us', 'url' => '/visit'],
            'anchorId' => null,
            'bodyParagraphs' => [],
            'actions' => [],
            'sections' => [],
        ]);
    }

    public function store(StorePrayerRequestRequest $request): RedirectResponse
    {
        PrayerRequest::create($request->validated());

        return back()->with('status', 'Thanks. Your prayer request has been received.');
    }
}
