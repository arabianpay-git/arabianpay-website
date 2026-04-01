<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'customers';

    protected $fillable = [
        'icon',
        'name',
    ];

    /**
     * رابط عام لعرض الأيقونة (يدعم مسارات التخزين، وروابط كاملة، وعدم تكرار storage/).
     */
    public function iconPublicUrl(): string
    {
        $icon = $this->icon;
        if ($icon === null || $icon === '') {
            return asset('img/company/placeholder.svg');
        }

        return storage_public_url($icon) ?: asset('img/company/placeholder.svg');
    }
}
