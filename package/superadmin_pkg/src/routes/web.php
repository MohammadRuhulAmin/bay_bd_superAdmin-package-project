<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'TeamBravo\SuperAdmin\Http\Controllers'],function(){
    Route::get('/super_admin','SuperAdminController@index');
   // Route::get('/super_admin/user_details','SuperAdminController@check_relation');
    
});

