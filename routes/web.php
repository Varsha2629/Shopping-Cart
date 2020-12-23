<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/',  [ 
//      'uses' => 'ProductController@getIndex',
//     'as' => 'products.index'
//     ]);

Route::get('/', [ProductController::class, 'getIndex',
     'as' => 'product.index'
]);   

Route::get('/add-to-cart/{id}', [ProductController::class,'getAddToCart',
  'as' => 'product.addToCart'

]);
Route::get('/shopping-cart', [ProductController::class,'getCart',
  'as' => 'product.shoppingCart'

]);
Route::group(['middleware' => 'auth'], function() {

  Route::get('/checkout', [ProductController::class,'getCheckout',
    'as' => 'product.checkout',
  //'middleware' => 'auth'

  ]);

  Route::post('/checkout', [ProductController::class,'postCheckout',
    'as' => 'product.checkout',
  // 'middleware' => 'auth'

  ]);
});

Route::group(['prefix' => 'user'], function() {
  Route::group(['middleware' => 'guest'], function() {
    
    Route::get('/signup', [UserController::class, 'getSignup',
     // 'as' => 'user.signup'
       ]);   
  
     Route::post('/signup', [UserController::class, 'postSignup',
     // 'as' => 'user.signup' 
     ]); 

     Route::get('/signin', [UserController::class, 'getSignin',
     // 'as' => 'user.signin'
     ]); 

     Route::post('/signin', [UserController::class, 'postSignin',
     // 'as' => 'user.signin'
     
    ]); 
  });

  Route::group(['middleware' => 'auth'], function() {
    Route::get('/profile', [UserController::class, 'getProfile',
      //'as' => 'user.profile'print("get signup");
    ]); 
 
    Route::get('/logout', [UserController::class, 'getLogout',

    ]);

  });
     
});