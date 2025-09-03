<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::view('/', 'pages.home')->name('home');
Route::post('/contact/send', [ContactController::class, 'send'])
     ->name('contact.send');

// Safety: jika ada GET ke /contact/send, redirect sopan ke #contact
Route::get('/contact/send', function () {
    return redirect()->to(route('home') . '#contact');
});