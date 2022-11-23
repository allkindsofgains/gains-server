<?php

use App\Http\Controllers\SessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// /api/health
Route::get('/health', fn() => response()->json(['message' => 'ok']));

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::prefix('/v1')->group(function () {

        // /sessions
        Route::prefix('/sessions')->group(function () {
            Route::get('/', [SessionController::class, 'index'])
                ->name('sessions.index');

            Route::post('/', [SessionController::class, 'store'])
                ->name('api.v1.sessions.store');

            Route::get('/{session}', [SessionController::class, 'show'])
                ->name('api.v1.sessions.show');

            Route::put('/{session}', [SessionController::class, 'update'])
                ->name('api.v1.sessions.update');

            Route::delete('/{session}', [SessionController::class, 'destroy'])
                ->name('api.v1.sessions.destroy');
        });

        // /auth
        Route::prefix('/auth')->group(function () {
            Route::get('/login', [SessionController::class, 'login'])
                ->name('api.v1.auth.login');

            Route::post('/register', [SessionController::class, 'register'])
                ->name('api.v1.auth.register');

            Route::get('/logout', [SessionController::class, 'logout'])
                ->name('api.v1.auth.logout');

            Route::put('/forgot-password', [SessionController::class, 'forgotPassword'])
                ->name('api.v1.auth.forgot.password');

            Route::delete('/reset-password', [SessionController::class, 'resetPassword'])
                ->name('api.v1.auth.reset.password');
        });

    });
});
