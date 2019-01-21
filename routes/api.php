<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::resource('transferarac','admin\trnArac');
route::resource('transferfiyat','admin\trfiyat');

route::resource('sayfa','admin\sayfaController');
route::resource('icerik','admin\icerikControler');

route::resource('blog','admin\blogController');

route::get('/', 'admin\index@index');

route::Get('/iletisim','admin\settings@ilt');
route::post('/iltguncelle','admin\settings@iltGuncelle');

/** mesaj yorum  */

route::get('mesajlar','admin\touch@mesajlar');
 route::get('tummesajlar','admin\touch@all');
  route::get('getmesaj/{id}','admin\touch@getMesaj');
 route::get('findmesaj/{type}','admin\touch@findMesaj');
route::get('mesajsil/{id}','admin\touch@mesajSil');
