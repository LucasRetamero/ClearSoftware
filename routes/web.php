<?php

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

Route::group(['namespace'=>'Produto','prefix'=>'produtos'],function(){
Route::any('/procuraPolitico','listaController@procuraPolitico')->name('produto.procurapolitico');	
});

Route::get('/#portfolio',function(){
   return view(principal);	
});

Route::get('/#contact',function(){
   return view('principal');	
});

Route::get('/', function () {
    return view('principal');
});
