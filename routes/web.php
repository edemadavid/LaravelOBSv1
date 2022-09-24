<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();




Route::group(['middleware'=>'auth'], function () {

    Route::get('/home', [App\Http\Controllers\AccountController::class, 'index'])->name('home');

    Route::resource('/profile' , UserProfileController::class );

    // Route::resource('/account' , AccountController::class );

    Route::get('account/create', [AccountController::class, 'create'])
        ->name('create');

    Route::post('account/create', [AccountController::class, 'store'])
        ->name('create');

    Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>'is_admin'], function () {

        Route::resource('pages' , PageController::class );

    });

});
