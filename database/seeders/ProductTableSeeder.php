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

            'imagePath' => 'https://c65a95b8ced34e28bf29-344426f49a32d05de5f2bd364c200d77.ssl.cf5.rackcdn.com/img/single-product/first-anniversary-gifts/1STANNIV_0_SC_C.f81c93bb3bf38.jpg',
            'title' => 'Anniversary Gift Love Book',
            'description' => '1st Anniversary love story.',
            'price' => 45
        ]);
        
        $product->save();

        $product = new Product([

            'imagePath' => 'https://m.media-amazon.com/images/I/51NYdD2J3AL._SL500_.jpg',
            'title' => 'Mind Hacking',
            'description' => 'Mind Hacking story.',
            'price' => 70
        ]);
        
        $product->save();

        $product = new Product([

            'imagePath' => 'https://1.bp.blogspot.com/-CnNo7tjqoHc/VHbhrPCA53I/AAAAAAAADOM/j4frq_utR5s/s1600/Three%2BMistakes%2BOf%2BMy%2BLife%2BBook%2BBy%2BChetan%2BBhagat.jpg',
            'title' => 'The 3 Mistakes of My Life',
            'description' => 'The novel follows the story of three friends and is based in the city of Ahmedabad in western India.',
            'price' => 80
        ]);
        
        $product->save();

        $product = new Product([

            'imagePath' => 'https://www.rif.org/sites/default/files/Book_Covers/sorcerersstone.jpg',
            'title' => 'Harry Potter',
            'description' => 'The first Harry Potter book.',
            'price' => 50
        ]);
        
        $product->save();

        $product = new Product([

            'imagePath' => 'http://www.kylelambert.com/gallery/stranger-things-3-merch-art/images/stranger_things_3_merch_art_by_kyle_lambert.jpg',
            'title' => 'Stranger Things',
            'description' => 'Super cool - at least as a child.',
            'price' => 60
        ]);
        
        $product->save();
        $product = new Product([

            'imagePath' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1442714934l/5168517._SY475_.jpg',
            'title' => 'Waiting for You',
            'description' => 'Marisa is ready for a fresh start and, more importantly, a boyfriend.',
            'price' => 10
        ]);
        
        $product->save();
    }
}
