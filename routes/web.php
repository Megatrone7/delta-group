<?php

use Illuminate\Support\Facades\Route;


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
route::get('/factory',function () {
  \App\Models\Vila::factory()->create();
});

 Route::get('singel',function (){
     return view('single-post');
 });
Route::get('side',function (){
    return view('no-sidebar');
});
Route::get('/',[\App\Http\Controllers\IndexController::class,'index']);

Route::get('index',function(){
    return view('index1');

});
Route::get('form',function(){
    return view('form');

});
Route::get('form/create',[\App\Http\Controllers\VilaController::class,'create'])->name('form.create');
Route::post('/form',[\App\Http\Controllers\VilaController::class,'store'])->name('form.store');
