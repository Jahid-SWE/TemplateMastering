<?php
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[
   'uses' => 'NewShopOneController@index',
   'as'   => 'home'
]);
Route::get('/category-product',[
    'uses' => 'NewShopOneController@categoryProduct',
    'as'   => 'category-product'
]);
Route::get('/mail',[
    'uses' => 'NewShopOneController@mail',
    'as'   => 'mail'
]);
