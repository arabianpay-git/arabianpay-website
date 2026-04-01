<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportCategory extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'support_categories';

    protected $fillable = [
        'name_ar',
        'name_en',
    ];
}
