<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/me', function(){
    return ['Nama' => 'HananZulfanR', 
    'Kelas' => 'XII RPL 2', 
    'Absen' => '34',
    'Alamat' => 'Purbalingga',
    'Gender' => 'Laki Laki'];
});

Route::get('auth', 'AuthController@me'); 