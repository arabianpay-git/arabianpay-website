<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportUs extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'support_us';

    protected $fillable = [
        'title_ar',
        'title_en',
        'des_ar',
        'des_en',
        'jsoning', // للفئات: [{"title_ar": "...", "title_en": "...", "des_ar": "...", "des_en": "...", "icon": "...", "link": "..."}, ...]
    ];

    protected $casts = [
        'jsoning' => 'array',
    ];
}
