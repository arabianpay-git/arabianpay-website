<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactPanner extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'contact_panners';

    protected $fillable = [
        'title_ar',
        'title_en',
        'hero_image',
        'jsoning',
    ];

    protected $casts = [
        'jsoning' => 'array',
    ];
}
