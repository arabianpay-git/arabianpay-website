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
        Schema::table('support_us', function (Blueprint $table) {
            if (!Schema::hasColumn('support_us', 'jsoning')) {
                $table->json('jsoning')->nullable()->after('des_en');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('support_us', function (Blueprint $table) {
            $table->dropColumn('jsoning');
        });
    }
};
