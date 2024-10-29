<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BioDataController;
Route::get('/', function () {
    return view('welcome');
});
//! Ini Adalah Rute Tanpa MVC
Route::get('/ruteBaru', function () {
    return "<h1 style='color:red ; text-align:center;'; >Ini Adalah Rute Baru Tanpa MVC</h1>";
});


// // ! Ini Adalah Rute Mengambil Parameter Dari Route
// Route::get('/{name}', function ($name) {
//     return "<h1 style='color:red'>Hello , Nama Saya :  {$name} </h1>";
// });


//! Ini Adalah Rute Dengan View Tanpa Controller

Route::get('/view', function () {
    return view('view');
});

// ! Ini Adalah Rute Dengan View Dengan Controller

Route::get('/page/views', [RuteController::class, 'menampilkanData']);




// ! Ini Rute Dengan Views Models Dan Controller

Route::get('/page/models', [RuteController::class, 'menampilkanDataModels']);


// ! Ini Route Untuk Views Ke Biodata 

Route::get('/page/biodata', [BioDataController::class, 'index']);





// ! Ini Rute Dashboard Product
// Route::get('/dashboard/product', [ProductController::class, 'index']);