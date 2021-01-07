<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seed for available roles
        \Illuminate\Support\Facades\DB::table('roles')->insert([
            [
                "name" => "user",
                "title" => "User",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "admin",
                "title" => "Admin",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
