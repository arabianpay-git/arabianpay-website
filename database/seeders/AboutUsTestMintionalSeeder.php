<?php

namespace Database\Seeders;

use App\Models\AboutUsTestMintional;
use Illuminate\Database\Seeder;

class AboutUsTestMintionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutUsTestMintional::firstOrCreate(
            ['id' => 1],
            [
                'title_ar' => 'رؤيتنا ورسالتنا',
                'title_en' => 'Our Vision & Mission',
                'des_ar' => 'نسعى لبناء مستقبل مالي أفضل للجميع في المملكة العربية السعودية',
                'des_en' => 'We strive to build a better financial future for everyone in Saudi Arabia',
                'jsoning' => [
                    // بطاقات Hero (للـ about-hero.blade.php)
                    [
                        'title_ar' => 'منصة رائدة',
                        'title_en' => 'Leading Platform',
                        'des_ar' => 'منصة مالية وتمويلية رائدة في المملكة العربية السعودية',
                        'des_en' => 'Leading financial and financing platform in Saudi Arabia',
                        'icon' => '<svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 17.0212L2.3 13.1212C-0.0239997 9.68421 0.874 5.24921 4.4 2.74721C7.926 0.246207 12.99 0.451206 16.245 3.22721C19.5 6.00421 19.94 10.4932 17.274 13.7282C14.608 16.9632 9.659 17.9432 5.7 16.0212L1 17.0212Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>',
                    ],
                    [
                        'title_ar' => 'حلول مبتكرة',
                        'title_en' => 'Innovative Solutions',
                        'des_ar' => 'حلول دفع وتمويل مبتكرة وسهلة الاستخدام',
                        'des_en' => 'Innovative and easy-to-use payment and financing solutions',
                        'icon' => '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.44706 18.846C6.43635 17.9127 3.91372 15.8324 2.42427 13.0545C0.934827 10.2765 0.598174 7.02411 1.48706 4C4.60259 4.14257 7.65123 3.06658 9.98706 1C12.3229 3.06658 15.3715 4.14257 18.4871 4C19.1657 6.30911 19.1344 8.76894 18.3971 11.06" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>',
                    ],
                    [
                        'title_ar' => 'أمان وشفافية',
                        'title_en' => 'Security & Transparency',
                        'des_ar' => 'أعلى معايير الأمان والشفافية في جميع المعاملات',
                        'des_en' => 'Highest standards of security and transparency in all transactions',
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.5"><path d="M6 5H18L21 10L12.5 19.5C12.4348 19.5665 12.357 19.6194 12.2712 19.6554C12.1853 19.6915 12.0931 19.7101 12 19.7101C11.9069 19.7101 11.8147 19.6915 11.7288 19.6554C11.643 19.6194 11.5652 19.5665 11.5 19.5L3 10L6 5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /><path d="M10 12.0008L8 9.80078L8.6 8.80078" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></g></svg>',
                    ],
                    // الرؤية (عنصر 3) - للـ about-content.blade.php
                    [
                        'title_ar' => 'رؤيتنا',
                        'title_en' => 'Our Vision',
                        'des_ar' => 'أن نكون المنصة المالية الرائدة في المملكة العربية السعودية والشرق الأوسط، من خلال تقديم حلول مبتكرة تسهل الحياة المالية للجميع.',
                        'des_en' => 'To be the leading financial platform in Saudi Arabia and the Middle East, by providing innovative solutions that make financial life easier for everyone.',
                        'icon' => '<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>',
                    ],
                    // الرسالة (عنصر 4) - للـ about-content.blade.php
                    [
                        'title_ar' => 'رسالتنا',
                        'title_en' => 'Our Mission',
                        'des_ar' => 'تمكين الأفراد والشركات من خلال حلول دفع وتمويل مرنة وآمنة، تساهم في نمو الاقتصاد وازدهار الأعمال في المملكة.',
                        'des_en' => 'Empowering individuals and businesses through flexible and secure payment and financing solutions that contribute to economic growth and business prosperity in the Kingdom.',
                        'icon' => '<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
                    ],
                    // الأمان (عنصر 5) - للـ about-content.blade.php (قيمنا الأساسية)
                    [
                        'title_ar' => 'الأمان',
                        'title_en' => 'Security',
                        'des_ar' => 'نضمن أعلى معايير الأمان لحماية بياناتك ومعاملاتك المالية',
                        'des_en' => 'We ensure the highest security standards to protect your data and financial transactions',
                        'icon' => '<svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>',
                    ],
                    // السرعة (عنصر 6) - للـ about-content.blade.php (قيمنا الأساسية)
                    [
                        'title_ar' => 'السرعة',
                        'title_en' => 'Speed',
                        'des_ar' => 'معالجة فورية لطلباتك مع نظام ذكي يقيّم طلبك خلال دقائق',
                        'des_en' => 'Instant processing of your requests with a smart system that evaluates your request within minutes',
                        'icon' => '<svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>',
                    ],
                    // الشفافية (عنصر 7) - للـ about-content.blade.php (قيمنا الأساسية)
                    [
                        'title_ar' => 'الشفافية',
                        'title_en' => 'Transparency',
                        'des_ar' => 'شفافية كاملة في جميع المعاملات والرسوم بدون أي تكاليف مخفية',
                        'des_en' => 'Complete transparency in all transactions and fees without any hidden costs',
                        'icon' => '<svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>',
                    ],
                ],
            ]
        );
    }
}
