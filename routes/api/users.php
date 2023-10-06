
<?php 
//this code can do all 5 routes below
// Route::apiResource('users', \App\Http\Controllers\UserController::class);

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth', 'prefix' => 'v1'], function() {
    Route::get('/users', [UserController::class, 'index']);

    Route::get('/users/{id}', [UserController::class, 'show']);
    
    Route::post('/users', [UserController::class, 'store']);
    
    Route::patch('/users/{user}', [UserController::class, 'update']);
    
    Route::delete('/users/{user}', [UserController::class, 'destroy']);
});

// Route::middleware('auth')
//     ->prefix('v1')
//     // ->namespace("\App\Http\Controllers")shorten the name
//     ->group(function() {
//     Route::get('/users', [\App\Http\Controllers\UserController::class, 'index']);

//     Route::get('/users/{id}', [\App\Http\Controllers\UserController::class, 'show']);
    
//     Route::post('/users', [\App\Http\Controllers\UserController::class, 'store']);
    
//     Route::patch('/users/{user}', [\App\Http\Controllers\UserController::class, 'update']);
    
//     Route::delete('/users/{user}', [\App\Http\Controllers\UserController::class, 'destroy']);
// });
