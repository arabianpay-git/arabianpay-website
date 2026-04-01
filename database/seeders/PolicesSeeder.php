<?php

namespace Database\Seeders;

use App\Models\Polices;
use Illuminate\Database\Seeder;

class PolicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Polices::firstOrCreate(
            ['id' => 1],
            [
                'title_ar' => 'سياسة الخصوصية',
                'title_en' => 'Privacy Policy',
                'intro_ar' => 'في ArabianPay، نحترم خصوصيتك وندرك أهمية حماية بياناتك الشخصية. نلتزم بتوفير تجربة آمنة وموثوقة، مبنية على الشفافية والثقة في كل عملية تقوم بها من خلال منصتنا.',
                'intro_en' => 'At ArabianPay, we respect your privacy and recognize the importance of protecting your personal data. We are committed to providing a safe and reliable experience, built on transparency and trust in every transaction you make through our platform.',
                'text_ar' => 'توضح هذه السياسة كيفية جمع واستخدام وحماية معلوماتك الشخصية أثناء استخدام خدمات ArabianPay سواء كنت عميلًا أو موردًا أو تاجرًا. باستخدامك لمنصتنا، فإنك توافق على الممارسات الموضحة في هذه السياسة.',
                'text_en' => 'This policy explains how we collect, use, and protect your personal information while using ArabianPay services, whether you are a customer, supplier, or merchant. By using our platform, you agree to the practices described in this policy.',
                'jsoning_hero' => [
                    [
                        'title_ar' => 'حماية البيانات',
                        'title_en' => 'Data Protection',
                        'des_ar' => 'نحمي معلوماتك الشخصية بأعلى معايير الأمان',
                        'des_en' => 'We protect your personal information with the highest security standards',
                        'icon' => '<svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 17.0212L2.3 13.1212C-0.0239997 9.68421 0.874 5.24921 4.4 2.74721C7.926 0.246207 12.99 0.451206 16.245 3.22721C19.5 6.00421 19.94 10.4932 17.274 13.7282C14.608 16.9632 9.659 17.9432 5.7 16.0212L1 17.0212Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>',
                    ],
                    [
                        'title_ar' => 'شفافية كاملة',
                        'title_en' => 'Full Transparency',
                        'des_ar' => 'نوضح لك كيفية استخدام بياناتك بشكل واضح',
                        'des_en' => 'We clearly explain how we use your data',
                        'icon' => '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.44706 18.846C6.43635 17.9127 3.91372 15.8324 2.42427 13.0545C0.934827 10.2765 0.598174 7.02411 1.48706 4C4.60259 4.14257 7.65123 3.06658 9.98706 1C12.3229 3.06658 15.3715 4.14257 18.4871 4C19.1657 6.30911 19.1344 8.76894 18.3971 11.06" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>',
                    ],
                    [
                        'title_ar' => 'سيطرة كاملة',
                        'title_en' => 'Full Control',
                        'des_ar' => 'لديك السيطرة الكاملة على بياناتك الشخصية',
                        'des_en' => 'You have full control over your personal data',
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.5"><path d="M6 5H18L21 10L12.5 19.5C12.4348 19.5665 12.357 19.6194 12.2712 19.6554C12.1853 19.6915 12.0931 19.7101 12 19.7101C11.9069 19.7101 11.8147 19.6915 11.7288 19.6554C11.643 19.6194 11.5652 19.5665 11.5 19.5L3 10L6 5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /><path d="M10 12.0008L8 9.80078L8.6 8.80078" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></g></svg>',
                    ],
                ],
                'jsoning_content' => [
                    [
                        'title_ar' => '1. مقدمة',
                        'title_en' => '1. Introduction',
                        'content_ar' => 'مرحباً بك في منصة ArabianPay. نحن ملتزمون بحماية خصوصيتك وضمان أمان معلوماتك الشخصية والمالية. هذه السياسة توضح كيفية جمع واستخدام وحماية بياناتك عند استخدام خدماتنا.

نلتزم بجميع القوانين واللوائح المعمول بها في المملكة العربية السعودية فيما يتعلق بحماية البيانات والخصوصية.',
                        'content_en' => 'Welcome to ArabianPay platform. We are committed to protecting your privacy and ensuring the security of your personal and financial information. This policy explains how we collect, use, and protect your data when using our services.

We comply with all applicable laws and regulations in Saudi Arabia regarding data protection and privacy.',
                        'items' => [],
                    ],
                    [
                        'title_ar' => '2. المعلومات التي نجمعها',
                        'title_en' => '2. Information We Collect',
                        'content_ar' => 'نجمع أنواعاً مختلفة من المعلومات لتقديم وتحسين خدماتنا:',
                        'content_en' => 'We collect different types of information to provide and improve our services:',
                        'items' => [
                            ['text_ar' => 'الاسم الكامل وتاريخ الميلاد', 'text_en' => 'Full name and date of birth'],
                            ['text_ar' => 'عنوان البريد الإلكتروني ورقم الهاتف', 'text_en' => 'Email address and phone number'],
                            ['text_ar' => 'رقم الهوية الوطنية أو رقم الإقامة', 'text_en' => 'National ID or residence number'],
                            ['text_ar' => 'معلومات الحساب المصرفي والمالية', 'text_en' => 'Bank account and financial information'],
                            ['text_ar' => 'عنوان السكن', 'text_en' => 'Home address'],
                            ['text_ar' => 'سجل المعاملات والعمليات المالية', 'text_en' => 'Transaction and financial operation records'],
                            ['text_ar' => 'معلومات الجهاز والمتصفح', 'text_en' => 'Device and browser information'],
                            ['text_ar' => 'عنوان IP وموقعك الجغرافي', 'text_en' => 'IP address and your geographic location'],
                            ['text_ar' => 'سجل التصفح والتفاعل مع المنصة', 'text_en' => 'Browsing and interaction history with the platform'],
                        ],
                    ],
                    [
                        'title_ar' => '3. كيفية استخدام معلوماتك',
                        'title_en' => '3. How We Use Your Information',
                        'content_ar' => 'نستخدم معلوماتك للأغراض التالية:',
                        'content_en' => 'We use your information for the following purposes:',
                        'items' => [
                            ['text_ar' => 'تقديم وتحسين خدماتنا المالية', 'text_en' => 'Provide and improve our financial services'],
                            ['text_ar' => 'معالجة المعاملات والمدفوعات', 'text_en' => 'Process transactions and payments'],
                            ['text_ar' => 'التحقق من هويتك ومنع الاحتيال', 'text_en' => 'Verify your identity and prevent fraud'],
                            ['text_ar' => 'التواصل معك بشأن حسابك وخدماتنا', 'text_en' => 'Communicate with you about your account and our services'],
                            ['text_ar' => 'إرسال التحديثات والعروض الترويجية (بموافقتك)', 'text_en' => 'Send updates and promotional offers (with your consent)'],
                            ['text_ar' => 'تحليل استخدام المنصة لتحسين تجربتك', 'text_en' => 'Analyze platform usage to improve your experience'],
                            ['text_ar' => 'الامتثال للقوانين واللوائح المعمول بها', 'text_en' => 'Comply with applicable laws and regulations'],
                        ],
                    ],
                    [
                        'title_ar' => '4. حماية البيانات',
                        'title_en' => '4. Data Protection',
                        'content_ar' => 'نستخدم تقنيات تشفير متقدمة وأساليب أمنية قوية لحماية معلوماتك:

على الرغم من جهودنا، لا يمكن ضمان الأمان المطلق للبيانات المنقولة عبر الإنترنت. ننصحك باتخاذ احتياطات إضافية لحماية معلوماتك.',
                        'content_en' => 'We use advanced encryption technologies and strong security methods to protect your information:

Despite our efforts, absolute security of data transmitted over the internet cannot be guaranteed. We advise you to take additional precautions to protect your information.',
                        'items' => [
                            ['text_ar' => 'تشفير SSL/TLS لجميع البيانات المنقولة', 'text_en' => 'SSL/TLS encryption for all transmitted data'],
                            ['text_ar' => 'تخزين آمن للمعلومات الحساسة', 'text_en' => 'Secure storage of sensitive information'],
                            ['text_ar' => 'مراقبة مستمرة للأنشطة المشبوهة', 'text_en' => 'Continuous monitoring of suspicious activities'],
                            ['text_ar' => 'أنظمة حماية من الفيروسات والبرمجيات الخبيثة', 'text_en' => 'Protection systems against viruses and malware'],
                            ['text_ar' => 'وصول محدود للموظفين المصرح لهم فقط', 'text_en' => 'Limited access to authorized employees only'],
                        ],
                    ],
                    [
                        'title_ar' => '5. مشاركة المعلومات',
                        'title_en' => '5. Information Sharing',
                        'content_ar' => 'لا نبيع معلوماتك الشخصية لأطراف ثالثة. قد نشارك معلوماتك فقط في الحالات التالية:',
                        'content_en' => 'We do not sell your personal information to third parties. We may share your information only in the following cases:',
                        'items' => [
                            ['text_ar' => 'مع مزودي الخدمات الموثوقين الذين يساعدوننا في تشغيل منصتنا', 'text_en' => 'With trusted service providers who help us operate our platform'],
                            ['text_ar' => 'عندما يكون ذلك مطلوباً قانونياً أو استجابة لطلب حكومي', 'text_en' => 'When required by law or in response to a government request'],
                            ['text_ar' => 'لحماية حقوقنا وممتلكاتنا وأمن مستخدمينا', 'text_en' => 'To protect our rights, property, and user security'],
                            ['text_ar' => 'في حالة الاندماج أو الاستحواذ أو بيع الأصول', 'text_en' => 'In case of merger, acquisition, or asset sale'],
                            ['text_ar' => 'بموافقتك الصريحة', 'text_en' => 'With your explicit consent'],
                        ],
                    ],
                    [
                        'title_ar' => '6. حقوقك',
                        'title_en' => '6. Your Rights',
                        'content_ar' => 'لديك الحقوق التالية فيما يتعلق ببياناتك الشخصية:',
                        'content_en' => 'You have the following rights regarding your personal data:',
                        'items' => [
                            ['text_ar' => 'حق الوصول: يمكنك طلب نسخة من بياناتك الشخصية', 'text_en' => 'Right of access: You can request a copy of your personal data'],
                            ['text_ar' => 'حق التصحيح: يمكنك طلب تصحيح أي معلومات غير دقيقة', 'text_en' => 'Right of rectification: You can request correction of any inaccurate information'],
                            ['text_ar' => 'حق الحذف: يمكنك طلب حذف بياناتك في ظروف معينة', 'text_en' => 'Right of deletion: You can request deletion of your data under certain circumstances'],
                            ['text_ar' => 'حق الاعتراض: يمكنك الاعتراض على معالجة بياناتك', 'text_en' => 'Right to object: You can object to the processing of your data'],
                            ['text_ar' => 'حق نقل البيانات: يمكنك طلب نقل بياناتك إلى خدمة أخرى', 'text_en' => 'Right to data portability: You can request transfer of your data to another service'],
                            ['text_ar' => 'حق سحب الموافقة: يمكنك سحب موافقتك في أي وقت', 'text_en' => 'Right to withdraw consent: You can withdraw your consent at any time'],
                        ],
                    ],
                    [
                        'title_ar' => '7. ملفات تعريف الارتباط (Cookies)',
                        'title_en' => '7. Cookies',
                        'content_ar' => 'نستخدم ملفات تعريف الارتباط لتذكر تفضيلاتك وتحسين تجربتك. يمكنك التحكم في ملفات تعريف الارتباط من خلال إعدادات المتصفح.

أنواع ملفات تعريف الارتباط التي نستخدمها:',
                        'content_en' => 'We use cookies to remember your preferences and improve your experience. You can control cookies through your browser settings.

Types of cookies we use:',
                        'items' => [
                            ['text_ar' => 'ملفات تعريف الارتباط الضرورية لتشغيل المنصة', 'text_en' => 'Essential cookies for platform operation'],
                            ['text_ar' => 'ملفات تعريف الارتباط الوظيفية لتذكر تفضيلاتك', 'text_en' => 'Functional cookies to remember your preferences'],
                            ['text_ar' => 'ملفات تعريف الارتباط التحليلية لفهم كيفية استخدام المنصة', 'text_en' => 'Analytical cookies to understand how the platform is used'],
                        ],
                    ],
                    [
                        'title_ar' => '8. التغييرات على هذه السياسة',
                        'title_en' => '8. Changes to This Policy',
                        'content_ar' => 'قد نحدث هذه السياسة من وقت لآخر. سنقوم بإشعارك بأي تغييرات جوهرية عبر البريد الإلكتروني أو إشعار على المنصة.

ننصحك بمراجعة هذه السياسة بانتظام للبقاء على اطلاع بآخر التحديثات. استمرار استخدامك للمنصة بعد التغييرات يشكل موافقتك على السياسة المحدثة.',
                        'content_en' => 'We may update this policy from time to time. We will notify you of any material changes via email or notification on the platform.

We advise you to review this policy regularly to stay informed of the latest updates. Your continued use of the platform after changes constitutes your acceptance of the updated policy.',
                        'items' => [],
                    ],
                    [
                        'title_ar' => '9. التواصل معنا',
                        'title_en' => '9. Contact Us',
                        'content_ar' => 'إذا كان لديك أي أسئلة أو استفسارات حول سياسة الخصوصية هذه، يمكنك التواصل معنا عبر:',
                        'content_en' => 'If you have any questions or inquiries about this privacy policy, you can contact us via:',
                        'items' => [
                            ['text_ar' => 'البريد الإلكتروني: privacy@arabianpay.com', 'text_en' => 'Email: privacy@arabianpay.com'],
                            ['text_ar' => 'الهاتف: 920031271', 'text_en' => 'Phone: 920031271'],
                            ['text_ar' => 'العنوان: الرياض، المملكة العربية السعودية', 'text_en' => 'Address: Riyadh, Saudi Arabia'],
                        ],
                    ],
                ],
            ]
        );
    }
}
