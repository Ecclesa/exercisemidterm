<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
    return redirect('/blog');
});

Route::get('/blog', [BlogController::class, 'all']);

Route::get('/blog/technology', [BlogController::class, 'technology']);

Route::get('/blog/gaming', [BlogController::class, 'gaming']);

Route::get('/blog/life', [BlogController::class, 'life']);

Route::get('/post/{id?}', [BlogController::class, 'post']);
