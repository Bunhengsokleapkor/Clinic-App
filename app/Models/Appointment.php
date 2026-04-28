<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'appointments';
    protected $fillable = ['appointment_id', 'patient_id', 'doctor_id', 'appointment_date', 'status'];
    protected $casts = [
        'appointment_id' => 'integer',
        'patient_id' => 'integer',
        'doctor_id' => 'integer',
    ];
}
