<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluationtranslation extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'evaluationtranslations';
}
