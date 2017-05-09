<?php

use App\Bid;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class BidTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,30) as $index) {
            $product = new Bid();
            $product->amount = $faker->randomNumber(2);
            $product->bidded_at = $faker->date();
            $product->slug = $faker->slug;
            $product->bidder_id = $faker->numberBetween(1,10);
            $product->product_id = $faker->numberBetween(1,10);
            $product->save();
        }
    }

}
