<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepannerMarketting extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'homepanner_markettings';

    protected $fillable = [
        'title_ar',
        'title_en',
        'des_ar',
        'des_en',
        'list',
        'image',
    ];

    protected $casts = [
        'list' => 'array',
    ];
}
