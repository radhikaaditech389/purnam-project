<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'email'      => 'required|email',
            'phone'      => 'required|string|max:20',
            'subject'    => 'required|string',
            'date'       => 'required|string',
            'time'       => 'required|string',
        ]);

        try {
            Mail::to('info@purnam.com')
                ->send(new AppointmentMail($validated, $request->email));

            return back()->with('success', 'Your appointment has been sent successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Mail could not be sent. Error: ' . $e->getMessage());
        }
    }
}
