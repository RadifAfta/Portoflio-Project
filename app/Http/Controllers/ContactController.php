<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email_address' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('your@email.com')->send(new ContactFormMail($validatedData));

        return redirect()->back()->with('success', 'Terima kasih atas pesan Anda. Kami akan segera menghubungi Anda!');
    }
}
