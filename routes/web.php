<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
// Route::get('/', function () {
//     return "aboutus";
// });
Route::get('/career', function () {
    return view('career');
});
Route::get('/achievement', function () {
    return view('achievement');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});

// Route::get('/person/{name}', function($name){
//     return "The name is $name.";
// });
Route::get('/person/{name}', function($name){
    return "The name is $name.";
})->name('person');

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticlesController;
Route::get('/', [
    HomeController::class, 'index'
]);

Route::get('/articles', [
    ArticlesController::class, 'index'
]);
