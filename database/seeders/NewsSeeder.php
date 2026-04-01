<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'title_ar' => 'إطلاق خدمة ArabianPay الجديدة',
                'title_en' => 'Launching the new ArabianPay service',
                'description_ar' => 'أعلنت ArabianPay عن إطلاق خدمة جديدة للدفع الإلكتروني بميزات أمان متقدمة.',
                'description_en' => 'ArabianPay announced a new e-payment service with advanced security features.',
                'content_ar' => "أعلنت ArabianPay اليوم عن إطلاق خدمة جديدة للدفع الإلكتروني توفر ميزات أمان متقدمة وتجربة مستخدم سلسة.\nتتضمن الخدمة الجديدة طرق دفع متعددة ودعم شامل للتجار والمستخدمين.",
                'content_en' => "ArabianPay today announced a new e-payment service offering advanced security features and a seamless user experience.\nThe new service includes multiple payment methods and comprehensive support for merchants and users.",
                'author_ar' => 'فريق ArabianPay',
                'author_en' => 'ArabianPay Team',
                'published_at' => Carbon::today()->subDays(5),
                'is_published' => true,
                'views' => 42,
            ],
            [
                'title_ar' => 'شراكة استراتيجية مع بنك محلي',
                'title_en' => 'Strategic partnership with a local bank',
                'description_ar' => 'تعاون جديد لتعزيز حلول الدفع وتوسيع شبكة القبول.',
                'description_en' => 'A new collaboration to enhance payment solutions and expand acceptance network.',
                'content_ar' => "وقعت ArabianPay شراكة استراتيجية مع أحد البنوك المحلية بهدف تعزيز حلول الدفع الرقمي.\nتشمل الشراكة تطوير منتجات مشتركة وتوسيع شبكة القبول للتجار.",
                'content_en' => "ArabianPay signed a strategic partnership with a local bank to enhance digital payment solutions.\nThe partnership includes co-developing products and expanding the acceptance network for merchants.",
                'author_ar' => 'قسم الشراكات',
                'author_en' => 'Partnerships Dept.',
                'published_at' => Carbon::today()->subDays(10),
                'is_published' => true,
                'views' => 28,
            ],
            [
                'title_ar' => 'تحديثات أمنية جديدة',
                'title_en' => 'New security updates',
                'description_ar' => 'تحسينات في حماية البيانات وتحديث بروتوكولات التشفير.',
                'description_en' => 'Improvements in data protection and encryption protocols.',
                'content_ar' => "أطلقت ArabianPay مجموعة من التحديثات الأمنية لزيادة حماية بيانات المستخدمين.\nتشمل التحديثات تحسين بروتوكولات التشفير ومراقبة الأنشطة المشبوهة.",
                'content_en' => "ArabianPay rolled out security updates to enhance user data protection.\nUpdates include improved encryption protocols and suspicious activity monitoring.",
                'author_ar' => 'فريق الأمن',
                'author_en' => 'Security Team',
                'published_at' => Carbon::today()->subDays(15),
                'is_published' => true,
                'views' => 17,
            ],
            [
                'title_ar' => 'إطلاق مركز دعم جديد',
                'title_en' => 'Launching a new support center',
                'description_ar' => 'مركز دعم يعمل على مدار الساعة لخدمة العملاء والتجار.',
                'description_en' => 'A 24/7 support center for customers and merchants.',
                'content_ar' => "افتتحت ArabianPay مركز دعم جديد يعمل على مدار الساعة لتقديم المساعدة الفورية.\nالمركز يوفر قنوات تواصل متعددة ودعم فني متخصص.",
                'content_en' => "ArabianPay opened a new 24/7 support center to provide instant assistance.\nThe center offers multiple communication channels and specialized technical support.",
                'author_ar' => 'خدمة العملاء',
                'author_en' => 'Customer Support',
                'published_at' => Carbon::today()->subDays(20),
                'is_published' => true,
                'views' => 12,
            ],
            [
                'title_ar' => 'دليل للتجار: أفضل ممارسات القبول',
                'title_en' => 'Merchant guide: Best acceptance practices',
                'description_ar' => 'نصائح لتحسين تجربة الدفع وزيادة التحويلات.',
                'description_en' => 'Tips to improve payment experience and increase conversions.',
                'content_ar' => "أصدرنا دليلاً شاملاً للتجار حول أفضل ممارسات قبول المدفوعات.\nيتضمن الدليل نصائح حول تجربة المستخدم، والأمان، وإدارة النزاعات.",
                'content_en' => "We released a comprehensive guide for merchants on best payment acceptance practices.\nThe guide includes tips on UX, security, and dispute management.",
                'author_ar' => 'قسم العمليات',
                'author_en' => 'Operations Dept.',
                'published_at' => Carbon::today()->subDays(25),
                'is_published' => true,
                'views' => 9,
            ],
            [
                'title_ar' => 'ميزة جديدة للتقارير اللحظية',
                'title_en' => 'New real-time reporting feature',
                'description_ar' => 'تقارير مباشرة للأداء والمعاملات للتجار.',
                'description_en' => 'Live performance and transactions reports for merchants.',
                'content_ar' => "أطلقنا ميزة التقارير اللحظية التي تتيح للتجار متابعة الأداء المالي مباشرة.\nتوفر الميزة لوحات تحكم مرئية وتنبيهات فورية.",
                'content_en' => "We launched a real-time reporting feature enabling merchants to monitor financial performance live.\nThe feature provides visual dashboards and instant alerts.",
                'author_ar' => 'فريق المنتج',
                'author_en' => 'Product Team',
                'published_at' => Carbon::today()->subDays(30),
                'is_published' => true,
                'views' => 7,
            ],
        ];

        foreach ($items as $item) {
            News::firstOrCreate(
                ['title_ar' => $item['title_ar']],
                $item
            );
        }
    }
}

