<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUsEvaluation extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'about_us_evaluations';

    protected $fillable = [
        'title_ar',
        'title_en',
        'des_ar',
        'des_en',
        'jsoning',
    ];
    
    protected $casts = [
        'jsoning' => 'array',
    ];
}
