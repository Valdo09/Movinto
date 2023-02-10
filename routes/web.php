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

Route::get('/frontest', function (){
    return view('frontend.home');
});

Route::get('/backend', function (){
    return view('backend.dashboard');
});
Route::get('/backend/show', function (){
    return view('backend.rooms.show');
});
Route::get('/backend/create', function (){
    return view('backend.rooms.create');
});Route::get('/backend/edit', function (){
    return view('backend.rooms.edit');
});

Route::get('/accueil',[PropertyController::class,'index'])->name('accueil');

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
    Route::post('/properties/lands/store',[PropertyController::class,'saveLand'])->name('admin.lands.save');


    Route::get('properties/homes/edit/{home:id}',[PropertyController::class,'editHome'])->name('admin.homes.edit');
    Route::put('properties/homes/update/{home:id}',[PropertyController::class,'updateHome'])->name('admin.homes.update');
    Route::delete('properties/homes/delete/{home:id}',[PropertyController::class,'destroyHome'])->name('admin.homes.destroy');
    Route::get('properties/homes/show/{home:id}',[PropertyController::class,'showHome'])->name('admin.homes.show');


    Route::get('properties/rooms/edit/{room:id}',[PropertyController::class,'editRoom'])->name('admin.rooms.edit');
    Route::put('properties/rooms/update/{room:id}',[PropertyController::class,'updateRoom'])->name('admin.rooms.update');
    Route::delete('properties/rooms/delete/{room:id}',[PropertyController::class,'destroyRoom'])->name('admin.rooms.destroy');
    Route::get('properties/rooms/show/{room:id}',[PropertyController::class,'showRoom'])->name('admin.rooms.show');

  
    Route::get('properties/lands/edit/{land:id}',[PropertyController::class,'editLand'])->name('admin.lands.edit');
    Route::put('properties/lands/update/{land:id}',[PropertyController::class,'updateLand'])->name('admin.lands.update');
    Route::delete('properties/lands/delete/{land:id}',[PropertyController::class,'destroyLand'])->name('admin.lands.destroy');
    Route::get('properties/lands/show/{land:id}',[PropertyController::class,'showLand'])->name('admin.lands.show');





    Route::get('/users/owners',[UserController::class,'showOwners'])->name('admin.owners.show');
    Route::get('/users/customers',[UserController::class,'showCustomers'])->name('admin.customers.show');
    Route::get('/users',[Usercontroller::class,'showAllUsers'])->name('admin.users.show');
    Route::post('/users/customers-to-owners/{customer:id}',[Usercontroller::class,'changeCustomerToOwner'])->name('customers.change.owners');
    Route::post('/users/owners-to-customers/{owner:id}',[Usercontroller::class,'changeOwnerToCustomer'])->name('owners.change.customers');

   




});

