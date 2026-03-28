<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Message::create($validated);

        try {
            Mail::to('thann9868@gmail.com')->send(new ContactFormMail($validated));
        } catch (\Exception $e) {
            Log::error('Failed to send contact email: ' . $e->getMessage());
        }

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Signal Transmitted Successfully! The commander has received your message.'
            ]);
        }

        return redirect()->back()->with('success', 'Signal Transmitted Successfully! The commander has received your message.');
    }
}
