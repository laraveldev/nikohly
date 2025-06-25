<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceImage extends Model
{
    use HasFactory;
    protected $fillable = ['service_id', 'image_url', 'is_main'];
    public $timestamps = false;

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
