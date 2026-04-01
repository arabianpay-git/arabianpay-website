<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialSharing extends Model
{
    use HasFactory;
    
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'panners';
    
    protected $fillable = ['phonea1', 'phonea2', 'phonesana', 'phonewhats', 'wechatlink', 'whatslink', 'facelink', 'twitterlink', 'instegramlink','mail'];
}
