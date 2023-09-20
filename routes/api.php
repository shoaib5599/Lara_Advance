<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\RelationshipController;
use Illuminate\Database\Eloquent\Factories\Relationship;
use Illuminate\Database\Eloquent\RelationNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Controllers\MyController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//This is for Service provider and container
Route::get('get',[MyController::class,'index']);

//this is for many to many Relationship
Route::get('many',[RelationshipController::class,'index']);
