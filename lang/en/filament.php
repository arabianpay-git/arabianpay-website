<?php

return [
    'resources' => [
        'users' => [
            'navigation_label' => 'Users',
            'navigation_group' => 'User Permissions',
            'form' => [
                'name' => 'Name',
                'email' => 'Email',
                'role_id' => 'Role',
                'description' => 'Description',
                'permissions' => 'Permissions',
                'password' => 'Password',
                'status' => 'Status',
            ],
            'table' => [
                'name' => 'Name',
                'email' => 'Email',
                'status' => 'Status',
                'roles' => 'Roles',
            ],
            'infolist' => [
                'user_info' => 'User Info',
            ],
        ],
    ],
];
