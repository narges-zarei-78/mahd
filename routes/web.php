<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/about-us', function () {
    return view('aboutus');
});
Route::get('/class', function () {
    return view('class');
});
Route::get('/contact-us', function () {
    return view('tamas_ba_ma');
});
Route::get('/tasviri', function () {
    return view('ertebat_tasviri');
});
Route::get('/estekhdam', function () {
    return view('estekhdam_morabi');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/morabi', function () {
    return view('morabi');
});
Route::post('/admin/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
