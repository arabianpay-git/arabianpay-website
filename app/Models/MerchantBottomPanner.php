<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MerchantBottomPanner extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'merchant_bottom_panners';
}
