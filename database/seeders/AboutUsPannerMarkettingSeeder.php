<?php

namespace Database\Seeders;

use App\Models\AboutUsPannerMarketting;
use Illuminate\Database\Seeder;

class AboutUsPannerMarkettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutUsPannerMarketting::firstOrCreate(
            ['id' => 1],
            [
                'title_ar' => 'عن أرابيان باي',
                'title_en' => 'About ArabianPay',
                'des_ar' => null,
                'des_en' => null,
                'btn_ar' => 'اعرف المزيد',
                'btn_en' => 'Learn More',
                'image_ar' => null, // سيتم رفع الصورة من admin panel
                'image_en' => null, // سيتم رفع الصورة من admin panel
            ]
        );
    }
}
