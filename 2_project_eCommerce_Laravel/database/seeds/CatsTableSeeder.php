<?php

use Illuminate\Database\Seeder;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cats')->insert([
        	['category' => 'Смартфон'],
        	['category' => 'Ноутбук'],
        	['category' => 'Планшет']
        ]);

    }
}
