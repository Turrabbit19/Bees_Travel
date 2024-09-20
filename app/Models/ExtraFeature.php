<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_id',
        'name',    
        'price',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}