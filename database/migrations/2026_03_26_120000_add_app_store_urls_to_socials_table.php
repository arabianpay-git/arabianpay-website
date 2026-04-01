<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('socials', function (Blueprint $table) {
            $table->string('app_store_url', 500)->nullable()->after('mail');
            $table->string('google_play_url', 500)->nullable()->after('app_store_url');
        });
    }

    public function down(): void
    {
        Schema::table('socials', function (Blueprint $table) {
            $table->dropColumn(['app_store_url', 'google_play_url']);
        });
    }
};
