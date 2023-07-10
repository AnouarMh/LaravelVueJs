<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/admins', [AdminController::class, 'index'])->name('admin.index');

Route::get('/admins/create', [AdminController::class, 'create'])->name('admin.create');

Route::post('/admins/store', [AdminController::class, 'store'])->name('admin.store');

Route::get('/admins/{id}', [AdminController::class, 'show'])->name('admin.show');

Route::get('/admins/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');

Route::put('/admins/{id}', [AdminController::class, 'update'])->name('admin.update');

Route::delete('/admins/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

Route::post('admins/signin', [AdminController::class, 'signIn']);
