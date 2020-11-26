<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProductController;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function getSignup()
    {
        print("from get route");
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
}   