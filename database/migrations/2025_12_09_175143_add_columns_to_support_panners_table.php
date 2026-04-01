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
            if (!Schema::hasColumn('support_panners', 'title_ar')) {
                $table->string('title_ar')->nullable()->after('id');
            }
            if (!Schema::hasColumn('support_panners', 'title_en')) {
                $table->string('title_en')->nullable()->after('title_ar');
            }
            if (!Schema::hasColumn('support_panners', 'des_ar')) {
                $table->text('des_ar')->nullable()->after('title_en');
            }
            if (!Schema::hasColumn('support_panners', 'des_en')) {
                $table->text('des_en')->nullable()->after('des_ar');
            }
            if (!Schema::hasColumn('support_panners', 'btn_ar')) {
                $table->string('btn_ar')->nullable()->after('des_en');
            }
            if (!Schema::hasColumn('support_panners', 'btn_en')) {
                $table->string('btn_en')->nullable()->after('btn_ar');
            }
            if (!Schema::hasColumn('support_panners', 'image_ar')) {
                $table->string('image_ar')->nullable()->after('btn_en');
            }
            if (!Schema::hasColumn('support_panners', 'image_en')) {
                $table->string('image_en')->nullable()->after('image_ar');
            }
            if (!Schema::hasColumn('support_panners', 'jsoning')) {
                $table->json('jsoning')->nullable()->after('image_en');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('support_panners', function (Blueprint $table) {
            $table->dropColumn(['title_ar', 'title_en', 'des_ar', 'des_en', 'btn_ar', 'btn_en', 'image_ar', 'image_en', 'jsoning']);
        });
    }
};
