<?php

namespace Database\Seeders;

use App\Models\Product;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        for ($i=1; $i < 10 ; $i++) { 
            $product = new Product();
            $product->user_id = $i;
            $product->name = 'This is product name '.$i;
            $product->description = 'This is product description '. $i;
            $product->save();
        }
    }
}
