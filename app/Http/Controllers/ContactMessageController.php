<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactMessageController extends Controller
{
    public function create(): View
    {
        $whatsapp = config('church.whatsapp');
        $whatsappDigits = preg_replace('/\D+/', '', $whatsapp);
        $email = config('church.email');

        return view('page', [
            'pageTitle' => 'Contact',
            'eyebrow' => 'Stay Connected',
            'headline' => 'Reach us by WhatsApp, email, or in person',
            'body' => 'We would love to hear from you and help you take your next step. Message us on WhatsApp at '.$whatsapp.', send us an email, or open the map for directions to our meeting place.',
            'metaDescription' => 'Contact Covenant Rise Ministries in Nairobi.',
            'highlights' => [
                [
                    'icon' => 'fab fa-whatsapp',
                    'title' => 'WhatsApp Us',
                    'text' => 'Send a message to '.$whatsapp.' and we will reply as soon as possible.',
                    'url' => 'https://wa.me/'.$whatsappDigits,
                    'target' => '_blank',
                    'rel' => 'noopener noreferrer',
                ],
                [
                    'icon' => 'fas fa-envelope',
                    'title' => 'Send Email',
                    'text' => 'Send a note anytime to '.$email.' and our team will reply as soon as possible.',
                    'url' => 'mailto:'.$email,
                ],
                [
                    'icon' => 'fas fa-location-dot',
                    'title' => 'Visit In Person',
                    'text' => 'Main Sanctuary, Nairobi, Kenya. We meet in a welcoming, easy-to-find location with parking nearby and clear directions from the main road.',
                    'url' => 'https://www.google.com/maps/search/?api=1&query=Covenant+Rise+Ministries+Nairobi+Kenya',
                    'target' => '_blank',
                    'rel' => 'noopener noreferrer',
                ],
            ],
            'primary' => null,
            'secondary' => null,
            'anchorId' => null,
            'bodyParagraphs' => [
                'We are happy to connect with you and make the next step simple. If you need prayer, want to plan a visit, or need directions, our team is ready to help.',
                'The fastest way to reach us is WhatsApp. You can also email us directly or tap the location card to open Google Maps for a quick route to the church.',
            ],
            'actions' => [
                ['label' => 'WhatsApp Us', 'url' => 'https://wa.me/'.$whatsappDigits, 'class' => 'btn btn-gold', 'target' => '_blank', 'rel' => 'noopener noreferrer'],
                ['label' => 'Plan a Visit', 'url' => '/visit', 'class' => 'btn btn-outline'],
                ['label' => 'Email Us', 'url' => 'mailto:'.$email, 'class' => 'btn btn-outline'],
            ],
            'sections' => [],
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        return back()->with('status', 'Thanks. Your message has been received.');
    }
}
