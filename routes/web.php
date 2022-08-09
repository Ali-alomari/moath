<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

use Illuminate\Foundation\Auth\User;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth']
    ],
    function () {
        Route::resource('category', CategoryController::class);
        Route::resource('product', ProductController::class);


        Route::get('/Dashboard', function () {
            return view('welcome');
        })->name('dashboard');

     Route::get('/', function () {
            return view('auth.Login');
        });

    }
);
/*
->middleware('auth')
*/
