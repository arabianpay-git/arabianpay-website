<?php

namespace Database\Seeders;

use App\Models\Jobcategory;
use Illuminate\Database\Seeder;

class JobcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'name_ar' => 'التطوير والبرمجة',
                'name_en' => 'Development & Programming',
            ],
            [
                'id' => 2,
                'name_ar' => 'المالية والمحاسبة',
                'name_en' => 'Finance & Accounting',
            ],
            [
                'id' => 3,
                'name_ar' => 'التسويق والمبيعات',
                'name_en' => 'Marketing & Sales',
            ],
            [
                'id' => 4,
                'name_ar' => 'الموارد البشرية',
                'name_en' => 'Human Resources',
            ],
            [
                'id' => 5,
                'name_ar' => 'الدعم الفني',
                'name_en' => 'Technical Support',
            ],
            [
                'id' => 6,
                'name_ar' => 'إدارة المشاريع',
                'name_en' => 'Project Management',
            ],
        ];

        foreach ($categories as $category) {
            Jobcategory::firstOrCreate(
                ['id' => $category['id']],
                $category
            );
        }
    }
}
