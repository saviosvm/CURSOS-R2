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


//$user = \App\Models\User::find(4);

//dd($user->store()->count());

//pegar os prodtos de uma loja
//$loja = \App\Models\Store::find(1);

//return $loja->products()->where('id', 1)->get();

//$categoria = \App\Models\Category::find(1);
//return $categoria->products;

//return \App\Models\User::all();

//criar uma loja para um uuario
/*
$user = \App\Models\User::find(10);
$store = $user->store()->create([
  'nome' => 'loja teste',
  'descricao' => 'loja teste de produtos de informatica',
  'telefone' => 'xx-xxxxx-xxxx',
  'celular' => 'xx-xxxxx-xxxx',
  'slug' => 'loja-teste',
]); */

//criar um produto para uma loja
$store = \App\Models\Store::find(41);
$produto = $store->products()->create([
  'nome' => 'Notbook',
  'descricao' => 'core i9',
 'body' => 'fasdfasdf',
  'preco' => 8524.50,
  'slug' => 'notbook-dell',
]);

dd($produto);
    
});