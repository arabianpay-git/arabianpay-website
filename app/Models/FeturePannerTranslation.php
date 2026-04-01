<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FeturePannerTranslation extends Model
{
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'feture_panner_translations';

    protected $fillable = [
        'feture_panner_id',
        'name_ar',
        'name_en',
        'des_ar',
        'des_en',
        'image',
        'locale',
        'status',
    ];
    public function featurePanner(): BelongsTo
    {
        return $this->belongsTo(FeturesPanner::class, 'feture_panner_id');
    }
}
