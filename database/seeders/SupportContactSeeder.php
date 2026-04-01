<?php

namespace Database\Seeders;

use App\Models\SupportContact;
use Illuminate\Database\Seeder;

class SupportContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SupportContact::firstOrCreate(
            ['id' => 1],
            [
                'title_ar' => 'تواصل معنا',
                'title_en' => 'Contact Us',
                'des_ar' => 'املأ النموذج أدناه وسنقوم بالرد عليك في أقرب وقت ممكن',
                'des_en' => 'Fill out the form below and we will get back to you as soon as possible',
                'email' => 'support@arabianpay.com',
                'phone' => '920031271',
                'address_ar' => 'الرياض، المملكة العربية السعودية',
                'address_en' => 'Riyadh, Saudi Arabia',
                'jsoning' => [
                    [
                        'type' => 'email',
                        'title_ar' => 'البريد الإلكتروني',
                        'title_en' => 'Email',
                        'value' => 'support@arabianpay.com',
                        'icon' => '<svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>',
                    ],
                    [
                        'type' => 'phone',
                        'title_ar' => 'الهاتف',
                        'title_en' => 'Phone',
                        'value' => '920031271',
                        'icon' => '<svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>',
                    ],
                    [
                        'type' => 'address',
                        'title_ar' => 'العنوان',
                        'title_en' => 'Address',
                        'value' => 'الرياض، المملكة العربية السعودية',
                        'icon' => '<svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>',
                    ],
                ],
            ]
        );
    }
}
