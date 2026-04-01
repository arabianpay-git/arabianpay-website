<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MerchantstepsPanner extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'merchantsteps_panners';

    protected $fillable = [
        'title_ar',
        'title_en',
        'des_ar',
        'des_en',
        'btna',      // button A
        'btng',      // button G?
        'number',
        'sup_ar',
        'sup_en',
        'btnd_ar',   // button D (Arabic)
        'btnd_en',   // button D (English)
        'subdes_ar',
        'subdes_en',
        'jsoning',
    ];

    protected $casts = [
        'jsoning' => 'array',
    ];
}
