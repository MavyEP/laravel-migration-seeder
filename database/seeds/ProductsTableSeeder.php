<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $dati_products = config('products');
        //
        // foreach ($dati_products as $dati_product) {
        //   $new_product = new Product();
        //   $new_product->name = $dati_product['name'];
        //   $new_product->category = $dati_product['category'];
        //   $new_product->type = $dati_product['type'];
        //   $new_product->seller = $dati_product['seller'];
        //   $new_product->price = $dati_product['price'];
        //   $new_product->save();
        // }

        //generate 7 more fake items

        for ($i=0; $i < 6; $i++) {
          $new_product = new Product();
          $new_product->name = $faker->firstname;
          $new_product->category = $faker->colorName;
          $new_product->type = $faker->ean8;
          $new_product->seller = $faker->company;
          $new_product->price = $faker->randomDigit;
          $new_product->save();
        }
    }
}
