<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_id', 'title', 'slug', 'content', 'author', 'created_at', 'updated_at'
    ];

    public function type()
    {
        return $this->belongsTo(GuideType::class, 'type_id');
    }
}
