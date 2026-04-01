<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePannerPartner extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'home_panner_partners';

    protected $fillable = [
        'title_ar',
        'title_en',
        'link_ar',
        'link_en',
        'image',
    ];
    protected $casts = [
        'image' => 'array',
    ];
}
