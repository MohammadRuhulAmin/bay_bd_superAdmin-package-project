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


    //attendence module

    Route::get('/super_admin/Attendence','AttendenceController@viewAttendenceFile')->name('user.attendenceView');
    Route::post('/super_admin/Attendence/store','AttendenceController@storeAttendence')->name('attendence.store');
    Route::post('/super_admin/Attendence/AttendenceList/','AttendenceController@searchUserAtndnce')->name('user.attendenceList');
    

    //document module

    
    Route::get('/super_admin/Document','DocumentController@index')->name('info.document');
    Route::post('/super_admin/Document/store','DocumentController@storeDocument')->name('document.save');
    Route::get('/super_admin/Document/delete/{id}','DocumentController@deleteDocument')->name('document.delete');
    Route::get('/super_admin/Document/viewDocument/{id}','DocumentController@viewFile')->name('document.view');


    //Expence Module

    Route::get('/super_admin/Expence','ExpenceController@expenceIndex')->name('expence.index');
    Route::post('/super_admin/Expence/Store','ExpenceController@storeExpence')->name('expence.store');
    Route::get('/super_admin/Expence/Edit/{id}','ExpenceController@editExpence')->name('expence.edit');
    Route::post('/super_admin/Expence/update/{id}','ExpenceController@updateExpence')->name('expence.update');
    Route::get('/super_admin/Expence/delete/{id}','ExpenceController@deleteExpence')->name('expence.delete');

    //project Module


    Route::get('/super_admin/project_index','ProjectController@projectIndex')->name('project.index');
    Route::post('/super_admin/project_index/store','ProjectController@projectStore')->name('project.store');
    Route::get('/super_admin/project_index/delete/{id}','ProjectController@deleteProject')->name('project.delete');
    Route::get('/super_admin/project_index/document/{id}','ProjectController@viewDocument')->name('project.document');
    Route::get('/super_admin/project_index/Edit/{id}','ProjectController@editProject')->name('project.edit');
    Route::post('/super_admin/project_index/update/{id}','ProjectController@updateProject')->name('project.update');


    //Engineers Project
    
    Route::get('/super_admin/index','EngineerProjectController@index')->name('projectEng.index');
    Route::post('/super_admin/projectAssigning/store','EngineerProjectController@storeEngPro')->name('projectEngineering.store');
    Route::get('/super_admin/projectAssigning/viewMembers','EngineerProjectController@projectMembers')->name('project.membersList');

    Route::get('/super_admin/projectAssigning/project_list/{id}','EngineerProjectController@viewProjectsList')->name('userProjectList');





});

