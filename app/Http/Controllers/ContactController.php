<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        if ($request->filled('honeypot')) {
            return response()->json(['message' => 'Spam detected'], 422);
        }
        $validatedData = $request->validate([
            'name' => 'required',
            'email_address' => 'required|email',
            'message' => 'required',
        ]);

        try {
            // Kirim email
            Mail::to('your-email@gmail.com')->send(new ContactFormMail($validatedData));
            
            return back()->with('success', 'Pesan berhasil dikirim!');
        } catch (\Exception $e) {
            return back()->with('error', 'Maaf, terjadi kesalahan. Silakan coba lagi.');
        }
    }
}
