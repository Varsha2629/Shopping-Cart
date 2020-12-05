<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProductController;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
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

            return redirect()->action([ProductController::class, 'getIndex']);
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
        $credentials = $request->only('email', 'password');
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
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
        return view('user.profile');
    }

    public function getLogout() {
         Auth::logout();
         //return redirect()->back();
         return redirect()->action([ProductController::class, 'getIndex']);
    }
    
}   