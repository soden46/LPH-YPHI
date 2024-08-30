<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $details = [
            'title' => $request->subject,
            'body' => $request->message,
            'from' => $request->email,
            'name' => $request->name,
        ];

        Mail::send([], [], function ($message) use ($details) {
            $message->from($details['from'], $details['name'])
                ->to('info@example.com')
                ->subject($details['title'])
                ->setBody($details['body']);
        });

        return back()->with('success', 'Pesan Anda telah terkirim!');
    }
}
