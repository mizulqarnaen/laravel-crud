<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'payment_type',
        'shipping_cost',
        'description',
        'total_amount',
        'source'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
