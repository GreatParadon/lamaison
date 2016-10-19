<?php

use Illuminate\Http\Request;

Route::post('store', function (Request $request) {
    $input = $request->all();

    App\Models\Contact::create($input);

    return success('Store contact success');
});

Route::auth();

Route::get('admin', 'BaseController@dashboard');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::resource('contact', 'ContactController');

});

Route::post('wysiwyg_upload', 'BaseController@wysiwygUpload');


Route::group(['namespace' => 'Web'], function () {

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

});