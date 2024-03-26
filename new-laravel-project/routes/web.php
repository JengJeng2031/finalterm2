<?php

use App\Http\Controllers\C_titles;
use App\Http\Controllers\MyAuth;
use App\Http\Controllers\MyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login' , [MyAuth::class,'login_view'])->name('login');
Route::get('/register' , [MyAuth::class,'register_view']);
Route::get('/logout' , [MyAuth::class,'logout_prrocess']);
Route::post('/login' , [MyAuth::class,'login_process']);
Route::post('/register' , [MyAuth::class,'register_process']);

Route::resource('titles', C_titles::class)->middleware('auth');
Route::get('/crud', function () {
    return view('crud/index');
});
Route::get('/add-new', 'YourController@addNew')->name('add-new');
Route::get('/persons', [UserController::class, 'index'])->name('persons.index');
Route::get('/persons/create', [UserController::class, 'create'])->name('persons.create');
Route::post('/persons', [UserController::class, 'store'])->name('persons.store');
Route::get('/persons/{id}/edit', [UserController::class, 'edit'])->name('persons.edit');
Route::put('/persons/{id}', [UserController::class, 'update'])->name('persons.update');
Route::delete('/persons/{id}', [UserController::class, 'destroy'])->name('persons.destroy');
Route::middleware('auth')->group(function(){


});

Route::get('/my-controller', [MyController::class, 'index']);

Route::get('/my-controller2', 'App\Http\Controllers\MyController@index');
Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/my-controller3', 'MyController@index');
    Route::post('/my-controller3-post', 'MyController@store');
});

Route::resource('/my-controller4', MyController::class);


Route::get('/', function () {
    return view('welcome'); // welcome.blade.php
});

// use Illuminate\Http\Request;

Route::get('/my-route', function(){
    // return view('myroute');
    //        Key    =>  Value
    $data = ['val_a' => 'Hello World!'];
    $data['val_b'] = "Laravel";
    return view('myfolder.mypage',$data);
});


Route::post('/my-route', function(Request $req){
    $data['myinput'] =  $req->input('myinput');
    return view('myroute', $data);
});
