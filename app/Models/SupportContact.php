<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportContact extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'support_contacts';

    protected $fillable = [
        'title_ar',
        'title_en',
        'des_ar',
        'des_en',
        'email',
        'phone',
        'address_ar',
        'address_en',
        'jsoning', // لمعلومات التواصل: [{"type": "email", "title_ar": "...", "value": "..."}, ...]
    ];

    protected $casts = [
        'jsoning' => 'array',
    ];
}

