<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('about_us_maps', function (Blueprint $table) {
            $table->id();
            $table->string('title_ar')->nullable();
            $table->string('title_en')->nullable();
            $table->text('des_ar')->nullable();
            $table->text('des_en')->nullable();
            $table->text('des2_ar')->nullable();
            $table->text('des2_en')->nullable();
            $table->string('image')->nullable();
            $table->json('jsoning')->nullable(); // للإحصائيات
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us_maps');
    }
};
