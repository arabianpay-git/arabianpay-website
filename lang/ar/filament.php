<?php

return [
    'resources' => [
        'users' => [
            'navigation_label' => 'المستخدمون',
            'navigations_label' => 'مستخدم',
            'navigation_group' => 'أذونات المستخدم',
            'form' => [
                'name' => 'الاسم',
                'email' => 'البريد الإلكتروني',
                'role_id' => 'الدور',
                'description' => 'الوصف',
                'permissions' => 'الأذونات',
                'password' => 'كلمة المرور',
                'status' => 'الحالة',
            ],
            'table' => [
                'name' => 'الاسم',
                'email' => 'البريد الإلكتروني',
                'status' => 'الحالة',
                'roles' => 'الأدوار',
            ],
            'infolist' => [
                'user_info' => 'معلومات المستخدم',
            ],
        ],
        "permissions" => [
            'form' => [
                "name" => "الاسم",
            ],
            'table' => [
                "name" => "الاسم",
            ],
            'navigation_label' => 'الصلاحيات',
            'navigations_label' => 'الصلاحية',
            "permission_info" => "معلومات الصلاحية",
        ],
        "roles" => [
            'form' => [
                "name" => "الاسم",
                'permissions' => 'الصلاحيات',
                "guard_name" => "الوصف",
            ],
            'table' => [
                "name" => "الاسم",
                "guard_name" => "الوصف",
            ],
            'navigation_label' => 'الادوار',
            'navigations_label' => 'الدور',
            "permission_info" => "معلومات الدور",
        ]
    ],
];
