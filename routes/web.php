<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
use App\Models\ProjectHistory;

// Route::get('/', function () {
//     return view('portofolio');
// });
Route::get('/', [ProjectController::class, 'portfolio'])->name('portfolio');



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [ProjectController::class, 'index'])->name('dashboard');

    Route::get('/history', function () {
        $histories = ProjectHistory::latest()->paginate(15);
        return view('projects.history', compact('histories'));
    })->name('projects.history');

    Route::get('/trash', [ProjectController::class, 'trash'])->name('projects.trash');

    Route::post('/projects/{id}/restore', [ProjectController::class, 'restore'])->name('projects.restore');

    Route::delete('/projects/{id}/force-delete', [ProjectController::class, 'forceDelete'])->name('projects.forceDelete');

    Route::delete('/projects/{project}/screenshot', [ProjectController::class, 'deleteScreenshot'])->name('projects.deleteScreenshot');

    Route::resource('projects', ProjectController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/project', [projectController::class, 'index']);
require __DIR__ . '/auth.php';
