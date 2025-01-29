<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


Route::get('/', [userController::class,"index"]) -> name('index');
//Add Roles
Route::Post('add/role', [userController::class, "addRole"]);
