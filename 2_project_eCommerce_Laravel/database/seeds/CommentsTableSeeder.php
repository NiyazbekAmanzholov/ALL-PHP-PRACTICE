<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([[
        	'product_id' => '1',
        	'name' => 'Ваня',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolore adipisci voluptatum inventore perferendis vitae, harum necessitatibus aperiam voluptates voluptatibus et natus.',
        ],
		[
        	'product_id' => '1',
        	'name' => 'Коля',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolore adipisci voluptatum voluptatibus et natus.',
        ],
		[
        	'product_id' => '1',
        	'name' => 'Саня',
        	'description' => 'эdipisci voluptatum inventore perferendis vitae, harum necessitatibus aperiam voluptates voluptatibus et natus.',
        ],
		[
        	'product_id' => '2',
        	'name' => 'Даша',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolore adipisci voluptatum inventore perferendis vitae, harum necessitatibus aperiam voluptates voluptatibus et natus.',
        ], 
[
        	'product_id' => '3',
        	'name' => 'Вика',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolore adipisci voluptatum inventore perferendis vitae, harum necessitatibus aperiam voluptates voluptatibus et natus.',
        ],
		[
        	'product_id' => '4',
        	'name' => 'Наташа',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolore adipisci voluptatum inventore perferendis vitae, harum necessitatibus aperiam voluptates voluptatibus et natus.',
        ],
		[
        	'product_id' => '6',
        	'name' => 'Ксения',
        	'description' => 'ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolore adipisci voluptatum inventore perferendis vitae, harum necessitatibus aperiam voluptates voluptatibus et natus.',
        ],
		[
        	'product_id' => '7',
        	'name' => 'Жанна',
        	'description' => ' dolor sit amet, consectetur adipisicing elit. Aliquam dolore adipisci voluptatum inventore perferendis vitae, harum necessitatibus aperiam voluptates voluptatibus et natus.',
        ],
		[
        	'product_id' => '8',
        	'name' => 'Булат',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolore adipisci voluptatum inventore perferendis vitae, harum necessitatibus aperiam voluptates voluptatibus et natus.',
        ], 
[
        	'product_id' => '9',
        	'name' => 'Дулат',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolore adipisci voluptatum inventore perferendis vitae, harum necessitatibus aperiam voluptates voluptatibus et natus.',
        ],
		[
        	'product_id' => '10',
        	'name' => 'Фархат',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolore adipisci voluptatum inventore perferendis vitae, harum necessitatibus aperiam voluptates voluptatibus et natus.',
        ],
		[
        	'product_id' => '11',
        	'name' => 'Куат',
        	'description' => 'adipisicing elit. Aliquam dolore adipisci voluptatum inventore perferendis vitae, harum necessitatibus aperiam voluptates voluptatibus et natus.',
        ],
		[
        	'product_id' => '7',
        	'name' => 'Алия',
        	'description' => 'dis vitae, harum necessitatibus aperiam voluptates voluptatibus et natus.',
        ]                         
    ]);
    }

}
