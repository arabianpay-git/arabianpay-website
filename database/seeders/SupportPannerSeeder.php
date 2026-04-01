<?php

namespace Database\Seeders;

use App\Models\SupportPanner;
use Illuminate\Database\Seeder;

class SupportPannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SupportPanner::firstOrCreate(
            ['id' => 1],
            [
                'title_ar' => 'مركز المساعدة والدعم',
                'title_en' => 'Help & Support Center',
                'des_ar' => null,
                'des_en' => null,
                'btn_ar' => 'تواصل معنا الآن',
                'btn_en' => 'Contact Us Now',
                'image_ar' => null, // سيتم رفع الصورة من admin panel
                'image_en' => null, // سيتم رفع الصورة من admin panel
                'main_image' => null, // عمود موجود في الجدول
                'side_image' => null, // عمود موجود في الجدول
                'jsoning' => [
                    [
                        'title_ar' => 'دعم فوري',
                        'title_en' => 'Instant Support',
                        'des_ar' => 'فريق الدعم متاح على مدار الساعة خلال اوقات العمل الرسمية لمساعدتك',
                        'des_en' => 'Support team available during office hours to help you',
                        'icon' => '<svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 17.0212L2.3 13.1212C-0.0239997 9.68421 0.874 5.24921 4.4 2.74721C7.926 0.246207 12.99 0.451206 16.245 3.22721C19.5 6.00421 19.94 10.4932 17.274 13.7282C14.608 16.9632 9.659 17.9432 5.7 16.0212L1 17.0212Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>',
                    ],
                    [
                        'title_ar' => '24/7',
                        'title_en' => '24/7',
                        'des_ar' => 'خدمة عملاء متاحة على مدار الساعة طوال أيام الأسبوع',
                        'des_en' => 'Customer service available 24/7 throughout the week',
                        'icon' => '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.44706 18.846C6.43635 17.9127 3.91372 15.8324 2.42427 13.0545C0.934827 10.2765 0.598174 7.02411 1.48706 4C4.60259 4.14257 7.65123 3.06658 9.98706 1C12.3229 3.06658 15.3715 4.14257 18.4871 4C19.1657 6.30911 19.1344 8.76894 18.3971 11.06" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>',
                    ],
                    [
                        'title_ar' => 'حلول سريعة',
                        'title_en' => 'Quick Solutions',
                        'des_ar' => 'إجابات فورية لجميع استفساراتك ومشاكلك',
                        'des_en' => 'Instant answers to all your inquiries and problems',
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.5"><path d="M6 5H18L21 10L12.5 19.5C12.4348 19.5665 12.357 19.6194 12.2712 19.6554C12.1853 19.6915 12.0931 19.7101 12 19.7101C11.9069 19.7101 11.8147 19.6915 11.7288 19.6554C11.643 19.6194 11.5652 19.5665 11.5 19.5L3 10L6 5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /><path d="M10 12.0008L8 9.80078L8.6 8.80078" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></g></svg>',
                    ],
                ],
            ]
        );
    }
}
