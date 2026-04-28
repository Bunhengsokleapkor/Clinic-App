<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AppointmentController extends Controller
{
    private const STATUSES = ['Scheduled', 'Completed', 'Cancelled', 'No-show', 'Rescheduled'];

    public function index()
    {
        return Appointment::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'appointment_id' => 'nullable|integer|min:1',
            'patient_id' => 'required|integer|min:1',
            'doctor_id' => 'required|integer|min:1',
            'appointment_date' => 'required|date',
            'status' => 'required|string|max:50',
        ]);

        $validated['appointment_id'] = (int) ($validated['appointment_id'] ?? ((int) Appointment::max('appointment_id') + 1));
        $validated['patient_id'] = (int) $validated['patient_id'];
        $validated['doctor_id'] = (int) $validated['doctor_id'];

        return Appointment::create($validated);
    }

    // Reports
    public function byPatient($id)
    {
        return Appointment::where('patient_id', (int) $id)->get();
    }

    public function byDoctor($id)
    {
        return Appointment::where('doctor_id', (int) $id)->get();
    }

    public function updateStatus(Request $request, int $appointmentId): JsonResponse
    {
        $validated = $request->validate([
            'status' => 'required|string|in:' . implode(',', self::STATUSES),
        ]);

        $appointment = Appointment::where('appointment_id', $appointmentId)->first();

        if (!$appointment) {
            return response()->json([
                'message' => 'Appointment record not found.',
            ], 404);
        }

        $appointment->status = $validated['status'];
        $appointment->save();

        return response()->json($appointment);
    }
}