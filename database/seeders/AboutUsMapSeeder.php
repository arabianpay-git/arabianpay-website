<?php

namespace Database\Seeders;

use App\Models\AboutUsMap;
use Illuminate\Database\Seeder;

class AboutUsMapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutUsMap::firstOrCreate(
            ['id' => 1],
            [
                'title_ar' => 'حضورنا في المملكة',
                'title_en' => 'Our Presence in the Kingdom',
                'des_ar' => 'أرابيان باي موجودة في جميع أنحاء المملكة العربية السعودية، نقدم خدماتنا للموردين والتجار في جميع المدن والمناطق.',
                'des_en' => 'ArabianPay is present throughout Saudi Arabia, providing services to suppliers and merchants in all cities and regions.',
                'des2_ar' => 'نحن ملتزمون بتوسيع نطاق خدماتنا لتغطية جميع أنحاء المملكة، مع ضمان تقديم نفس مستوى الجودة والتميز في كل مكان.',
                'des2_en' => 'We are committed to expanding our services to cover all parts of the Kingdom, while ensuring the same level of quality and excellence everywhere.',
                'image' => null, // سيتم رفع الصورة من admin panel
                'jsoning' => [
                    [
                        'number' => '1000+',
                        'label_ar' => 'مورد نشط',
                        'label_en' => 'Active Supplier'
                    ],
                    [
                        'number' => '5000+',
                        'label_ar' => 'تاجر مسجل',
                        'label_en' => 'Registered Merchant'
                    ]
                ],
            ]
        );
    }
}
