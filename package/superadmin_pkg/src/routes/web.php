<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'TeamBravo\SuperAdmin\Http\Controllers'],function(){
    //super admin route!
    Route::get('/super_admin','SuperAdminController@index')->name('dashboard');
    Route::get('/super_admin/create_user','SuperAdminController@createUser')->name('user.create');
    Route::post('/super_admin/store_user','SuperAdminController@userStore')->name('user.store');
    Route::get('/super_admin/users_list','SuperAdminController@userList')->name('user.userList');
    Route::get('/super_admin/users_list/user_details/{id}','SuperAdminController@userDetail')->name('user.details');
    Route::get('/super_admin/user_list/user_details/edit/{id}','SuperAdminController@userEdit')->name('user.editInfo');
    Route::post('/super_admin/user_list/user_details/update/{id}','SuperAdminController@saveUserUpdate')->name('user.update');
    Route::get('/super_admin/user_list/user_details/delete/{id}','SuperAdminController@deleteUser')->name('user.delete');
});

