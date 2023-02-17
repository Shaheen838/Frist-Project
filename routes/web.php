<?php
use App\Http\Controllers\forntend\forntendcontroller;
use App\Http\Controllers\forntend\forntendController as ForntendForntendController;
use App\Http\Controllers\Frontend\Frontendcontroller;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [forntendcontroller::class, 'index']);
Route::get('/register', [forntendcontroller::class, 'register']);
Route::post('/student/register', [forntendcontroller::class, 'studentRegister']);


Route::get('/login', [forntendcontroller::class, 'login']);
Route::post('/student/login', [forntendcontroller::class, 'studentLogin']);
Route::group(['middleware'=> 'frontend'], function(){

    Route::get('/student/dashboard',[forntendcontroller::class, 'studentDashboard']);
});

Route::get('/student/logout',[forntendcontroller::class, 'studentLogout']);



