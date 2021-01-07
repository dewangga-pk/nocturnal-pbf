<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                "category" => "seed",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "category" => "equipment",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}
