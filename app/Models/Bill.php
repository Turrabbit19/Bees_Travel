<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'payment_method',
        'total_amount',
        'transaction_id',
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}