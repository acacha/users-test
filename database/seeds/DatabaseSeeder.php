<?php

use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder.
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('passport:install');

        create_admin_user();

        initialize_permissions();

        first_user_as_users_test_manager();
    }
}
