<?php

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => false, // disable user rego
    'reset' => true,
    'verify' => false,
]);

Route::get('/ping', function () {
    // Maybe return a code other than 200 for maintenance mode
    return response()->json(['message' => 'pong'])->setStatusCode(200);
});

Route::get('/', [HomeController::class, 'index'])->name('home');