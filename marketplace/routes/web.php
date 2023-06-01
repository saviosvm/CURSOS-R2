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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/model', function(){
    //$products = \App\Models\Product::all();
    
    
   //$user = \App\Models\User::find(1);
   // $user->name = 'Savio Morais';
    //$user->save();

   // return \App\Models\User::all();

//return $user->where('id', '>', '5')->first();

//dd(\App\Models\User::where('name', 'Thais')->get());;
//$user = \App\Models\User::create([
   // 'name' => 'Thais',
    //'email' => 'thaisfg1@hotmail.com',
   // 'password' => bcrypt('1234567895'),

//]);

//$user = \App\Models\User::find(9);
//$user->update([
  //  'name' => 'Atualizando os dados',
//]);



    
});