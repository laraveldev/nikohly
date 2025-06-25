<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable =
     [
        'vendor_id',
        'category_id',
        'title',
        'price',
        'discount',
        'address',
        'description',
        'latitude',
        'longitude',
        'created_at',
        'updated_at'
    ];
    protected $casts = [
        "price" => "decimal:2",
        "discount" => "decimal:2",
        "latitude" => "decimal:8",
        "longitude" => "decimal:8",
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
