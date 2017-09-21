<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('admins')->insert([
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'john.doe@test.com',
                'password' => bcrypt('testpass'),
            ],
        ]);
    }
}