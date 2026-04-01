<?php

namespace Database\Seeders;

use App\Models\AboutUsEvaluation;
use Illuminate\Database\Seeder;

class AboutUsEvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // AboutUsEvaluation يمكن استخدامه للقيم فقط أو تركه فارغاً
        // حالياً لا يُستخدم في الصفحات، لكن يمكن إضافة بيانات تجريبية إذا لزم الأمر
        AboutUsEvaluation::firstOrCreate(
            ['id' => 1],
            [
                'title_ar' => 'قيمنا',
                'title_en' => 'Our Values',
                'des_ar' => 'قيمنا الأساسية التي نؤمن بها',
                'des_en' => 'Our core values that we believe in',
                'jsoning' => [],
            ]
        );
    }
}
