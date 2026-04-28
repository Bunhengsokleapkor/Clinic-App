<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BillingController extends Controller
{
    private const PAYMENT_STATUSES = ['Unpaid', 'Paid'];

    public function index()
    {
        return Billing::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'billing_id' => 'nullable|integer|min:1',
            'patient_id' => 'required|integer|min:1',
            'amount' => 'required|numeric|min:0',
            'billing_date' => 'required|date',
            'payment_status' => 'required|string|max:50',
        ]);

        $validated['billing_id'] = (int) ($validated['billing_id'] ?? ((int) Billing::max('billing_id') + 1));
        $validated['patient_id'] = (int) $validated['patient_id'];

        return Billing::create($validated);
    }

    public function history($id)
    {
        return Billing::where('patient_id', (int) $id)->get();
    }

    public function unpaid()
    {
        return Billing::where('payment_status', 'Unpaid')->get();
    }

    public function updatePaymentStatus(Request $request, int $billingId): JsonResponse
    {
        $validated = $request->validate([
            'payment_status' => 'required|string|in:' . implode(',', self::PAYMENT_STATUSES),
        ]);

        $billing = Billing::where('billing_id', $billingId)->first();

        if (!$billing) {
            return response()->json([
                'message' => 'Billing record not found.',
            ], 404);
        }

        $billing->payment_status = $validated['payment_status'];
        $billing->save();

        return response()->json($billing);
    }
}