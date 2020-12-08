<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{

    public function getIndex()
    {    
         $products = Product::all();
         return view('shop.index', ['products'=> $products]);
    }
    public function getAddToCart(Request $request, $id)
    {

        $product = Product::find($id);
       
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        

        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        //return redirect()->URL('product.index');
        return redirect()->action([ProductController::class, 'getIndex']);

    }
    public function getCart() {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = session::get ('cart'); 
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice'=>$cart->totalPrice]);
    }
}
