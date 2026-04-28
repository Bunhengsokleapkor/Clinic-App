<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'billings';
    protected $fillable = ['billing_id', 'patient_id', 'amount', 'billing_date', 'payment_status'];
    protected $casts = [
        'billing_id' => 'integer',
        'patient_id' => 'integer',
    ];
}
