<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    return view('home');
});

Route::get('/table/{tableName}', function ($tableName) {
    $tableColsName = DB::select("DESCRIBE $tableName");
    $tableData = DB::select("SELECT * FROM $tableName LIMIT 10");

    return view('home', ['tableColsName' => $tableColsName, 'tableData' => $tableData]);
});