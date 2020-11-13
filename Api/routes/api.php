<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AnnonceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/************************get all**************************** */
Route::get('users', [UserController::class, 'users']);
Route::get('categories', [CategoryController::class, 'categories']);
Route::get('annonces', [AnnonceController::class, 'annonces']);
/*********************get by id***************************** */
Route::get('user/{id}', [UserController::class, 'user']);
Route::get('category/{id}', [CategoryController::class, 'category']);
Route::get('annonce/{id}', [AnnonceController::class, 'annonce']);
/*****************************Add************************************* */
Route::post('createUser', [UserController::class, 'create']);
Route::post('createCategory', [CategoryController::class, 'create']);
Route::post('createAnnonce', [AnnonceController::class, 'create']);
/***************************update********************************** */
Route::put('updateUser/{user}', [UserController::class, 'update']);
Route::post('updateCategory/{category}', [CategoryController::class, 'update']);
Route::post('updateAnnonce/{annonce}', [AnnonceController::class, 'update']);
/***************************delete********************************** */
Route::delete('deleteUser/{user}', [UserController::class, 'delete']);
Route::delete('deleteCategory/{category}', [CategoryController::class, 'delete']);
Route::delete('deleteAnnonce/{annonce}', [AnnonceController::class, 'delete']);
