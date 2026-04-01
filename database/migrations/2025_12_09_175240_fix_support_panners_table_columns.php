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
        Schema::table('support_panners', function (Blueprint $table) {
            // جعل main_image و side_image nullable
            $table->string('main_image')->nullable()->change();
            $table->string('side_image')->nullable()->change();
            // جعل des_ar و des_en nullable
            $table->text('des_ar')->nullable()->change();
            $table->text('des_en')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('support_panners', function (Blueprint $table) {
            $table->string('main_image')->nullable(false)->change();
            $table->string('side_image')->nullable(false)->change();
            $table->text('des_ar')->nullable(false)->change();
            $table->text('des_en')->nullable(false)->change();
        });
    }
};
