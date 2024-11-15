<?php

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return response()->json([
        'message' => 'Welcome to the user dashboard'
    ]);
});
