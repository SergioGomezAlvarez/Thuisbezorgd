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
Route::get('/admin-panel', [MenuItemController::class, 'showAdminPanel'])->middleware(['auth', 'verified'])->name('admin.panel');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/assign-admin', [ProfileController::class, 'assignAdminToUserOne']);
Route::get('/admin-panel', function () {
    return view('admin-panel');
})->name('admin.panel');
Route::delete('/menu/{menuItem}', [MenuItemController::class, 'destroy'])->name('menu.delete');
Route::get('/menu/edit/{menuItem}', [MenuItemController::class, 'edit'])->name('menu.edit');
Route::get('/menu/create', [MenuItemController::class, 'create'])->name('menu.create');
Route::post('/menu', [MenuItemController::class, 'store'])->name('menu.store');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


require __DIR__.'/auth.php';
