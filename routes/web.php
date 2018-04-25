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
    return view('auth.login');
});
Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();
Route::group(['middleware' => ['auth','preventBackHistory']],function() {
    Route::get('/home', 'HomeController@index')->name('home');



   /* Route::get('/compliant', function () {
        return view('user.compliant');
    });

    Route::get('/suggestion', function () {
        return view('user.suggestion');
    });

    /*
    Route::get('/electrical_line', function () {
        return view('user.electricline');
    });

    Route::get('/water_line', function () {
        return view('user.waterline');
    });
*/
    Route::post('savecompliant', 'compliantcontroller@store');
    Route::post('savesuggest', 'suggestioncontroller@store');
    Route::post('saveelictricalline', 'electrical@store');
    Route::post('savewaterline', 'electrical@storewater');



});

Route::get('/licenses', function () {
    return view('tamplate.liceneses');
});

Route::get('/compliant', function () {
    return view('tamplate.compliant');
});

Route::get('/electrical', function () {
    return view('tamplate.electric');
});

Route::get('/water', function () {
    return view('tamplate.water');
});

Route::get('/suggestion', function () {
    return view('tamplate.suggestion');
});