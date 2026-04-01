<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jobcategory extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'jobcategories';

    protected $fillable = [
        'name_ar',
        'name_en',
    ];
    
    public function jobs(): HasMany
    {
        return $this->hasMany(JobsPanner::class, 'jobcategory');
    }
}
