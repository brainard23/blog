<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth', 'prefix' => 'v1'], function(){
    Route::get('comments',[CommentController::class, 'index']);
}); 