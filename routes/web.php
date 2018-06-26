<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('minharota', function () {
    return view('helloword');
});

Route::get('client', function () {
    return view('client');
});

Route::post('cliente', function (Request $request) {
    return $request->get('value');
})->name('client.store');

Route::get('client/{id}/{name}', function ($id,$name) {
    return view('client-name',[
        'id'=>$id,
        'name'=>$name

    ]);
});