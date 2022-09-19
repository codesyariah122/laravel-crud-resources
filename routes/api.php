<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1/bookstore')->group(function(){
    Route::get('/books', [BookController::class, 'allbooks']);
    Route::get('/book/{id}', [BookController::class, 'book']);
    Route::get('/book-filter/{keyword}', [BookController::class, 'book']);
});