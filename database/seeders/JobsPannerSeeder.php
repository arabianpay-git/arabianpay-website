<?php

namespace Database\Seeders;

use App\Models\JobsPanner;
use Illuminate\Database\Seeder;

class JobsPannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            // التطوير والبرمجة
            [
                'jobcategory' => 1,
                'name_ar' => 'مطور Full Stack',
                'name_en' => 'Full Stack Developer',
                'location_ar' => 'الرياض، المملكة العربية السعودية',
                'location_en' => 'Riyadh, Saudi Arabia',
                'description_ar' => 'نبحث عن مطور Full Stack محترف للانضمام إلى فريقنا التقني. سيكون مسؤولاً عن تطوير وصيانة التطبيقات والأنظمة من البداية حتى النهاية.

المسؤوليات:
• تطوير تطبيقات ويب وتطبيقات موبايل
• العمل على Backend و Frontend
• تصميم وتطوير APIs
• اختبار وضمان جودة الكود
• التعاون مع فريق التطوير',
                'description_en' => 'We are looking for a professional Full Stack Developer to join our technical team. You will be responsible for developing and maintaining applications and systems from start to finish.

Responsibilities:
• Develop web and mobile applications
• Work on Backend and Frontend
• Design and develop APIs
• Test and ensure code quality
• Collaborate with the development team',
                'requirements_ar' => 'المتطلبات:
• خبرة لا تقل عن 3 سنوات في تطوير Full Stack
• إتقان PHP, Laravel, JavaScript, Vue.js أو React
• معرفة بقواعد البيانات MySQL/PostgreSQL
• خبرة في Git و DevOps
• القدرة على العمل ضمن فريق',
                'requirements_en' => 'Requirements:
• At least 3 years of experience in Full Stack development
• Proficiency in PHP, Laravel, JavaScript, Vue.js or React
• Knowledge of MySQL/PostgreSQL databases
• Experience with Git and DevOps
• Ability to work in a team',
                'salary_ar' => '15,000 - 25,000 ريال',
                'salary_en' => '15,000 - 25,000 SAR',
                'type_ar' => 'دوام كامل',
                'type_en' => 'Full Time',
                'experience_ar' => '3+ سنوات',
                'experience_en' => '3+ Years',
            ],
            [
                'jobcategory' => 1,
                'name_ar' => 'مطور Backend',
                'name_en' => 'Backend Developer',
                'location_ar' => 'الرياض، المملكة العربية السعودية',
                'location_en' => 'Riyadh, Saudi Arabia',
                'description_ar' => 'نبحث عن مطور Backend محترف للانضمام إلى فريقنا. سيكون مسؤولاً عن تطوير وصيانة الخوادم وقواعد البيانات والAPIs.

المسؤوليات:
• تطوير وصيانة APIs
• العمل على قواعد البيانات وتحسين الأداء
• تطبيق معايير الأمان
• التعاون مع فريق Frontend',
                'description_en' => 'We are looking for a professional Backend Developer to join our team. You will be responsible for developing and maintaining servers, databases, and APIs.

Responsibilities:
• Develop and maintain APIs
• Work on databases and performance optimization
• Implement security standards
• Collaborate with Frontend team',
                'requirements_ar' => 'المتطلبات:
• خبرة في PHP و Laravel
• معرفة بقواعد البيانات MySQL/PostgreSQL
• خبرة في RESTful APIs
• معرفة بأساسيات الأمان',
                'requirements_en' => 'Requirements:
• Experience in PHP and Laravel
• Knowledge of MySQL/PostgreSQL databases
• Experience with RESTful APIs
• Knowledge of security basics',
                'salary_ar' => '12,000 - 20,000 ريال',
                'salary_en' => '12,000 - 20,000 SAR',
                'type_ar' => 'دوام كامل',
                'type_en' => 'Full Time',
                'experience_ar' => '2+ سنوات',
                'experience_en' => '2+ Years',
            ],
            [
                'jobcategory' => 1,
                'name_ar' => 'مطور Frontend',
                'name_en' => 'Frontend Developer',
                'location_ar' => 'جدة، المملكة العربية السعودية',
                'location_en' => 'Jeddah, Saudi Arabia',
                'description_ar' => 'نبحث عن مطور Frontend محترف لإنشاء واجهات مستخدم جميلة وسهلة الاستخدام.

المسؤوليات:
• تطوير واجهات مستخدم متجاوبة
• العمل مع Vue.js أو React
• تحسين تجربة المستخدم
• التعاون مع فريق التصميم',
                'description_en' => 'We are looking for a professional Frontend Developer to create beautiful and user-friendly interfaces.

Responsibilities:
• Develop responsive user interfaces
• Work with Vue.js or React
• Improve user experience
• Collaborate with design team',
                'requirements_ar' => 'المتطلبات:
• خبرة في JavaScript, Vue.js أو React
• معرفة بـ HTML, CSS, Tailwind CSS
• خبرة في تصميم متجاوب
• اهتمام بالتفاصيل',
                'requirements_en' => 'Requirements:
• Experience in JavaScript, Vue.js or React
• Knowledge of HTML, CSS, Tailwind CSS
• Experience in responsive design
• Attention to detail',
                'salary_ar' => '10,000 - 18,000 ريال',
                'salary_en' => '10,000 - 18,000 SAR',
                'type_ar' => 'دوام كامل',
                'type_en' => 'Full Time',
                'experience_ar' => '2+ سنوات',
                'experience_en' => '2+ Years',
            ],
            [
                'jobcategory' => 1,
                'name_ar' => 'مطور تطبيقات الهاتف',
                'name_en' => 'Mobile App Developer',
                'location_ar' => 'الرياض، المملكة العربية السعودية',
                'location_en' => 'Riyadh, Saudi Arabia',
                'description_ar' => 'نبحث عن مطور تطبيقات موبايل محترف لتطوير تطبيقات iOS و Android.

المسؤوليات:
• تطوير تطبيقات موبايل عالية الجودة
• العمل مع Flutter أو React Native
• اختبار التطبيقات وإصلاح الأخطاء
• نشر التطبيقات على المتاجر',
                'description_en' => 'We are looking for a professional Mobile App Developer to develop iOS and Android applications.

Responsibilities:
• Develop high-quality mobile applications
• Work with Flutter or React Native
• Test applications and fix bugs
• Publish applications to stores',
                'requirements_ar' => 'المتطلبات:
• خبرة في Flutter أو React Native
• معرفة بـ iOS و Android
• خبرة في نشر التطبيقات
• مهارات حل المشاكل',
                'requirements_en' => 'Requirements:
• Experience in Flutter or React Native
• Knowledge of iOS and Android
• Experience in app publishing
• Problem-solving skills',
                'salary_ar' => '14,000 - 22,000 ريال',
                'salary_en' => '14,000 - 22,000 SAR',
                'type_ar' => 'دوام كامل',
                'type_en' => 'Full Time',
                'experience_ar' => '3+ سنوات',
                'experience_en' => '3+ Years',
            ],
            // المالية والمحاسبة
            [
                'jobcategory' => 2,
                'name_ar' => 'محاسب مالي',
                'name_en' => 'Financial Accountant',
                'location_ar' => 'الرياض، المملكة العربية السعودية',
                'location_en' => 'Riyadh, Saudi Arabia',
                'description_ar' => 'نبحث عن محاسب مالي محترف للانضمام إلى فريقنا المالي.

المسؤوليات:
• إعداد القوائم المالية
• متابعة الحسابات اليومية
• إعداد التقارير المالية
• التعاون مع الفريق المالي',
                'description_en' => 'We are looking for a professional Financial Accountant to join our finance team.

Responsibilities:
• Prepare financial statements
• Monitor daily accounts
• Prepare financial reports
• Collaborate with finance team',
                'requirements_ar' => 'المتطلبات:
• شهادة جامعية في المحاسبة أو المالية
• خبرة لا تقل عن 2 سنوات
• معرفة ببرامج المحاسبة
• مهارات تحليلية قوية',
                'requirements_en' => 'Requirements:
• University degree in Accounting or Finance
• At least 2 years of experience
• Knowledge of accounting software
• Strong analytical skills',
                'salary_ar' => '8,000 - 15,000 ريال',
                'salary_en' => '8,000 - 15,000 SAR',
                'type_ar' => 'دوام كامل',
                'type_en' => 'Full Time',
                'experience_ar' => '2+ سنوات',
                'experience_en' => '2+ Years',
            ],
            [
                'jobcategory' => 2,
                'name_ar' => 'محلل مالي',
                'name_en' => 'Financial Analyst',
                'location_ar' => 'الرياض، المملكة العربية السعودية',
                'location_en' => 'Riyadh, Saudi Arabia',
                'description_ar' => 'نبحث عن محلل مالي محترف لتحليل البيانات المالية واتخاذ القرارات الاستراتيجية.

المسؤوليات:
• تحليل البيانات المالية
• إعداد التقارير التحليلية
• تقديم التوصيات المالية
• متابعة الأداء المالي',
                'description_en' => 'We are looking for a professional Financial Analyst to analyze financial data and make strategic decisions.

Responsibilities:
• Analyze financial data
• Prepare analytical reports
• Provide financial recommendations
• Monitor financial performance',
                'requirements_ar' => 'المتطلبات:
• شهادة جامعية في المالية أو الاقتصاد
• خبرة لا تقل عن 3 سنوات
• مهارات تحليلية متقدمة
• معرفة ببرامج التحليل المالي',
                'requirements_en' => 'Requirements:
• University degree in Finance or Economics
• At least 3 years of experience
• Advanced analytical skills
• Knowledge of financial analysis software',
                'salary_ar' => '12,000 - 20,000 ريال',
                'salary_en' => '12,000 - 20,000 SAR',
                'type_ar' => 'دوام كامل',
                'type_en' => 'Full Time',
                'experience_ar' => '3+ سنوات',
                'experience_en' => '3+ Years',
            ],
            [
                'jobcategory' => 2,
                'name_ar' => 'مدير مالي',
                'name_en' => 'Finance Manager',
                'location_ar' => 'الرياض، المملكة العربية السعودية',
                'location_en' => 'Riyadh, Saudi Arabia',
                'description_ar' => 'نبحث عن مدير مالي محترف لإدارة الشؤون المالية للشركة.

المسؤوليات:
• إدارة الشؤون المالية
• إعداد الميزانيات
• الإشراف على الفريق المالي
• التخطيط المالي الاستراتيجي',
                'description_en' => 'We are looking for a professional Finance Manager to manage the company\'s financial affairs.

Responsibilities:
• Manage financial affairs
• Prepare budgets
• Supervise finance team
• Strategic financial planning',
                'requirements_ar' => 'المتطلبات:
• شهادة جامعية في المالية أو المحاسبة
• خبرة لا تقل عن 5 سنوات
• مهارات قيادية
• معرفة بالقوانين المالية',
                'requirements_en' => 'Requirements:
• University degree in Finance or Accounting
• At least 5 years of experience
• Leadership skills
• Knowledge of financial laws',
                'salary_ar' => '18,000 - 30,000 ريال',
                'salary_en' => '18,000 - 30,000 SAR',
                'type_ar' => 'دوام كامل',
                'type_en' => 'Full Time',
                'experience_ar' => '5+ سنوات',
                'experience_en' => '5+ Years',
            ],
            // التسويق والمبيعات
            [
                'jobcategory' => 3,
                'name_ar' => 'أخصائي تسويق رقمي',
                'name_en' => 'Digital Marketing Specialist',
                'location_ar' => 'الرياض، المملكة العربية السعودية',
                'location_en' => 'Riyadh, Saudi Arabia',
                'description_ar' => 'نبحث عن أخصائي تسويق رقمي محترف لتعزيز وجودنا الرقمي.

المسؤوليات:
• إدارة الحملات التسويقية الرقمية
• تحليل الأداء التسويقي
• إدارة وسائل التواصل الاجتماعي
• تحسين محركات البحث (SEO)',
                'description_en' => 'We are looking for a professional Digital Marketing Specialist to enhance our digital presence.

Responsibilities:
• Manage digital marketing campaigns
• Analyze marketing performance
• Manage social media
• Search engine optimization (SEO)',
                'requirements_ar' => 'المتطلبات:
• خبرة في التسويق الرقمي
• معرفة بمنصات التواصل الاجتماعي
• مهارات تحليلية
• إبداع في المحتوى',
                'requirements_en' => 'Requirements:
• Experience in digital marketing
• Knowledge of social media platforms
• Analytical skills
• Creative content skills',
                'salary_ar' => '9,000 - 16,000 ريال',
                'salary_en' => '9,000 - 16,000 SAR',
                'type_ar' => 'دوام كامل',
                'type_en' => 'Full Time',
                'experience_ar' => '2+ سنوات',
                'experience_en' => '2+ Years',
            ],
            [
                'jobcategory' => 3,
                'name_ar' => 'مدير مبيعات',
                'name_en' => 'Sales Manager',
                'location_ar' => 'جدة، المملكة العربية السعودية',
                'location_en' => 'Jeddah, Saudi Arabia',
                'description_ar' => 'نبحث عن مدير مبيعات محترف لقيادة فريق المبيعات وتحقيق الأهداف.

المسؤوليات:
• قيادة فريق المبيعات
• وضع استراتيجيات المبيعات
• متابعة أداء الفريق
• بناء علاقات مع العملاء',
                'description_en' => 'We are looking for a professional Sales Manager to lead the sales team and achieve goals.

Responsibilities:
• Lead sales team
• Develop sales strategies
• Monitor team performance
• Build customer relationships',
                'requirements_ar' => 'المتطلبات:
• خبرة لا تقل عن 4 سنوات في المبيعات
• مهارات قيادية
• مهارات تواصل ممتازة
• القدرة على تحقيق الأهداف',
                'requirements_en' => 'Requirements:
• At least 4 years of sales experience
• Leadership skills
• Excellent communication skills
• Ability to achieve goals',
                'salary_ar' => '15,000 - 25,000 ريال',
                'salary_en' => '15,000 - 25,000 SAR',
                'type_ar' => 'دوام كامل',
                'type_en' => 'Full Time',
                'experience_ar' => '4+ سنوات',
                'experience_en' => '4+ Years',
            ],
            [
                'jobcategory' => 3,
                'name_ar' => 'أخصائي محتوى',
                'name_en' => 'Content Specialist',
                'location_ar' => 'الرياض، المملكة العربية السعودية',
                'location_en' => 'Riyadh, Saudi Arabia',
                'description_ar' => 'نبحث عن أخصائي محتوى محترف لإنشاء محتوى جذاب وفعال.

المسؤوليات:
• إنشاء محتوى تسويقي
• كتابة المقالات والمنشورات
• إدارة المحتوى على المنصات
• تحسين المحتوى للSEO',
                'description_en' => 'We are looking for a professional Content Specialist to create engaging and effective content.

Responsibilities:
• Create marketing content
• Write articles and posts
• Manage content on platforms
• Optimize content for SEO',
                'requirements_ar' => 'المتطلبات:
• مهارات كتابة ممتازة
• معرفة بـ SEO
• إبداع في المحتوى
• خبرة في إدارة المحتوى',
                'requirements_en' => 'Requirements:
• Excellent writing skills
• Knowledge of SEO
• Creative content skills
• Experience in content management',
                'salary_ar' => '7,000 - 14,000 ريال',
                'salary_en' => '7,000 - 14,000 SAR',
                'type_ar' => 'دوام كامل',
                'type_en' => 'Full Time',
                'experience_ar' => '2+ سنوات',
                'experience_en' => '2+ Years',
            ],
            // الموارد البشرية
            [
                'jobcategory' => 4,
                'name_ar' => 'أخصائي موارد بشرية',
                'name_en' => 'HR Specialist',
                'location_ar' => 'الرياض، المملكة العربية السعودية',
                'location_en' => 'Riyadh, Saudi Arabia',
                'description_ar' => 'نبحث عن أخصائي موارد بشرية محترف لإدارة شؤون الموظفين.

المسؤوليات:
• إدارة التوظيف والاختيار
• متابعة ملفات الموظفين
• تنظيم برامج التدريب
• التعامل مع شؤون الموظفين',
                'description_en' => 'We are looking for a professional HR Specialist to manage employee affairs.

Responsibilities:
• Manage recruitment and selection
• Monitor employee files
• Organize training programs
• Handle employee affairs',
                'requirements_ar' => 'المتطلبات:
• شهادة جامعية في إدارة الأعمال أو الموارد البشرية
• خبرة لا تقل عن 2 سنوات
• مهارات تواصل ممتازة
• معرفة بقوانين العمل',
                'requirements_en' => 'Requirements:
• University degree in Business Administration or Human Resources
• At least 2 years of experience
• Excellent communication skills
• Knowledge of labor laws',
                'salary_ar' => '8,000 - 15,000 ريال',
                'salary_en' => '8,000 - 15,000 SAR',
                'type_ar' => 'دوام كامل',
                'type_en' => 'Full Time',
                'experience_ar' => '2+ سنوات',
                'experience_en' => '2+ Years',
            ],
            [
                'jobcategory' => 4,
                'name_ar' => 'مدير موارد بشرية',
                'name_en' => 'HR Manager',
                'location_ar' => 'الرياض، المملكة العربية السعودية',
                'location_en' => 'Riyadh, Saudi Arabia',
                'description_ar' => 'نبحث عن مدير موارد بشرية محترف لقيادة قسم الموارد البشرية.

المسؤوليات:
• قيادة قسم الموارد البشرية
• وضع استراتيجيات الموارد البشرية
• الإشراف على الفريق
• تطوير سياسات الموارد البشرية',
                'description_en' => 'We are looking for a professional HR Manager to lead the Human Resources department.

Responsibilities:
• Lead Human Resources department
• Develop HR strategies
• Supervise team
• Develop HR policies',
                'requirements_ar' => 'المتطلبات:
• شهادة جامعية في الموارد البشرية
• خبرة لا تقل عن 5 سنوات
• مهارات قيادية
• معرفة شاملة بقوانين العمل',
                'requirements_en' => 'Requirements:
• University degree in Human Resources
• At least 5 years of experience
• Leadership skills
• Comprehensive knowledge of labor laws',
                'salary_ar' => '16,000 - 28,000 ريال',
                'salary_en' => '16,000 - 28,000 SAR',
                'type_ar' => 'دوام كامل',
                'type_en' => 'Full Time',
                'experience_ar' => '5+ سنوات',
                'experience_en' => '5+ Years',
            ],
            // الدعم الفني
            [
                'jobcategory' => 5,
                'name_ar' => 'أخصائي دعم فني',
                'name_en' => 'Technical Support Specialist',
                'location_ar' => 'الرياض، المملكة العربية السعودية',
                'location_en' => 'Riyadh, Saudi Arabia',
                'description_ar' => 'نبحث عن أخصائي دعم فني محترف لمساعدة العملاء في حل المشاكل التقنية.

المسؤوليات:
• تقديم الدعم الفني للعملاء
• حل المشاكل التقنية
• متابعة الطلبات والدعوات
• توثيق المشاكل والحلول',
                'description_en' => 'We are looking for a professional Technical Support Specialist to help customers solve technical problems.

Responsibilities:
• Provide technical support to customers
• Solve technical problems
• Follow up on requests and tickets
• Document problems and solutions',
                'requirements_ar' => 'المتطلبات:
• معرفة تقنية جيدة
• مهارات تواصل ممتازة
• صبر في التعامل مع العملاء
• قدرة على حل المشاكل',
                'requirements_en' => 'Requirements:
• Good technical knowledge
• Excellent communication skills
• Patience in dealing with customers
• Problem-solving ability',
                'salary_ar' => '7,000 - 13,000 ريال',
                'salary_en' => '7,000 - 13,000 SAR',
                'type_ar' => 'دوام كامل',
                'type_en' => 'Full Time',
                'experience_ar' => '1+ سنوات',
                'experience_en' => '1+ Years',
            ],
            [
                'jobcategory' => 5,
                'name_ar' => 'مهندس أنظمة',
                'name_en' => 'Systems Engineer',
                'location_ar' => 'الرياض، المملكة العربية السعودية',
                'location_en' => 'Riyadh, Saudi Arabia',
                'description_ar' => 'نبحث عن مهندس أنظمة محترف لإدارة وصيانة الأنظمة التقنية.

المسؤوليات:
• إدارة وصيانة الأنظمة
• ضمان استقرار الأنظمة
• حل المشاكل التقنية المعقدة
• تحسين أداء الأنظمة',
                'description_en' => 'We are looking for a professional Systems Engineer to manage and maintain technical systems.

Responsibilities:
• Manage and maintain systems
• Ensure system stability
• Solve complex technical problems
• Improve system performance',
                'requirements_ar' => 'المتطلبات:
• شهادة جامعية في هندسة الحاسوب أو تقنية المعلومات
• خبرة لا تقل عن 3 سنوات
• معرفة بالأنظمة والشبكات
• مهارات حل المشاكل',
                'requirements_en' => 'Requirements:
• University degree in Computer Engineering or Information Technology
• At least 3 years of experience
• Knowledge of systems and networks
• Problem-solving skills',
                'salary_ar' => '13,000 - 22,000 ريال',
                'salary_en' => '13,000 - 22,000 SAR',
                'type_ar' => 'دوام كامل',
                'type_en' => 'Full Time',
                'experience_ar' => '3+ سنوات',
                'experience_en' => '3+ Years',
            ],
            // إدارة المشاريع
            [
                'jobcategory' => 6,
                'name_ar' => 'مدير مشاريع تقنية',
                'name_en' => 'Technical Project Manager',
                'location_ar' => 'الرياض، المملكة العربية السعودية',
                'location_en' => 'Riyadh, Saudi Arabia',
                'description_ar' => 'نبحث عن مدير مشاريع تقنية محترف لإدارة المشاريع التقنية بنجاح.

المسؤوليات:
• إدارة المشاريع التقنية من البداية حتى النهاية
• التنسيق بين الفرق المختلفة
• متابعة الجدول الزمني والميزانية
• ضمان جودة المشاريع',
                'description_en' => 'We are looking for a professional Technical Project Manager to successfully manage technical projects.

Responsibilities:
• Manage technical projects from start to finish
• Coordinate between different teams
• Monitor timeline and budget
• Ensure project quality',
                'requirements_ar' => 'المتطلبات:
• شهادة في إدارة المشاريع (PMP) مفضلة
• خبرة لا تقل عن 4 سنوات
• مهارات قيادية وتنظيمية
• معرفة بالتقنيات الحديثة',
                'requirements_en' => 'Requirements:
• Project management certification (PMP) preferred
• At least 4 years of experience
• Leadership and organizational skills
• Knowledge of modern technologies',
                'salary_ar' => '17,000 - 28,000 ريال',
                'salary_en' => '17,000 - 28,000 SAR',
                'type_ar' => 'دوام كامل',
                'type_en' => 'Full Time',
                'experience_ar' => '4+ سنوات',
                'experience_en' => '4+ Years',
            ],
            [
                'jobcategory' => 6,
                'name_ar' => 'منسق مشاريع',
                'name_en' => 'Project Coordinator',
                'location_ar' => 'جدة، المملكة العربية السعودية',
                'location_en' => 'Jeddah, Saudi Arabia',
                'description_ar' => 'نبحث عن منسق مشاريع محترف لمساعدة في تنسيق وإدارة المشاريع.

المسؤوليات:
• مساعدة مدير المشروع في التنسيق
• متابعة المهام والأنشطة
• إعداد التقارير والتحديثات
• التواصل مع الفرق المختلفة',
                'description_en' => 'We are looking for a professional Project Coordinator to help coordinate and manage projects.

Responsibilities:
• Assist project manager in coordination
• Monitor tasks and activities
• Prepare reports and updates
• Communicate with different teams',
                'requirements_ar' => 'المتطلبات:
• خبرة في إدارة المشاريع
• مهارات تنظيمية ممتازة
• مهارات تواصل جيدة
• معرفة ببرامج إدارة المشاريع',
                'requirements_en' => 'Requirements:
• Experience in project management
• Excellent organizational skills
• Good communication skills
• Knowledge of project management software',
                'salary_ar' => '9,000 - 16,000 ريال',
                'salary_en' => '9,000 - 16,000 SAR',
                'type_ar' => 'دوام كامل',
                'type_en' => 'Full Time',
                'experience_ar' => '2+ سنوات',
                'experience_en' => '2+ Years',
            ],
        ];

        foreach ($jobs as $job) {
            JobsPanner::firstOrCreate(
                [
                    'jobcategory' => $job['jobcategory'],
                    'name_ar' => $job['name_ar'],
                ],
                $job
            );
        }
    }
}
