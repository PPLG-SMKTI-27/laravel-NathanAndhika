<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectController;
use App\Models\Project;
use App\Models\ProjectHistory;

// Route::get('/', function () {
//     return view('portofolio');
// });
Route::get('/', [projectController::class, 'portfolio'])->name('portfolio');



Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [ProjectController::class, 'index'])
        ->name('dashboard');

    Route::get('/history', function () {
        $histories = ProjectHistory::latest()->paginate(15);
        return view('projects.history', compact('histories'));
    })->name('projects.history');

    Route::get('/trash', [ProjectController::class, 'trash'])
        ->name('projects.trash');

    Route::post('/projects/{id}/restore', [ProjectController::class, 'restore'])
        ->name('projects.restore');

    Route::delete('/projects/{id}/force-delete', [ProjectController::class, 'forceDelete'])
        ->name('projects.forceDelete');

    Route::resource('projects', ProjectController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/projects/{id}/restore', [ProjectController::class, 'restore'])
        ->name('projects.restore');
    Route::delete('/projects/{id}/force-delete', [ProjectController::class, 'forceDelete'])
        ->name('projects.forceDelete');
    Route::resource('projects', ProjectController::class);
});

Route::get('/project', [projectController::class, 'index']);
require __DIR__ . '/auth.php';
