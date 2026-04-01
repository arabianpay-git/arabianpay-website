<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUsMap extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'about_us_maps';

    protected $fillable = [
        'title_ar',
        'title_en',
        'des_ar',
        'des_en',
        'des2_ar',
        'des2_en',
        'image',
        'jsoning', // للإحصائيات: [{"number": "1000+", "label_ar": "مورد نشط", "label_en": "Active Supplier"}, ...]
    ];

    protected $casts = [
        'jsoning' => 'array',
    ];

    // Accessor لتحويل jsoning من string إلى array إذا كانت string
    public function getJsoningAttribute($value)
    {
        if (is_string($value)) {
            $decoded = json_decode($value, true);
            return is_array($decoded) ? $decoded : [];
        }
        return is_array($value) ? $value : [];
    }
}

