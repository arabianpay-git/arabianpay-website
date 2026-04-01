<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuplierBottomPanner extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'suplier_bottom_panners';

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
