<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'patients';
    protected $fillable = ['patient_id', 'first_name', 'last_name', 'dob', 'gender', 'address', 'phone', 'insurance_info'];
    protected $casts = [
        'patient_id' => 'integer',
    ];
}
