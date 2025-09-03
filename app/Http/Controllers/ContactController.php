<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => ['required','string','max:120'],
            'email'   => ['required','email','max:160'],
            'subject' => ['required','string','max:160'],
            'message' => ['required','string','max:5000'],
        ]);

        // RENAME: 'message' -> 'body' agar tidak bentrok di Blade mail
        $payload = [
            'name'    => $data['name'],
            'email'   => $data['email'],
            'subject' => $data['subject'],
            'body'    => $data['message'],
        ];

        try {
            Mail::to('marvel.hans2809@gmail.com')->send(new ContactMessage($payload));
            return response()->json(['ok' => true]);
        } catch (\Throwable $e) {
            // kirim pesan error ke front-end agar kelihatan
            return response()->json(['ok' => false, 'error' => $e->getMessage()], 500);
        }
    }
}
