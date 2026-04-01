<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AbutUsBottomPanner extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'abut_us_bottom_panners';

    protected $fillable = [
        'title_ar',
        'title_en',
        'des_ar',
        'des_en',
        'des2_ar',
        'des2_en',
        'btn_ar',
        'btn_en',
        'btn2_ar',
        'btn2_en',
    ];
    
}
