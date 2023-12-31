<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperAdmin\TenantController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['SuperAdmin','auth'])->prefix('SuperAdmin')->group(function () {
    Route::get('/tenant', [TenantController::class, 'index'])->name('SuperAdmin.tenant');
    Route::get('/tenant/users/{key}', [TenantController::class, 'TenantUsers'])->name('tenant');

});

require __DIR__.'/auth.php';
