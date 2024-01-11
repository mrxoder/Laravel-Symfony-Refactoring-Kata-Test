<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) 
{
    return $request->user();
});

Route::middleware(['web'])->group(function ()
{
	Route::post("/auth", [Controllers\UserController::class, "auth"]);
});

Route::post("/create", [Controllers\UserController::class, "create"]);



