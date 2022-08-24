<?php

use App\Http\Controllers\UserController;
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

/**
 * required parameters
 */
Route::get('/user/{id}', function($id){
    return $id; 
});
// optional parameter, tambahkan ? setelah nama parameter
Route::get('/data/{id?}', function($id = null){
    return $id; 
});
//menambahkan regex pada uri, menambahkan name
Route::get('/search/{data}', function ($data){
    return $data;
})->where('data','[0-6]')->name('search');

// implementasi middleware && pemanggilan middleware custom

Route::get('/dashboard', function(){
})->middleware('testMiddleware');

//menggunakan resource (crud)
Route::resource('/resource/users', UserController::class);

//implementasi dokumentasi response
Route::get('/stream', function(){
    return response()->streamDownload(function(){
        // content
    });
});

// implementasi dokumentasi views
Route::get('/greetings', function(){
    return view('greetings', ['name' => 'Hafid']);
});