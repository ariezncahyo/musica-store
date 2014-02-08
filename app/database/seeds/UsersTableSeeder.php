<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        $Users = [
            [
                'username' => 'admin', 
                'password' => Hash::make('admin'), 
                'created_at' => new DateTime, 
                'updated_at' => new DateTime
            ],
			[
                'username' => 'novay', 
                'password' => Hash::make('admin'), 
                'created_at' => new DateTime, 
                'updated_at' => new DateTime
            ],
		];
        DB::table('users')->insert($Users);
    }

}