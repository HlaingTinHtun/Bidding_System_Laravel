<?php

use App\WishList;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class WishListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            $wishlist = new WishList();
            $wishlist->name = $faker->name;
            $wishlist->user_id = $faker->numberBetween(1,10);
            $wishlist->product_id = $faker->numberBetween(1,10);
            $wishlist->save();
        }
    }
}
