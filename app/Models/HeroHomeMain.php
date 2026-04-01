<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroHomeMain extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity
     */
    protected $table = 'hero_home_mains';

    protected $fillable = [
        'image',
        'imageletf',
        'imageright',
        'imagemiddle',
        'title_ar',
        'title_en',
        'titleline_ar',
        'titleline_en',
        'des_ar',
        'des_en',
        'number',
    ];
}
