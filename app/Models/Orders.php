<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{ protected $fillable = [
    'client_id',
    'status',
    'subtotal',
    'tax',
    'total',
    'notes',
    'dateNtime',
    'photo1',
    'active',
    'created_at',
    'updated_at',
];

}
