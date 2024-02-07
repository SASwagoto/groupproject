<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LawerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/lawyer_profile', [HomeController::class, 'lawyer_profile'])->name('lawyer_profile');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/addcategory', [CategoryController::class, 'addcategory'])->name('admin.addcategory');
    Route::post('/category/create', [CategoryController::class, 'store'])->name('store.addcategory');

    
});

Route::get('/addlawer', [LawerController::class, 'addlawer'])->name('addlawer');
Route::post('/addlawer/create', [LawerController::class, 'store'])->name('store.addlawer');

require __DIR__.'/auth.php';
