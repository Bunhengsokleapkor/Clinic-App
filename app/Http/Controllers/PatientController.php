<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return Patient::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'patient_id' => 'nullable|integer|min:1',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'nullable|date',
            'gender' => 'nullable|string|in:Male,Female',
            'address' => 'nullable|string|max:500',
            'phone' => 'nullable|string|max:50',
            'insurance_info' => 'nullable|string|max:500',
        ]);

        $validated['patient_id'] = (int) ($validated['patient_id'] ?? ((int) Patient::max('patient_id') + 1));

        return Patient::create($validated);
    }
}
