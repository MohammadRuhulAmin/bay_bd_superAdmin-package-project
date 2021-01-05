<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'TeamBravo\SuperAdmin\Http\Controllers'],function(){
    Route::get('/super_admin','SuperAdminController@index');
    
});

