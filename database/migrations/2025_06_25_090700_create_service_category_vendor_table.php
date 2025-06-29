<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_category_vendor', function (Blueprint $table) {
            $table->foreignId('vendor_id')->constrained('vendors')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('service_categories')->onDelete('cascade');
            $table->unique(['vendor_id', 'category_id']);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('service_category_vendor');
    }
};
