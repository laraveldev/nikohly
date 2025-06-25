<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuideType extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public $timestamps = false;

    public function guides()
    {
        return $this->hasMany(Guide::class, 'type_id');
    }
}
