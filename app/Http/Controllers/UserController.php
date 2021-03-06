<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProductController;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Http\Requests;

class UserController extends Controller
{
    public function getSignup()
    {
        return view('user.signup');
    }
    public function postSignup(Request $request)
    {
         $this->validate($request, [
            'email' => 'email|required|unique:users',
           'password' => 'required|min:4'
        ]);
                
        $user = new User([
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password'))
        ]);
      
        $user->save();
            Auth::login($user);

            if(Session::has('oldUrl')) {
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }
            return redirect()-action([UserController::class, 'getProfile']);
    }

    public function getSignin()
    {
        return view('user.signin');
    }
    public  function postSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required',
           'password' => 'required|min:4'
        ]);
        //$credentials = $request->only('email', 'password');
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            if(Session::has('oldUrl')){
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }
            print("auth passed");
            return redirect()->action([UserController::class, 'getProfile']);
        }
        // if (Auth::attempt($credentials)) {
        //     // Authentication passed...
        //     print("auth passed");
        //     //return redirect()->intended('dashboard');
        // }
        return redirect()->back();
    }

    public function getProfile() {
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key){   //transform means allow me to edit orders
          $order->cart = unserialize($order->cart);
          return $order;
        });
   
        return view('user.profile', ['orders' => $orders]);

    }

    public function getLogout() {
         Auth::logout();
         //return redirect()->back();
       //  return redirect()->URL('/user/signin');
         return redirect()->action([UserController::class, 'getSignin']);
    }
    
}   