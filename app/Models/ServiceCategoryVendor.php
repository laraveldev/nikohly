<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategoryVendor extends Model
{
    public $timestamps = false;
    protected $table = 'service_category_vendor';
    protected $fillable = ['vendor_id', 'category_id'];
}
