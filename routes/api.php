<?php

use App\Http\Controllers\api\MessageController;
use App\Http\Controllers\api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/users/me', [UserController::class, 'me'])->name('user.me');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('user.show');
    Route::get('/messages/{user}', [MessageController::class, 'lisMessages'])->name('message.list-message');
    Route::post('/messages/store', [MessageController::class, 'store'])->name('message.store');
});
