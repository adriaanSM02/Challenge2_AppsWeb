<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $guarded = [];
    public function orders()
    {
        return $this->belongsToMany(Orders::class, 'order_details')
            ->withPivot('quantity', 'price');
    }
}
