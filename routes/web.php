<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\pricingcontroller;
use App\Http\controllers\subscriptioncontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('mainpage');
});

Route::get('subscription',[subscriptioncontroller::class, 'index']);

Route::get('pricing',[pricingcontroller::class, 'index']);
