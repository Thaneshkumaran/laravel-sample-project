<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;

Route::get('/',[Postcontroller::class, "index"]);
Route::get('/post/{id}',[Postcontroller::class, "details"]);
Route::get('/test', function () {
    return "Iam thanesh";
});
Route::get('/home', function () {
    return "<h1> welcome</h1>";
});
