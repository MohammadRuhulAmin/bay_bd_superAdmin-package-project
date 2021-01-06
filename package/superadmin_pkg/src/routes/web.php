<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'TeamBravo\SuperAdmin\Http\Controllers'],function(){
    Route::get('/super_admin','SuperAdminController@index')->name('dashboard');
    Route::get('/super_admin/create_user','SuperAdminController@createUser')->name('user.create');
    Route::post('/super_admin/store_user','SuperAdminController@userStore')->name('user.store');

    
});

