<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained('guide_types')->onDelete('cascade');
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('author');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('guides');
    }
};
