<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('profiles')->insert([
            'id'      => 1,
            'user_id' => 2,
            'email' => 'abdelrahman@contact.com',
            'phone_number' => '+917-951-3052',
            'about'  => 'Software Engineer at L2Labs',
            'skills' => 'asp.NET, AngularJS, Nginx',
            'area' => 'Cairo, Egypt'
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
