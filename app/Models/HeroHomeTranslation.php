<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HeroHomeTranslation extends Model
{
    use HasFactory;

    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'panner_translations';

    protected $fillable = ['hero_home_id', 'locale', 'title', 'subtitle', 'button_text', 'button_link'];

    public function heroHome():BelongsTo
    {
        return $this->belongsTo(HeroHome::class);
    }
}
