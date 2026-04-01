<?php

namespace Database\Seeders;

use App\Models\SupportCategory;
use Illuminate\Database\Seeder;

class SupportCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name_ar' => 'الأسئلة الشائعة',
                'name_en' => 'FAQ',
            ],
            [
                'name_ar' => 'الأدلة والبرامج التعليمية',
                'name_en' => 'Guides & Tutorials',
            ],
            [
                'name_ar' => 'الدعم الفني',
                'name_en' => 'Technical Support',
            ],
            [
                'name_ar' => 'الشروط والأحكام',
                'name_en' => 'Terms & Conditions',
            ],
            [
                'name_ar' => 'سياسة الخصوصية',
                'name_en' => 'Privacy Policy',
            ],
            [
                'name_ar' => 'استفسارات عامة',
                'name_en' => 'General Inquiries',
            ],
        ];

        foreach ($categories as $category) {
            SupportCategory::firstOrCreate(
                ['name_ar' => $category['name_ar']],
                $category
            );
        }
    }
}
