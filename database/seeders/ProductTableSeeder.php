<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $product = new Product([

            'imagePath' => 'http://www.kylelambert.com/gallery/stranger-things-3-merch-art/images/stranger_things_3_merch_art_by_kyle_lambert.jpg',
            'title' => 'Stranger Things',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);
        
        $product->save();

        $product = new Product([

            'imagePath' => 'http://www.kylelambert.com/gallery/stranger-things-3-merch-art/images/stranger_things_3_merch_art_by_kyle_lambert.jpg',
            'title' => 'Stranger Things',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);
        
        $product->save();

        $product = new Product([

            'imagePath' => 'http://www.kylelambert.com/gallery/stranger-things-3-merch-art/images/stranger_things_3_merch_art_by_kyle_lambert.jpg',
            'title' => 'Stranger Things',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);
        
        $product->save();

        $product = new Product([

            'imagePath' => 'http://www.kylelambert.com/gallery/stranger-things-3-merch-art/images/stranger_things_3_merch_art_by_kyle_lambert.jpg',
            'title' => 'Stranger Things',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);
        
        $product->save();

        $product = new Product([

            'imagePath' => 'http://www.kylelambert.com/gallery/stranger-things-3-merch-art/images/stranger_things_3_merch_art_by_kyle_lambert.jpg',
            'title' => 'Stranger Things',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);
        
        $product->save();
        $product = new Product([

            'imagePath' => 'http://www.kylelambert.com/gallery/stranger-things-3-merch-art/images/stranger_things_3_merch_art_by_kyle_lambert.jpg',
            'title' => 'Stranger Things',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);
        
        $product->save();
    }
}
