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

namespace App;

Route::get('/', function () {

//	$table = DB::table('orders')->get();
	//$table = App\orders::last();
	$table = Serial_table::get();
    return view('main', compact('table'));
	//return $table;
});
