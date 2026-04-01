<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobsPanner extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'jobs_panners';

    protected $fillable = [
        'jobcategory',
        'name_ar',
        'name_en',
        'location_ar',
        'location_en',
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
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Jobcategory::class, 'jobcategory');
    }

}
