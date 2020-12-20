<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;
use Auth;
use Stripe\Charge;
use Stripe\Stripe;

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
        $oldCart = Session::get ('cart'); 
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice'=>$cart->totalPrice]);
    }
    public function getCheckout(){
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);
    }
    public function postCheckout(Request $request)
    {
        if (!Session::has('cart')) {
            return redirect()->Route('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        print($cart->totalPrice);

        Stripe::setApikey('sk_test_51HwXrqCI7HY6MLC4V5IGTHjFeO0NSsWgf6ct456RUoHxFJURWVSeiC0JNNlpB8u2E35RFqCUlgbxFWp9V6FQpmrO00pdGfiAme');
        try { 
            // create charge 4242424242424242
                
            $charge = Charge::create(array(                          
                "amount" => $cart->totalPrice * 100,
                "currency" => "usd",
                "source" => $request->input('stripeToken'), 
                "description" => "Test Charge"
            ));
            
            $order = new Order();            
            $order->cart =serialize($cart);           
          
            $order->payment_id = $charge->id;
            $order->user_id = Auth::user()->id; // Save database from the Stripe.
            $order->save();
               //Auth::user()->orders()->save($order); // save related object in database
        } 
        
        catch (\Exception $e) {
            return redirect()->action([ProductController::class, 'getCheckout'])->with('error', $e->getMessage());
        }
        
        Session ::forget('cart');
        return redirect()->action([ProductController::class, 'getIndex'])->with('success', 'Successfully purchased products!');
    }

}
