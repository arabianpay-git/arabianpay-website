<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contact_panners', function (Blueprint $table) {
            $table->string('hero_image', 512)->nullable()->after('title_en');
        });
    }

    public function down(): void
    {
        Schema::table('contact_panners', function (Blueprint $table) {
            $table->dropColumn('hero_image');
        });
    }
};
