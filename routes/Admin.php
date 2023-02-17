<?php

use App\Models\Account;
use Illuminate\Support\Facades\Route;



Route::get('/admin/login', [\App\Http\Controllers\Admin\AdminController::class, 'adminLoginForm']);
Route::post('/admin/login', [\App\Http\Controllers\Admin\AdminController::class, 'adminLogin']);

Route::group(['middleware'=> 'admin'], function(){ 

});
    Route::get('/admin/dashboard', [\App\Http\Controllers\Admin\AdminController::class, 'adminDashboard']);
    Route::get('/admin/logout', [\App\Http\Controllers\Admin\AdminController::class, 'adminLogout']);
    Route::get('/department/create', [\App\Http\Controllers\Admin\DepartmentController::class, 'AddDepartmentForm']);

    Route::post('/department/store',[ \App\Http\Controllers\Admin\DepartmentController::class, 'DepartmentStore']);
    Route::get('/department/manage',[ \App\Http\Controllers\Admin\DepartmentController::class, 'DepartmentManage']);

    Route::get('/department/delete/{department}',[ \App\Http\Controllers\Admin\DepartmentController::class, 'DepartmentDelete']);
    Route::get('/students',[ \App\Http\Controllers\Admin\AdminController::class, 'students']);
    Route::get('/students/delete/{user}',[ \App\Http\Controllers\Admin\AdminController::class, 'studentsDelete']);

    //Account info
    Route::get('/accounts', [\App\Http\Controllers\Admin\AccountController::class, 'accountRegisterForm']);
    Route::post('/accounts/store', [\App\Http\Controllers\Admin\AccountController::class, 'accountRegister']);





