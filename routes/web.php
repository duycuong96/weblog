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

// Route::get('/admin', function () {
//     dd(1);
//     // return view('');
// })->name('admin');


// Route::get('/',);




Route::group([
    'prefix' => 'admins'
], function () {

    Route::get('/', 'admin\AdminController')->name('admin');

    // Admin user
    Route::resource('users', 'admin\UserController');




});


Route::get('login', 'AuthController@getLoginForm');
Route::post('login', 'AuthController@login')->name('auth.login');



