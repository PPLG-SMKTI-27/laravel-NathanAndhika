<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('portofolio');
});


// Route::get('/project', function () {
//     return view('project');
// });

Route::get('/project', [projectController::class, 'index']);
Route::get('/login', [AuthController::class, 'Showlogin']);
Route::post('/login', [AuthController::class, 'Storelogin']);
