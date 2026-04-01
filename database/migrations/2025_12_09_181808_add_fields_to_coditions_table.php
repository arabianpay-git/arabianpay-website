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
        Schema::table('coditions', function (Blueprint $table) {
            if (!Schema::hasColumn('coditions', 'intro_ar')) {
                $table->text('intro_ar')->nullable()->after('text_en');
            }
            if (!Schema::hasColumn('coditions', 'intro_en')) {
                $table->text('intro_en')->nullable()->after('intro_ar');
            }
            if (!Schema::hasColumn('coditions', 'jsoning_hero')) {
                $table->json('jsoning_hero')->nullable()->after('intro_en');
            }
            if (!Schema::hasColumn('coditions', 'jsoning_content')) {
                $table->json('jsoning_content')->nullable()->after('jsoning_hero');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('coditions', function (Blueprint $table) {
            $table->dropColumn(['intro_ar', 'intro_en', 'jsoning_hero', 'jsoning_content']);
        });
    }
};
