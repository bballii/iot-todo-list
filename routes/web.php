<?php

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
Route::prefix('todo')->group(function ($route) {
    $route->post('/create', [TodoController::class, 'createTask'])->name('tasks.store');
    $route->delete('/delete/{id}', [TodoController::class, 'deleteTask']);
    $route->put('/done/{id}', [TodoController::class, 'markDone']);
});


Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);