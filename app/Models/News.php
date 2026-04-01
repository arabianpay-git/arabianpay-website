<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'news';

    protected $fillable = [
        'title_ar',
        'title_en',
        'description_ar',
        'description_en',
        'content_ar',
        'content_en',
        'image',
        'author_ar',
        'author_en',
        'published_at',
        'is_published',
        'views',
    ];

    protected $casts = [
        'published_at' => 'date',
        'is_published' => 'boolean',
        'views' => 'integer',
    ];
}
