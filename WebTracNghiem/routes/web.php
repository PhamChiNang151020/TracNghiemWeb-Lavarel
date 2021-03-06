<?php

use App\Http\Controllers\MyController;
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
// Route::get('/homepage', [MyController::class, 'index']);
Route::get('/homepage', 'MyController@index')-> name('HomePage');
// Route::get('homepage', function(){
//     return view('home');
// });

Route::get('/admin', 'AdminController@login')-> name('LoginAD');