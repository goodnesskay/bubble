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

    Route::get('profile/{id}/{username}',[
        'uses'=>'UserController@edit',
        'as'=>'profile',
        'middleware'=>'auth'
    ]);

    Route::post('profile/{id}/{username}',[
        'uses'=>'UserController@update',
        'as'=>'profile',
        'middleware'=>'auth'
    ]);

    Route::get('password-reset/{id}/{username}',[
        'uses'=>'UserController@passwordResetView',
        'as'=>'password-reset',
        'middleware'=>'auth'
    ]);

    Route::post('password-reset/{id}/{username}',[
        'uses'=>'UserController@passwordReset',
        'as'=>'password-reset',
        'middleware'=>'auth'
    ]);

    /**
     *  Transactions
     *
    */
    Route::get('request-wash',[
        'uses'=>'TransactionController@create',
        'as'=>'request-wash',
        'middleware'=>'auth'
    ]);

    Route::post('request-wash',[
        'uses'=>'TransactionController@store',
        'as'=>'request-wash',
        'middleware'=>'auth'
    ]);

    Route::get('all-transactions',[
        'uses'=>'TransactionController@showAll',
        'as'=>'all-transactions',
        'middleware'=>'auth'
    ]);

    Route::get('my-transactions',[
        'uses'=>'TransactionController@myRequests',
        'as'=>'my-transactions',
        'middleware'=>'auth'
    ]);

    Route::get('edit-request/{id}',[
        'uses'=>'TransactionController@edit',
        'as'=>'edit-request',
        'middleware'=>'auth'
    ]);

    Route::post('edit-request/{id}',[
        'uses'=>'TransactionController@update',
        'as'=>'edit-request',
        'middleware'=>'auth'
    ]);

    Route::get('approve-request/{id}',[
        'uses'=>'TransactionController@closeRequest',
        'as'=>'approve-request',
        'middleware'=>'auth'
    ]);

    Route::get('delete-request/{id}',[
        'uses'=>'TransactionController@destroy',
        'as'=>'delete-request',
        'middleware'=>'auth'
    ]);

});

