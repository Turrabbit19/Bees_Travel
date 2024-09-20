<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'place_id',
        'name',
        'slug',
        'sku',
        'img_thumb',
        'price',
        'description',
        'schedule',
        'expense',
        'is_active',
        'view'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function extraFeatures()
    {
        return $this->hasMany(ExtraFeature::class);
    }
}