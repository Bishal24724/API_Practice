<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Member;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("data",[ApiController::class,'getData']);
Route::get("list",[EmployeeController::class,'list']);
Route::get("singleEmployee/{id?}",[EmployeeController::class,'singleEmployee']);
Route::post("add",[EmployeeController::class,"add"]);
Route::put("update/{id}",[EmployeeController::class,"update"]);
Route::get("search/{name}",[EmployeeController::class,"search"]);
Route::delete("delete/{id}",[EmployeeController::class,'delete']);
Route::post("save",[EmployeeController::class,'testData']);
Route::apiResource("member",Member::class);