<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AboutUsSectionTranslation extends Model
{
    use HasFactory;
    
    /**
     * اسم الجدول في قاعدة البيانات
     * تحديده صراحة لتجنب مشاكل case sensitivity في Linux
     */
    protected $table = 'panner_translations';
    
    protected $fillable = ['about_id', 'name', 'image', 'locale', 'description', 'status'];

    public function aboutus(): BelongsTo
    {
        return $this->belongsTo(AboutUsSection::class);
    }
}
