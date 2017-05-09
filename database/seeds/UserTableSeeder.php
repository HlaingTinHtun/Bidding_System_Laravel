<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
        		User::create([
        	        	        'name' => $faker->name,
        	        	        'email' => $faker->email,
        	        	        'role' => 3, // Role_id 3 for user
        	        	        'password' => bcrypt('h0074h0074'),
        	    ]);
        }
    }
}
