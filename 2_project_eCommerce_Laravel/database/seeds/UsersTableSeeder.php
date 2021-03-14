<?php

use Illuminate\Database\Seeder;

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
        	'name' => 'Администратор',
        	'email' => 'admin@mail.com',
            'number' => '87761197667',
        	'password' => bcrypt('admin'),
        	'role' => 1,
        ]);
    }
}
