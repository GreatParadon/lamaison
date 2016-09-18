<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Http\Request;

Route::auth();


Route::get('/admin', function () {
    return redirect('admin');
});


Route::group(['prefix' => 'admin'], function () {

    Route::get('/', 'BaseController@dashboard');

    Route::group(['namespace' => 'Admin'], function () {

        Route::resource('test', 'TestController');
        Route::resource('contact', 'ContactController');

    });

    Route::post('wysiwyg_upload', 'BaseController@wysiwygUpload');

});

Route::get('/', function (Request $request) {
    $lang = $request->session()->get('lang');
    App::setLocale($lang);
    return view('web.home');
});

Route::get('/{page}', function (Request $request, $page) {
    $lang = $request->session()->get('lang');
    App::setLocale($lang);
    return view('web.' . $page);
});

Route::get('lang/{lang}', function (Request $request, $lang) {
    $request->session()->put('lang', $lang);
});
