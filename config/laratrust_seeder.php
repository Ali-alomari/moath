<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'Manager' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u',
            'product'=>'c,r,u,d',
            'category'=>'c,r,u,d',
            'order'=>'c,r,u,d',
            'subCategory'=>'c,r,u,d',
            'customer'=>'c,r,u,d',

        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
            'product'=>'c,r,u',
            'category'=>'r,u',
            'order'=>'r',
            'subCategory'=>'r,u',
        ],
        'Vendor' => [
            'profile' => 'r,u',
            'product'=>'c,r,u',
            'category'=>'r',
            'order'=>'r',
            'subCategory'=>'r,u',
            'customer'=>'r',
        ],
        'customer' => [
            'order'=>'c,r,u,d',
            'payment'=>'c,r',
            'product'=>'r',
            'profile'=>'c,r,u',
            'category'=>'r',
            'subCategory'=>'r',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
