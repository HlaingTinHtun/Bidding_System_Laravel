<?php

use Illuminate\Database\Seeder;
use App\Dealer;
use Faker\Factory as Faker;

class DealersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
        //
        foreach (range(1, 10) as $index) {
        		Dealer::create([
        	        	        'name' => $faker->name,
        	        	        'email' => $faker->email,
        	        	        'role' => 2, // role id 2 for Dealer
        	        	        'password' => bcrypt('h0074h0074'),
        	    ]);
        }
        	
        
    }
}
