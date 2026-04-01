<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePannerQA extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'home_panner_q_a_s';

    protected $fillable = [
        'title_ar',
        'title_en',
        'jsoning'
    ];

    protected $casts = [
        'jsoning' => 'array',
    ];
}
