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
           
            'imagePath' => 'https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/product/set55/e20142-11/white_sapphire_1.jpg',
            'title' => 'Earring Aggie',
            'description' => '585 White Gold / Sapphire & White Sapphire',
            'price' => 1837
        ]);
        
        $product->save();

        $product = new Product([

            'imagePath' => 'https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/product/set55/e201412/white_diamond_1.jpg',
            'title' => 'Earring Polly',
            'description' => '925 Silver/Swarovski Crystal & White Sapphire',
            'price' => 610
        ]);
        
        $product->save();

        $product = new Product([

            'imagePath' => 'https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/product/set55/e201413/white_blackdiamond_1.jpg',
            'title' => 'Earring Sammy',
            'description' => '950 Platinum/Black Diamond & Diamond',
            'price' => 5208
        ]);
        
        $product->save();

        $product = new Product([

            'imagePath' => 'https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/product/newgeneration/view/1/sku/mariya/diamond/sapphire_AAAA/stone2/diamond-Brillant_AAA/alloycolour/white.jpg',
            'title' => 'Earring Mariya',
            'description' => '950 Platinum/Sapphire & Diamond',
            'price' => 2746
        ]);
        
        $product->save();

        $product = new Product([

            'imagePath' => 'https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/product/newgeneration/view/1/sku/agrafina/diamond/diamond-Brillant_AAA/stone2/diamond-Brillant_AAA/stone3/diamond-Swarovsky_AAAAA/alloycolour/white.jpg',
            'title' => 'Earring Agrafina',
            'description' => '585 White Gold / Diamond & Swarovski Crystal',
            'price' => 59523
        ]);
        
        $product->save();
        $product = new Product([

            'imagePath' => 'https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/product/newgeneration/view/1/sku/sharyn/diamond/diamond-Swarovsky_AAAAA/alloycolour/white.jpg',
            'title' => 'Earring Sharyn',
            'description' => '585 White Gold/Swarovski Crystal',
            'price' => 919
        ]);
        
        $product->save();
        $product = new Product([

            'imagePath' => 'https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/product/set55/g100750/white_diamond_1.jpg',
            'title' => 'Earring Eleni',
            'description' => '585 White Gold / Diamond',
            'price' => 1305
        ]);
        
        $product->save();
        $product = new Product([

            'imagePath' => 'https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/product/newgeneration/view/1/sku/sharyn/diamond/diamond-Swarovsky_AAAAA/alloycolour/white.jpg',
            'title' => 'Earring Stelina',
            'description' => '375 Rose Gold/Rose Pearl/Diamond',
            'price' => 919
        ]);
        
        $product->save();
        $product = new Product([

            'imagePath' => 'https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/product/set55/bedreka/white_diamond_1.jpg',
            'title' => 'Earring Bedreka',
            'description' => '375 White Gold / Diamond',
            'price' => 4555
        ]);
        
        $product->save();
       
    }
}
