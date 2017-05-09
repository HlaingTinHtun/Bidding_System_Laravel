<?php

use Illuminate\Database\Seeder;
use App\Order;
use Faker\Factory as Faker;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	$faker = Faker::create();
            foreach (range(1, 10) as $index) {
            		Order::create([
            	        	        'township' => $faker->streetName,
            	        	        'address' => $faker->address, // role id 2 for Dealer
            	        	        'product_id' => $faker->numberBetween(1,5) ,
            	        	        'dealer_id' => $faker->numberBetween(1,5) ,
            	        	        'customer_id' => $faker->numberBetween(1,5) ,
            	        	        'order_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            	        	        'price' => $faker->randomNumber(2) ,
            	        	        'order_note' => $faker->text ,
            	    ]);
            }
    }
}
