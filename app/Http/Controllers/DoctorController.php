<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return Doctor::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'doctor_id' => 'nullable|integer|min:1',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'schedule' => 'nullable|string|max:255',
        ]);

        $validated['doctor_id'] = (int) ($validated['doctor_id'] ?? ((int) Doctor::max('doctor_id') + 1));

        return Doctor::create($validated);
    }
}
