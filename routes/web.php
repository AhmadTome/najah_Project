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
    return view('index');
});
Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();
//Route::group(['middleware' => ['auth','preventBackHistory']],function() {
    Route::get('/home', function (){
        return view('tamplate.compliant');
    });



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

// users

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

    Route::get('/my_request', function () {
        $user_id=session('user_id');
        $electrical_water=\App\electricalwater::select('accept','type','address')->where('userid',$user_id)->take(1500)->get();
        $cs=\App\complian_suggestion::select('title','type','kind_cs','accept')->where('user_id',$user_id)->take(1500)->get();
        $count =1;

        return view('tamplate.myrequest')
            ->with('cs',$cs)->with('count',$count)->with('electrical_water',$electrical_water);
    });


    Route::post('sign_in', 'LoginController@signin');
    Route::post('savecompliant', 'compliantcontroller@store');
    Route::post('savesuggest', 'suggestioncontroller@store');
    Route::post('saveelictricalline', 'electrical@store');
    Route::post('savewaterline', 'electrical@storewater');
    Route::post('saveLicense', 'licenseController@store');

// admin

    Route::get('/showsuggestions', function () {
        $suggestions = \App\complian_suggestion::all();
        return view('admin.showsuggestions')->with('suggestions',$suggestions);
    });
    Route::get('/rejectsuggestion','suggestioncontroller@rejectpost');
    Route::get('/acceptsuggestion','suggestioncontroller@acceptpost');


    Route::get('/showcompliant', function () {
        $compliant = \App\complian_suggestion::all();
        return view('admin.showcompliant')->with('compliant',$compliant);
    });
    Route::get('/rejectcompliant','compliantcontroller@rejectpost');
    Route::get('/acceptcompliant','compliantcontroller@acceptpost');


    Route::get('/show_water_Request', function () {
        $water = \App\electricalwater::all();
        return view('admin.showwaterrequest')->with('water',$water);
    });

    Route::get('/rejectwaterrequest','electrical@rejectpost');
    Route::get('/acceptwaterrequest','electrical@acceptpost');

    Route::get('/show_electrical_request', function () {
        $electrical = \App\electricalwater::all();
        return view('admin.show_electrical_request')->with('electrical',$electrical);
    });

    Route::get('/rejectelectricalrequest','electrical@rejectelectricalpost');
    Route::get('/acceptelectricalrequest','electrical@acceptelectricalpost');


    Route::get('/report', function () {
        $cs = \App\complian_suggestion::all();
        $count =1;
        return view('admin.report')->with('cs',$cs)->with('count',$count);
    });

    Route::get('/search', function () {
        $cs = \App\complian_suggestion::all();

        return view('admin.search')->with('cs',$cs);
    });

    Route::post('search', 'searchController@search');


Route::get('/index',function (){
       return view('index');
    });
//});

