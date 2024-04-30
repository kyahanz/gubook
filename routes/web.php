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

Route::get('/login', function () {
    return view('login.login_page');
});


// Route::redirect('/login_page.blade.php', '/login');
Route::redirect('/register_page.blade.php', '/register');
Route::redirect('/dashboard_page.blade.php', '/dashboard');
