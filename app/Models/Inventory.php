<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'inventory';
    protected $fillable = ['inventory_id', 'item_name', 'quantity', 'expiration_date'];
    protected $casts = [
        'inventory_id' => 'integer',
        'quantity' => 'integer',
    ];
}
