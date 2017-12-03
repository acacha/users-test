<?php

use App\User;

if (!function_exists('create_admin_user')) {
    /**
     * Create admin user
     */
    function create_admin_user()
    {
        factory(User::class)->create([
            'name'     => env('ADMIN_USER_NAME', 'Sergi Tur Badenas'),
            'email'    => env('ADMIN_USER_EMAIL', 'sergiturbadenas@gmail.com'),
            'password' => bcrypt(env('ADMIN_USER_PASSWORD')),
        ]);
    }
}

if (!function_exists('initialize_permissions')) {
    /**
     * Initialize permissions.
     */
    function initialize_permissions()
    {
        initialize_users_management_permissions();
        initialize_users_management_migration_permissions();
    }
}

if (!function_exists('first_user_as_users_test_manager')) {
    function first_user_as_users_test_manager()
    {
        User::all()->first()->assignRole('manage-users');
        User::all()->first()->assignRole('migrate-users');
    }
}

