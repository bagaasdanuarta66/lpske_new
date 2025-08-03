<?php

return [
    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
        
        'asisten' => [
            'driver' => 'session',
            'provider' => 'asistens',
        ],
        
        'anggota' => [
            'driver' => 'session',
            'provider' => 'anggotas',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
        
        'admins' => [
            'driver' => 'role_eloquent',
            'model' => App\Models\User::class,
            'role' => 'admin',
        ],
        
        'asistens' => [
            'driver' => 'role_eloquent',
            'model' => App\Models\User::class,
            'role' => 'asisten',
        ],
        
        'anggotas' => [
            'driver' => 'role_eloquent',
            'model' => App\Models\User::class,
            'role' => 'anggota',
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
        
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
        
        'asistens' => [
            'provider' => 'asistens',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
        
        'anggotas' => [
            'provider' => 'anggotas',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],
];