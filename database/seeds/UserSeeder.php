<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seed for user account
        \Illuminate\Support\Facades\DB::table('users')->insert([
            [
                "name" => "User",
                "email" => "user@store.in",
                "password" => \Illuminate\Support\Facades\Hash::make('user12345'),
                "phone_number" => "+62811111111",
                "full_address" => "Jalan Mendut Gg.XV No.18",
                "city" => "Jember",
                "province" => "Jawa timur",
                "postal_code" => "68416"
            ],
            [
                "name" => "Admin",
                "email" => "admin@store.in",
                "password" => \Illuminate\Support\Facades\Hash::make('admin123'),
                "phone_number" => "+62811111111",
                "full_address" => "Jalan Mendut Gg.XV No.18",
                "city" => "Jember",
                "province" => "Jawa timur",
                "postal_code" => "68416"
            ]
        ]);

        //seed for role each account
        DB::table('user_role')->insert([
            [
                'user_id' => 1,
                'role_id' => 1
            ],
            [
                'user_id' => 2,
                'role_id' => 2
            ]
        ]);
    }
}
