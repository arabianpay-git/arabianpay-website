<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'visitors';

    protected $fillable = [
        'ip_address',
        'user_agent',
        'url',
        'referer',
        'country',
        'city',
        'visited_at',
    ];

    protected $casts = [
        'visited_at' => 'datetime',
    ];
}
