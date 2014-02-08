<?php

class ShopsTableSeeder extends Seeder {

    public function run()
    {
    	$Shops = [[
			'name' 		=> 'Musica Store', 
			'slogan' 	=> 'Place for your Instrument!',
			'address' 	=> 'Milono Street, Cape of Redeb, Berau City',
			'phone' 	=> '+62-85247830330',
			'email' 	=> 'novay@about.me', 
			'created_at'=> new DateTime,
			'updated_at'=> new DateTime,
		]];
		DB::table('shops')->insert($Shops);
    }

}