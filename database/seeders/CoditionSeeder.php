<?php

namespace Database\Seeders;

use App\Models\Codition;
use Illuminate\Database\Seeder;

class CoditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Codition::firstOrCreate(
            ['id' => 1],
            [
                'title_ar' => 'الأحكام والشروط',
                'title_en' => 'Terms & Conditions',
                'text_ar' => 'توضح هذه السياسة كيفية جمع واستخدام وحماية معلوماتك الشخصية أثناء استخدام خدمات ArabianPay سواء كنت عميلًا أو موردًا أو تاجرًا. باستخدامك لمنصتنا، فإنك توافق على الممارسات الموضحة في هذه السياسة.',
                'text_en' => 'This policy explains how we collect, use, and protect your personal information while using ArabianPay services, whether you are a customer, supplier, or merchant. By using our platform, you agree to the practices outlined in this policy.',
                'intro_ar' => 'في ArabianPay، نحترم خصوصيتك وندرك أهمية حماية بياناتك الشخصية. نلتزم بتوفير تجربة آمنة وموثوقة، مبنية على الشفافية والثقة في كل عملية تقوم بها من خلال منصتنا.',
                'intro_en' => 'At ArabianPay, we respect your privacy and recognize the importance of protecting your personal data. We are committed to providing a safe and reliable experience, built on transparency and trust in every transaction you make through our platform.',
                'jsoning_hero' => [
                    [
                        'title_ar' => 'شروط واضحة',
                        'title_en' => 'Clear Terms',
                        'des_ar' => 'نقدم شروطاً واضحة وشفافة لاستخدام منصتنا',
                        'des_en' => 'We provide clear and transparent terms for using our platform',
                        'icon' => '<svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 17.0212L2.3 13.1212C-0.0239997 9.68421 0.874 5.24921 4.4 2.74721C7.926 0.246207 12.99 0.451206 16.245 3.22721C19.5 6.00421 19.94 10.4932 17.274 13.7282C14.608 16.9632 9.659 17.9432 5.7 16.0212L1 17.0212Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>',
                    ],
                    [
                        'title_ar' => 'حماية قانونية',
                        'title_en' => 'Legal Protection',
                        'des_ar' => 'نحمي حقوقك وحقوقنا من خلال شروط واضحة',
                        'des_en' => 'We protect your rights and ours through clear terms',
                        'icon' => '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.44706 18.846C6.43635 17.9127 3.91372 15.8324 2.42427 13.0545C0.934827 10.2765 0.598174 7.02411 1.48706 4C4.60259 4.14257 7.65123 3.06658 9.98706 1C12.3229 3.06658 15.3715 4.14257 18.4871 4C19.1657 6.30911 19.1344 8.76894 18.3971 11.06" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>',
                    ],
                    [
                        'title_ar' => 'تحديثات مستمرة',
                        'title_en' => 'Regular Updates',
                        'des_ar' => 'نحدث شروطنا بانتظام لضمان الحماية الكاملة',
                        'des_en' => 'We regularly update our terms to ensure complete protection',
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.5"><path d="M6 5H18L21 10L12.5 19.5C12.4348 19.5665 12.357 19.6194 12.2712 19.6554C12.1853 19.6915 12.0931 19.7101 12 19.7101C11.9069 19.7101 11.8147 19.6915 11.7288 19.6554C11.643 19.6194 11.5652 19.5665 11.5 19.5L3 10L6 5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /><path d="M10 12.0008L8 9.80078L8.6 8.80078" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></g></svg>',
                    ],
                ],
                'jsoning_content' => [
                    [
                        'title_ar' => '1. مقدمة',
                        'title_en' => '1. Introduction',
                        'content_ar' => 'مرحباً بك في منصة ArabianPay. نحن ملتزمون بحماية خصوصيتك وضمان أمان معلوماتك الشخصية والمالية.',
                        'content_en' => 'Welcome to ArabianPay platform. We are committed to protecting your privacy and ensuring the security of your personal and financial information.',
                        'items' => [],
                    ],
                    [
                        'title_ar' => '2. القبول بالشروط',
                        'title_en' => '2. Acceptance of Terms',
                        'content_ar' => 'من خلال الوصول إلى منصة أرابيان باي واستخدامها، فإنك تقبل وتوافق على الالتزام بهذه الأحكام والشروط. إذا كنت لا توافق على أي جزء من هذه الشروط، فيجب عليك عدم استخدام منصتنا.

نحتفظ بالحق في تحديث أو تعديل هذه الشروط في أي وقت دون إشعار مسبق. استمرار استخدامك للمنصة بعد أي تغييرات يشكل موافقتك على الشروط المحدثة.',
                        'content_en' => 'By accessing and using the ArabianPay platform, you accept and agree to be bound by these terms and conditions. If you do not agree to any part of these terms, you must not use our platform.

We reserve the right to update or modify these terms at any time without prior notice. Your continued use of the platform after any changes constitutes your acceptance of the updated terms.',
                        'items' => [],
                    ],
                    [
                        'title_ar' => '3. استخدام المنصة',
                        'title_en' => '3. Platform Usage',
                        'content_ar' => 'أنت مسؤول عن الحفاظ على سرية معلومات حسابك وكلمة المرور. يجب عليك إخطارنا فوراً بأي استخدام غير مصرح به لحسابك أو أي خرق للأمان.

يجب استخدام المنصة فقط للأغراض القانونية والمصرح بها. يحظر استخدام المنصة لأي غرض غير قانوني أو غير مصرح به.',
                        'content_en' => 'You are responsible for maintaining the confidentiality of your account information and password. You must notify us immediately of any unauthorized use of your account or any security breach.

The platform should only be used for legal and authorized purposes. It is prohibited to use the platform for any illegal or unauthorized purpose.',
                        'items' => [],
                    ],
                    [
                        'title_ar' => '4. سياسة الخصوصية',
                        'title_en' => '4. Privacy Policy',
                        'content_ar' => 'نحن ملتزمون بحماية خصوصيتك. نجمع المعلومات الشخصية فقط عندما تكون ضرورية لتقديم خدماتنا وتحسين تجربتك.

المعلومات التي نجمعها قد تشمل:',
                        'content_en' => 'We are committed to protecting your privacy. We collect personal information only when necessary to provide our services and improve your experience.

The information we collect may include:',
                        'items' => [
                            ['text_ar' => 'الاسم وعنوان البريد الإلكتروني', 'text_en' => 'Name and email address'],
                            ['text_ar' => 'معلومات الحساب المصرفي والمالية', 'text_en' => 'Bank account and financial information'],
                            ['text_ar' => 'سجل المعاملات والعمليات', 'text_en' => 'Transaction and operation records'],
                            ['text_ar' => 'معلومات الجهاز والمتصفح', 'text_en' => 'Device and browser information'],
                        ],
                    ],
                    [
                        'title_ar' => '5. حماية البيانات',
                        'title_en' => '5. Data Protection',
                        'content_ar' => 'نستخدم تقنيات تشفير متقدمة لحماية معلوماتك الشخصية والمالية. جميع البيانات يتم نقلها وتخزينها بشكل آمن وفقاً لأعلى معايير الأمان.

لا نشارك معلوماتك الشخصية مع أطراف ثالثة إلا في الحالات المطلوبة قانونياً أو بموافقتك الصريحة.',
                        'content_en' => 'We use advanced encryption technologies to protect your personal and financial information. All data is transmitted and stored securely in accordance with the highest security standards.

We do not share your personal information with third parties except in cases required by law or with your explicit consent.',
                        'items' => [],
                    ],
                    [
                        'title_ar' => '6. حقوق المستخدم',
                        'title_en' => '6. User Rights',
                        'content_ar' => 'لديك الحق في:',
                        'content_en' => 'You have the right to:',
                        'items' => [
                            ['text_ar' => 'الوصول إلى معلوماتك الشخصية', 'text_en' => 'Access your personal information'],
                            ['text_ar' => 'طلب تصحيح أو حذف معلوماتك', 'text_en' => 'Request correction or deletion of your information'],
                            ['text_ar' => 'الاعتراض على معالجة بياناتك', 'text_en' => 'Object to processing of your data'],
                            ['text_ar' => 'طلب نقل بياناتك', 'text_en' => 'Request transfer of your data'],
                        ],
                    ],
                    [
                        'title_ar' => '7. المسؤولية والضمانات',
                        'title_en' => '7. Liability and Warranties',
                        'content_ar' => 'نقدم خدماتنا "كما هي" دون أي ضمانات صريحة أو ضمنية. لا نضمن أن الخدمة ستكون متاحة بشكل مستمر أو خالية من الأخطاء.

لن نكون مسؤولين عن أي أضرار مباشرة أو غير مباشرة ناتجة عن استخدام أو عدم القدرة على استخدام منصتنا.',
                        'content_en' => 'We provide our services "as is" without any express or implied warranties. We do not guarantee that the service will be continuously available or error-free.

We will not be liable for any direct or indirect damages resulting from the use or inability to use our platform.',
                        'items' => [],
                    ],
                    [
                        'title_ar' => '8. التعديلات على الشروط',
                        'title_en' => '8. Modifications to Terms',
                        'content_ar' => 'نحتفظ بالحق في تعديل هذه الشروط في أي وقت. سيتم إشعارك بأي تغييرات جوهرية عبر البريد الإلكتروني أو إشعار على المنصة.

استمرار استخدامك للمنصة بعد التعديلات يشكل موافقتك على الشروط المحدثة.',
                        'content_en' => 'We reserve the right to modify these terms at any time. You will be notified of any material changes via email or notification on the platform.

Your continued use of the platform after modifications constitutes your acceptance of the updated terms.',
                        'items' => [],
                    ],
                    [
                        'title_ar' => '9. التواصل معنا',
                        'title_en' => '9. Contact Us',
                        'content_ar' => 'إذا كان لديك أي أسئلة حول هذه الشروط أو سياسة الخصوصية، يمكنك التواصل معنا عبر:

البريد الإلكتروني: legal@arabianpay.com
الهاتف: 920031271',
                        'content_en' => 'If you have any questions about these terms or privacy policy, you can contact us via:

Email: legal@arabianpay.com
Phone: 920031271',
                        'items' => [],
                    ],
                ],
            ]
        );
    }
}
