<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


Route::get('/main', [userController::class,"main"]) -> name('main');
//Add Roles
Route::Post('add/role', [userController::class, "addRole"]);

Route::get('/index', [userController::class,"index"]) -> name('index');

Route::get('/', [userController::class, 'showLoginForm'])->name('login');
Route::post('/', [userController::class, 'authenticate']);

//dept
Route::post('/departments/store', [userController::class, 'store'])->name('departments.store');
Route::post('/add/addtask', [userController::class, 'addtask']);
//Approve work
Route::post('user/approve/{id}', [userController::class,"approve"]);
//Accept work
Route::post('user/accept/{id}', [userController::class,"accept"]);
//fetch assigned det
Route::post('user/fetchdet/{id}', [userController::class,"fetchdet"]);
//click to finish function
Route::post('/check-task-status', [UserController::class, 'checkTaskStatus']);
Route::post('/update-main-task', [UserController::class, 'updateMainTask']);
//redo
Route::post('/store-reason/{id}', [UserController::class, 'storeReason'])->name('store-reason');
//forwardtask
Route::post('/forward/forwardtask', [userController::class, 'forwardtask']);
//click to complete task
Route::post('/user/complete/{id}',[userController::class, 'completed']);
//forward approve work
Route::post('user/forwardapprove/{id}', [userController::class,"forwardapprove"]);
//fetch assigned det
Route::post('user/forwardfetchdet/{id}', [userController::class,"forwardfetchdet"]);
//click to finish for forward
Route::post('/check-forwardtask-status', [UserController::class, 'forwardcheckTaskStatus']);
Route::post('/update-forward-task', [UserController::class, 'forwardupdateMainTask']);
//redo
Route::post('/store-fredoreason/{id}', [UserController::class, 'forwardstoreReason'])->name('forward-store-reason');
//fetch assigned det
Route::post('user/cassignedfetchdet/{id}', [userController::class,"cassignedfetchdet"]);
//over_due click to complete
Route::post('/overdue/complete/{id}', [userController::class,"overduecomplete"]);
//History tab
Route::get('/chart-data', [userController::class, 'getChartData']);
Route::post('/get-demerit-points', [userController::class, 'getDemeritPoints'])->name('getDemeritPoints');