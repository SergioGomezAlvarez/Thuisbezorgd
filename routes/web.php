<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuItemController;
use Spatie\Permission\Middlewares\RoleMiddleware;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [MenuItemController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/assign-admin', [ProfileController::class, 'assignAdminToUserOne']);
Route::middleware(['auth', Spatie\Permission\Middlewares\RoleMiddleware::class.':admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin_panel');
    })->name('admin.panel');
});




require __DIR__.'/auth.php';
