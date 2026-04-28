<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\PatientController;

Route::apiResource('patients', PatientController::class);
Route::apiResource('doctors', DoctorController::class);
Route::apiResource('appointments', AppointmentController::class);
Route::apiResource('billings', BillingController::class);
Route::apiResource('inventory', InventoryController::class);
Route::patch('appointments/{appointmentId}/status', [AppointmentController::class, 'updateStatus']);
Route::patch('billings/{billingId}/payment-status', [BillingController::class, 'updatePaymentStatus']);

Route::get('/reports/appointments/patient/{id}', [AppointmentController::class, 'byPatient']);
Route::get('/reports/appointments/doctor/{id}', [AppointmentController::class, 'byDoctor']);
Route::get('reports/unpaid/{id}', [BillingController::class, 'history']);
Route::get('reports/unpaid', [BillingController::class, 'unpaid']);
Route::get('reports/expiry', [InventoryController::class, 'nearExpiry']);




Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
