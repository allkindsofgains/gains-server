<?php

use App\Http\Controllers\SessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/health', fn() => response()->json(['message' => 'ok']));

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::prefix('/v1')->group(function () {
        Route::prefix('/sessions')->group(function () {
            Route::get('/', [SessionController::class, 'index'])
                ->name('sessions.index');

            Route::post('/', [SessionController::class, 'store'])
                ->name('sessions.store');

            Route::get('/{session}', [SessionController::class, 'show'])
                ->name('sessions.show');

            Route::put('/{session}', [SessionController::class, 'update'])
                ->name('sessions.update');

            Route::delete('/{session}', [SessionController::class, 'destroy'])
                ->name('sessions.destroy');
        });
    });
});
