<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Usercontroller;


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

Route::get('/',[PropertyController::class,'index'])->name('properties.show');
Route::get('/details/property/{property:id}',[PropertyController::class,'show'])->name('details');

Route::group(['middleware' => ['guest']], function() {
    /**
     * Register Routes
     */
    Route::get('/register',[RegisterController::class,'show'])->name('register.show');
    Route::post('/register',[RegisterController::class,'register'])->name('register.perform');


    /**
     * Login Routes
     */
    Route::get('/login', [LoginController::class,'show'])->name('login.show');
    Route::post('/login', [LoginController::class,'login'])->name('login.perform');

});
Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Routes
     */
    Route::get('/logout', [LogoutController::class,'perform'])->name('logout.perform');
    Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');

});
Route::prefix("admin")->middleware('admin')->group(function(){

    Route::get('/properties/{property:type_id}',[PropertyController::class,'showAdmin'])->name('admin.properties.index');
    Route::get('/properties/{property:type_id}/create', [PropertyController::class,'createProperty'])->name('admin.properties.create');
    Route::post('/properties/rooms/store',[PropertyController::class,'saveRoom'])->name('admin.rooms.save');
    Route::post('/properties/homes/store',[PropertyController::class,'saveHome'])->name('admin.homes.save');
    Route::post('/properties/homes/store',[PropertyController::class,'saveLand'])->name('admin.lands.save');
    Route::get('/users/owners',[UserController::class,'showOwners'])->name('admin.owners.show');
    Route::get('/users/customers',[UserController::class,'showCustomers'])->name('admin.customers.show');
    Route::get('/users',[Usercontroller::class,'showAllUsers'])->name('admin.users.show');



});

