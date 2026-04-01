<?php

namespace Database\Seeders;

use App\Models\SupportUs;
use Illuminate\Database\Seeder;

class SupportUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SupportUs::firstOrCreate(
            ['id' => 1],
            [
                'title_ar' => 'كيف يمكننا مساعدتك؟',
                'title_en' => 'How can we help you?',
                'des_ar' => 'اختر الموضوع الذي تحتاج مساعدة فيه',
                'des_en' => 'Choose the topic you need help with',
                'jsoning' => [
                    [
                        'title_ar' => 'الأسئلة الشائعة',
                        'title_en' => 'FAQ',
                        'des_ar' => 'ابحث عن إجابات للأسئلة الأكثر شيوعاً',
                        'des_en' => 'Find answers to the most common questions',
                        'icon' => '<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
                        'link' => '#faq',
                    ],
                    [
                        'title_ar' => 'الأدلة والبرامج التعليمية',
                        'title_en' => 'Guides & Tutorials',
                        'des_ar' => 'تعلم كيفية استخدام منصة أرابيان باي',
                        'des_en' => 'Learn how to use ArabianPay platform',
                        'icon' => '<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>',
                        'link' => '#guides',
                    ],
                    [
                        'title_ar' => 'الدعم الفني',
                        'title_en' => 'Technical Support',
                        'des_ar' => 'احصل على مساعدة فورية من فريق الدعم',
                        'des_en' => 'Get instant help from the support team',
                        'icon' => '<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/></svg>',
                        'link' => '#technical',
                    ],
                    [
                        'title_ar' => 'الشروط والأحكام',
                        'title_en' => 'Terms & Conditions',
                        'des_ar' => 'اطلع على شروط الاستخدام وسياسة الخصوصية',
                        'des_en' => 'Read terms of use and privacy policy',
                        'icon' => '<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>',
                        'link' => '#terms',
                    ],
                    [
                        'title_ar' => 'ساعات العمل',
                        'title_en' => 'Working Hours',
                        'des_ar' => 'فريق الدعم متاح على مدار الساعة طوال أيام الأسبوع',
                        'des_en' => 'Support team available 24/7 throughout the week',
                        'icon' => '<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
                        'value' => '24/7',
                    ],
                    [
                        'title_ar' => 'البريد الإلكتروني',
                        'title_en' => 'Email',
                        'des_ar' => 'راسلنا على البريد الإلكتروني',
                        'des_en' => 'Contact us by email',
                        'icon' => '<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>',
                        'value' => 'support@arabianpay.com',
                    ],
                ],
            ]
        );
    }
}
