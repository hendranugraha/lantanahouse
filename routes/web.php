<?php

use App\Http\Controllers\InquiryController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

Route::get('/favicon.ico', function (): BinaryFileResponse {
    $path = public_path('favicon.ico');

    abort_unless(is_file($path), 404);

    return response()->file($path, [
        'Content-Type' => 'image/x-icon',
        'Cache-Control' => 'public, max-age=86400',
    ]);
})->name('favicon');

Route::get('/locale/{locale}', LocaleController::class)->name('locale.switch');

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/facilities', [PageController::class, 'facilities'])->name('facilities');
Route::get('/room-tour', [PageController::class, 'roomTour'])->name('room-tour');
Route::get('/our-location', [PageController::class, 'ourLocation'])->name('our-location');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');

Route::post('/inquiries', [InquiryController::class, 'store'])
    ->middleware('throttle:10,1')
    ->name('inquiries.store');
