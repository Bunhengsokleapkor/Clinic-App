<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'doctors';
    protected $fillable = ['doctor_id', 'first_name', 'last_name', 'specialization', 'schedule'];
    protected $casts = [
        'doctor_id' => 'integer',
    ];
}
