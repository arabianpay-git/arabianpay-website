<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeturesPanner extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'fetures_panners';

    protected $fillable = [
        'title_ar',
        'title_en',
        'sup_ar',
        'sup_en',
        'jsoning'
    ];

    protected $casts = [
        'jsoning' => 'array',
    ];
}
