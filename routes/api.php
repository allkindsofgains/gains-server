<?php

use App\Http\Controllers\SessionController;
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

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::prefix('sessions')->group(function () {
        Route::get('/', [SessionController::class, 'index'])->name('sessions.index');
        Route::post('/', [SessionController::class, 'store'])->name('sessions.store');
        Route::get('/{session}', [SessionController::class, 'show'])->name('sessions.show');
        Route::put('/{session}', [SessionController::class, 'update'])->name('sessions.update');
        Route::delete('/{session}', [SessionController::class, 'destroy'])->name('sessions.destroy');
    });
});
