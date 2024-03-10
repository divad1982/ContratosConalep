<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Auth\AuthenticatedSessionKeycloakController;
use App\Http\Controllers\CatalogoEstadosController;
use App\Http\Controllers\CatalogoTipoProveedoresController;
use App\Http\Controllers\ProveedoresController;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::get('login-keycloak', [AuthenticatedSessionKeycloakController::class, 'redirectToProvider'])
        ->name('login.keycloak'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('login-keycloak', [AuthenticatedSessionKeycloakController::class, 'redirectToProvider'])
    ->name('login.keycloak');
Route::get('callback', [AuthenticatedSessionKeycloakController::class, 'handleProviderCallback']);
Route::get('logout-keycloak', [AuthenticatedSessionKeycloakController::class, 'destroy'])
        ->name('logout.keycloak');


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('estados', CatalogoEstadosController::class);
    Route::resource('tiposproveedor', CatalogoTipoProveedoresController::class);
    Route::resource('tiposidentificacion', CatalogoTipoProveedoresController::class);
    Route::resource('proveedor', ProveedoresController::class);
});

require __DIR__.'/auth.php';
