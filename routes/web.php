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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('profile',[
        'uses'=>'UserController@index',
        'as'=>'profile'
    ]);

    /**
     *  Transactions
     *
    */
    Route::get('request-wash',[
        'uses'=>'TransactionController@create',
        'as'=>'request-wash'
    ]);

    Route::get('all-transactions',[
        'uses'=>'TransactionController@show',
        'as'=>'all-transactions'
    ]);

});

