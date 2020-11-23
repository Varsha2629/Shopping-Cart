<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/signup',  [ 
    'user' => 'UserController@postSignup',
    'as' => 'user.signup'   
    
]);
  

Route::post('/signup',  [ 
    'user' => 'UserController@postSignup',
    'as' => 'user.signup'   
    
]);