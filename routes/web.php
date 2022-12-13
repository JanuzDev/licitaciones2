<?php

use App\Http\Controllers\ConfigurationController;

use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SendController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [FrontController::class, 'index']);
Route::get('/convocatorias/personal', [FrontController::class, 'personal']);
Route::get('/convocatorias/consultorias', [FrontController::class, 'consultorias']);
Route::get('/perfil/profesional', [FrontController::class, 'profile']);
Route::get('/perfil/proveedor', [FrontController::class, 'supplier']);
Route::get('/crear-cuenta',[FrontController::class, 'register']);
Route::get('/iniciar-sesion',[FrontController::class, 'login']);
Route::get('/recuperar-contraseña',[FrontController::class, 'password_reset']);
Route::get('/convocatorias/detalles',[FrontController::class, 'detail']);


Route::get('/auth', [SendController::class, 'auth_email'] );
Route::get('/reset', [SendController::class, 'reset_email'] );
Route::get('/update', [SendController::class, 'update_email'] );

/* Route::get('/test', [SendController::class, 'test_email'] ); */


Route::resource('/configurations',ConfigurationController::class);

Route::group(['prefix' => 'auth-user'], function () {
    Route::get('/', function () {
        return redirect()->route('login');
    });
    Auth::routes([
        'register' => false,
        'verify' => true,
    ]);
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::group(['prefix' => 'admin', 'middleware' => ['role:admin|admin_ea']], function () {
        Route::name('admin.')->group(function () {
            Route::get('/inicio', [HomeController::class, 'index'])->name('inicio');
        });
    });

    Route::group(['prefix' => 'ajax'], function () {
    });
});
