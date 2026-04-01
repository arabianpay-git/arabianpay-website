<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supliers extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'supliers';

    protected $fillable = [
        'title_ar',
        'title_en',
        'des_ar',
        'des_en',
        'btn_ar',
        'btn_en',
        'image',
    ];
}
