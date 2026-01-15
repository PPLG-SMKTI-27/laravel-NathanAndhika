<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectController;

Route::get('/', function () {
    return view('portofolio');
});


// Route::get('/project', function () {
//     return view('project');
// });

Route::get('/project', [projectController::class, 'index']);
