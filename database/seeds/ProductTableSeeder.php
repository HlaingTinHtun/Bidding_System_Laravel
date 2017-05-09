<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
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
        foreach (range(1,30) as $index) {
	        $product = new Product();
	        $product->name = $faker->name;
	        $product->descr = $faker->text;
	        $product->slug = $faker->slug;
			$product->end_date = $faker->date();
	        $product->initialprice = $faker->randomNumber(2);
	        $url = $faker->image($dir = 'public', $width = 250, $height = 300 , $category="abstract");
	        $url = substr($url, 7);
	        $product->image_url = $url;
	        $product->cat_id = $faker->numberBetween(1,10);
			$product->buyer_id = $faker->numberBetween(1,10);
			$product->successful_bid_id = $faker->numberBetween(1,10);
	        $product->save();
         }
    }
}
