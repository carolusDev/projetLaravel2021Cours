<?php

use App\Http\Controllers\{BoardController, BoardUserController, TaskController};
use App\Models\Board;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::delete('boards/{board}', [BoardController::class, 'destroy'])
    ->name('boards.destroy');

Route::get('boards/{board}', [BoardController::class, 'show'])
    ->name('boards.show');
Route::get('boards/{board}/edit', [BoardController::class, 'edit'])
    ->name('boards.edit');
Route::get('boards/create', [BoardController::class, 'create'])
    ->name('boards.create');

Route::post('boards', [BoardController::class, 'store'])
    ->name('boards.store');
Route::post('boards/{board}/users', [BoardUserController::class, 'store'])
    ->middleware('auth')
    ->name('boards.users.store');

Route::put('boards/{board}', [BoardController::class, 'update'])
    ->name('boards.update');

Route::resource("/boards/{board}/tasks", TaskController::class)
    ->middleware('auth');
