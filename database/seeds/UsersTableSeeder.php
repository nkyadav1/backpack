<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => 'Demo Admin',
            'email'    => 'admin@example.com',
            'password' => bcrypt('admin'),
        ]);
        DB::table('users')->insert([
            'name'     => 'Narendra Yadav',
            'email'    => 'engg.ny@gmai.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
