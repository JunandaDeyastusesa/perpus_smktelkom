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

$router->get("/", "TransaksiController@view");
$router->get("/transaksi", "TransaksiController@create");
$router->get("/detail/{transaksi}", "TransaksiController@detail");
$router->get("/edit/{transaksi}", "TransaksiController@edit");
$router->get("/delete/{transaksi}", "TransaksiController@delete");

$router->post("/update/{transaksi}", "TransaksiController@update");
$router->post("/", "TransaksiController@store");


