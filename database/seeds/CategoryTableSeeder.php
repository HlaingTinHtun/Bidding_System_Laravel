<?php

use Illuminate\Database\Seeder;
use App\Category;
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menu Items Category
        
        $items = $this->getCategory();
     	$faker = Faker::create();

     	foreach ($items as $item) {
	        $category = new Category;
	        $category->name = $item;
	        $category->weight = $faker->numberBetween(1,10);
	        $category->save();
        }

    }
    protected function getCategory()
    {
        return $items =[
          "Mobile&Tablets",
          "Computers",
          "Electronics",
          "Fashion",
          "FootWear",
          "Jewelry&watches",
          "HomeAppliances",
          "Beauty&Perfumes",
          "Sports&Outdoors",
          "Garden",
          "HealthCares",
          "Vechicles",
          "Women Accessories",
          "Men Accessories",
          "Kid&Baby Accessories",
          "Bag Fashions",
          "Shoes&FootWear",
          "Skirts & Pants",
          "Blouse & Shirts",
          "Men Pants",
          "Gym Equipments",
          "Fancies",
          "Glasses",
          "Dr. Kaylee Purdy Jr.",
          "Maximo Wiegand",
          "Zechariah Donnelly",
          "Kory Kovacek MD",
          "Janet Wolf IV",
          "Kurtis Berge",
          "Alexandrine Schiller",
          "Jonathan Sporer",
          "Connie Buckridge DVM",
          "Ova Mann"
        ];
    }
}
