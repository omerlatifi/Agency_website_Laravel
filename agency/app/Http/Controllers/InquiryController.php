<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name'   => 'required|string|max:255',
            'last_name'    => 'nullable|string|max:255',
            'email'        => 'required|email|max:255|unique:inquiries,email',
            'phone'        => 'required|numeric|digits_between:6,15',
            'office'       => 'required|string|max:255',
            'destination'  => 'required|string|max:255',
            'exam_status'  => 'required|string|max:255',
            'funding'      => 'required|string|max:255',
            'message'      => 'nullable|string|max:2000',
        ]);

        Inquiry::create($validated);

        return redirect('/')->with('success', 'Your inquiry has been submitted successfully!');
    }
}
