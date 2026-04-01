<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Codition extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'coditions';

    protected $fillable = [
        'title_ar',
        'title_en',
        'text_ar',
        'text_en',
        'intro_ar',
        'intro_en',
        'jsoning_hero', // للبطاقات في Hero: [{"title_ar": "...", "title_en": "...", "des_ar": "...", "des_en": "...", "icon": "..."}, ...]
        'jsoning_content', // للأقسام في Content: [{"title_ar": "...", "title_en": "...", "content_ar": "...", "content_en": "...", "items": [...]}, ...]
    ];

    protected $casts = [
        'jsoning_hero' => 'array',
        'jsoning_content' => 'array',
    ];
}
