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
    $teachers = \App\Models\User::Role('teacher')
                                ->latest()
                                ->take(3)
                                ->get();
    $classes  = \App\Models\Lesson::latest()
                                  ->take(6)
                                  ->get();
    return view('welcome', compact('teachers', 'classes'));
});
Route::get('/about-us', function () {
    return view('aboutus');
});
Route::get('/class', function () {
    $classes = \App\Models\Lesson::latest()
                                 ->get();
    return view('class', compact('classes'));
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
    $teachers = \App\Models\User::Role('teacher')
                                ->latest()
                                ->get();
    return view('morabi', compact('teachers'));
});
Route::get('/home', function () {
    return redirect('/admin');
});
Route::post('/admin/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])
     ->name('register');
