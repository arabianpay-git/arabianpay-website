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
        Schema::create('support_panners', function (Blueprint $table) {
            $table->id();
            $table->string('title_ar')->nullable();
            $table->string('title_en')->nullable();
            $table->text('des_ar')->nullable();
            $table->text('des_en')->nullable();
            $table->string('btn_ar')->nullable();
            $table->string('btn_en')->nullable();
            $table->string('image_ar')->nullable();
            $table->string('image_en')->nullable();
            $table->json('jsoning')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('support_panners');
    }
};
