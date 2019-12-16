<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'edouard',
            'email' => 'edouard@gmail.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
