<?php

namespace App\Http\Controllers;

use App\Models\MobileEntry;
use Illuminate\Http\Request;

class MobileEntryController extends Controller
{
    // Display the form and existing mobile entries
    public function index()
    {
        $mobileEntries = MobileEntry::all();
        return view('mobiledata', compact('mobileEntries'));
    }

    // Store the new mobile entry
    public function store(Request $request)
    {
        $validated = $request->validate([
            'mobile_number' => 'required|digits:10', // Validation for mobile number
        ]);

        MobileEntry::create($validated);

        return redirect()->route('mobile-entries.index')->with('success', 'Mobile number added successfully!');
    }
}
