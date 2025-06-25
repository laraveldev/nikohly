<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'vendor_id', 'category_id', 'title', 'price_min', 'price_max', 'address', 'description', 'latitude', 'longitude', 'created_at', 'updated_at'
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }

    public function images()
    {
        return $this->hasMany(ServiceImage::class);
    }
}
