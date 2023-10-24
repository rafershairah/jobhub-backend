<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function uploadform()
    {
        return ('uploadform');
    }

    public function applyform(Request $request)
    {
        $request->validate([
            'Full Name' => 'required|string',
            'Email' => 'required|email',
            'Resume/CV' => 'required|file|mimes:pdf,doc,docx'
        ]);

        if ($request->file('file')->isValid()) {
            $path = $request->file('file')->store('apply');

            return back()->with('success', 'File uploaded successfully');
        }

        return back()->with('error', 'File upload failed');
    }
}
