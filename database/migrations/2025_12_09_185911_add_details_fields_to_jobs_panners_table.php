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
        Schema::table('jobs_panners', function (Blueprint $table) {
            if (!Schema::hasColumn('jobs_panners', 'description_ar')) {
                $table->text('description_ar')->nullable()->after('location_en');
            }
            if (!Schema::hasColumn('jobs_panners', 'description_en')) {
                $table->text('description_en')->nullable()->after('description_ar');
            }
            if (!Schema::hasColumn('jobs_panners', 'requirements_ar')) {
                $table->text('requirements_ar')->nullable()->after('description_en');
            }
            if (!Schema::hasColumn('jobs_panners', 'requirements_en')) {
                $table->text('requirements_en')->nullable()->after('requirements_ar');
            }
            if (!Schema::hasColumn('jobs_panners', 'salary_ar')) {
                $table->string('salary_ar')->nullable()->after('requirements_en');
            }
            if (!Schema::hasColumn('jobs_panners', 'salary_en')) {
                $table->string('salary_en')->nullable()->after('salary_ar');
            }
            if (!Schema::hasColumn('jobs_panners', 'type_ar')) {
                $table->string('type_ar')->nullable()->after('salary_en');
            }
            if (!Schema::hasColumn('jobs_panners', 'type_en')) {
                $table->string('type_en')->nullable()->after('type_ar');
            }
            if (!Schema::hasColumn('jobs_panners', 'experience_ar')) {
                $table->string('experience_ar')->nullable()->after('type_en');
            }
            if (!Schema::hasColumn('jobs_panners', 'experience_en')) {
                $table->string('experience_en')->nullable()->after('experience_ar');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jobs_panners', function (Blueprint $table) {
            $table->dropColumn([
                'description_ar',
                'description_en',
                'requirements_ar',
                'requirements_en',
                'salary_ar',
                'salary_en',
                'type_ar',
                'type_en',
                'experience_ar',
                'experience_en',
            ]);
        });
    }
};
