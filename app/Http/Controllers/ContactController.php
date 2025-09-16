<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:200',
            'email'   => 'required|email',
            'number'  => 'nullable|string|max:20',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        try {
            Mail::to('info@purnam.com')
                ->send(new ContactMail($validated, $request->email));

            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage(), $e->getLine(), $e->getFile());
            return back()->with('error', 'Mail could not be sent. Error: ' . $e->getMessage());
        }
    }
}
