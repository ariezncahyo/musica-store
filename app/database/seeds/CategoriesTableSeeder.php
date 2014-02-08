<?php

class CategoriesTableSeeder extends Seeder {

    public function run()
    {
    	$Categories = [
			[
				'name' => 'Guitar', 
				'description' => 'Find your favorite guitar here!',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			],
			[
				'name' => 'Bass', 
				'description' => 'Find your favorite bass here!',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			],
			[
				'name' => 'Keyboard', 
				'description' => 'Find your favorite keyboard here!',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			],
			[
				'name' => 'Drum', 
				'description' => 'Find your favorite drum here!',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			]
		];
		DB::table('categories')->insert($Categories);
    }

}