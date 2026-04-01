<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * جدول socials — روابط التواصل والهاتف للفوتر
 */
class WebsiteSocial extends Model
{
    protected $table = 'socials';

    protected $fillable = [
        'phonea1',
        'phonea2',
        'phonesana',
        'phonewhats',
        'wechatlink',
        'whatslink',
        'facelink',
        'twitterlink',
        'instegramlink',
        'mail',
        'app_store_url',
        'google_play_url',
    ];
}
