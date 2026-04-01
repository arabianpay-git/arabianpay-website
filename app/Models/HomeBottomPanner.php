<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeBottomPanner extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'home_bottom_panners';

    protected $fillable = [
        'title_ar',
        'title_en',
        'des_ar',
        'des_en',
        'iphone_ar',
        'iphone_en',
        'and_ar',
        'and_en',
    ];
}
