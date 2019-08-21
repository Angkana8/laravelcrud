<?php

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
    return view('layouts.master');
});
Route::get('/list', function () {
    return view('list');
});
Route::get('/add', function () {
    return view('add');
});
Route::resource('people', 'PeopleController');
// Route::resource('/tasks', 'TaskController');


// Route::view('/user/creste', 'user')-> name('user.c'); 

// Route::get('user/{id}', function ($id) {
//     return view('users.user')->with('id', $id);
// });
    
// Route::get('user/{id}', 'UserController@index');

// use Illuminate\Support\Facades\Route;
// use PHPUnit\Util\Test;

//     Route::prefix('user')->group(function) {
//     Route::get({id}', 'UserController@index');
//     Route::get('{id}', function(){
//         return 'test';
//     })
        
        
// });
