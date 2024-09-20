<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'tour_id',
        'tour_name',
        'tour_sku',
        'checkin',
        'checkout',
        'extra_feature',
        'quantity',
        'price',
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}