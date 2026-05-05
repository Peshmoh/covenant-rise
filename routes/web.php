<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GiveController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\MinistryController;
use App\Http\Controllers\OnlineChurchController;
use App\Http\Controllers\PrayerRequestController;
use App\Http\Controllers\SermonController;
use App\Http\Controllers\VisitController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'show'])->name('about');
Route::get('/visit', [VisitController::class, 'show'])->name('visit');
Route::get('/give', [GiveController::class, 'show'])->name('give');
Route::get('/online-church', [OnlineChurchController::class, 'show'])->name('online-church');

Route::get('/media', [MediaController::class, 'index'])->name('media');
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/ministries', [MinistryController::class, 'index'])->name('ministries');

Route::get('/sermons/{sermon:slug}', [SermonController::class, 'show'])->name('sermons.show');
Route::get('/events/{event:slug}', [EventController::class, 'show'])->name('events.show');
Route::get('/ministries/{ministry:slug}', [MinistryController::class, 'show'])->name('ministries.show');

Route::get('/prayer', [PrayerRequestController::class, 'create'])->name('prayer');
Route::post('/prayer', [PrayerRequestController::class, 'store'])->middleware('throttle:6,1')->name('prayer.store');

Route::get('/contact', [ContactMessageController::class, 'create'])->name('contact');
Route::post('/contact', [ContactMessageController::class, 'store'])->middleware('throttle:6,1')->name('contact.send');

Route::redirect('/services', '/about#services')->name('services');
Route::redirect('/leadership', '/about#leadership')->name('leadership');
Route::redirect('/sermons', '/media#sermons')->name('sermons');
Route::redirect('/blogs', '/media#blogs')->name('blogs');
Route::redirect('/gallery', '/media#gallery')->name('gallery');
