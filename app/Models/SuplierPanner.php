<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuplierPanner extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'suplier_panners';

    protected $fillable = [
        'des_ar',
        'des_en',
        'jsoning',
        'main_image',
        'side_image',
    ];

    protected $casts = [
        'jsoning' => 'array',
    ];
}
