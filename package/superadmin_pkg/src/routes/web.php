<?php

use Illuminate\Support\Facades\Route;

Route::get('/test',function (){
    return "ek";
});

Route::get('/test-2',function (){
    return view('SuperAdmin::test');
});
Route::group(['namespace'=>'TeamBravo\SuperAdmin\Http\Controllers'],function(){
    Route::get('/test-3','SuperAdminController@index');
});

