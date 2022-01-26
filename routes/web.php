<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


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

Route::get('/', function () {
    return view ('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('About', [
        "title" => "About",
        "nama" => "Arif Dermawan",
        "email" => "arif@smktelkom - pwt.sch.id",
        "gambar" => "arif.jpg"
    ]);
});

Route::get('/galerry', function () {
    return view ('Galerry', [
        "title" => "Galerry"
    ]);

});

Route::resource('/contacts', ContactController::class);

