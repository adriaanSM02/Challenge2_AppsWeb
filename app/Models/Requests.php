<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $table = 'requests'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'product_id',
        'quantity',
        'status',
        'created_at',
        'updated_at',
    ];
}
