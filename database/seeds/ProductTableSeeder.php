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
	        $product->price = $faker->randomNumber(2);
	        $product->quantity = $faker->numberBetween(1,100);
	        $url = $faker->image($dir = 'public', $width = 250, $height = 300 , $category="abstract");
	        $url = substr($url, 7);
	        $product->image_url = $url;
	        $product->hashtag = "#abc #cde #def";
	        $product->custom_field = json_encode(['key'=> $faker->name , 'value'=> $faker->randomNumber]);
	        $product->cat_id = $faker->numberBetween(1,10);
	        $product->dealer_id = $faker->numberBetween(1,5);
	        $product->save();
         }
    }
}
