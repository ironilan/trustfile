<?php

use App\Http\Controllers\admin\DocumentoController;
use App\Http\Controllers\AuthOptController;
use App\Http\Controllers\DescargaController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
});

Route::group([

    'middleware' => 'auth',
    'prefix' => '/dashboard'

], function ($router) {

    Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard.index');
    /**
     * Admin
     */

    Route::group([
        'prefix' => '/admin'

    ], function ($router) {
        Route::group([
            'prefix' => '/users'

        ], function ($router) {
            Route::get('/', [App\Http\Controllers\admin\UserController::class, 'index'])->name('admin.users.index');
            Route::get('/create', [App\Http\Controllers\admin\UserController::class, 'create'])->name('admin.users.create');
            Route::post('/', [App\Http\Controllers\admin\UserController::class, 'store'])->name('admin.users.store');
            Route::put('/edit', [App\Http\Controllers\admin\UserController::class, 'update'])->name('admin.users.update');
        });

        Route::group([
            'prefix' => '/roles'

        ], function ($router) {
            Route::get('/', [App\Http\Controllers\admin\RolController::class, 'index'])->name('admin.rol.index');
            Route::post('/', [App\Http\Controllers\admin\RolController::class, 'store'])->name('admin.rol.store');
            Route::put('/update', [App\Http\Controllers\admin\RolController::class, 'update'])->name('admin.rol.update');
        });
    });


    Route::group([
        'prefix' => '/admin'

    ], function ($router) {

        Route::group([
            'prefix' => '/documentos'

        ], function ($router) {
            Route::get('/', [DocumentoController::class, 'index'])->name('documentos.admin.index');
            Route::get('/create', [DocumentoController::class, 'create'])->name('documentos.admin.create');
            Route::get('/{documento}', [DocumentoController::class, 'show'])->name('documentos.admin.show');

            Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('documentos.admin.edit');
            Route::post('', [HomeController::class, 'crearDocumento'])->name('documentos.admin.store');
            Route::post('/fotos', [HomeController::class, 'crearDocumentoFotos'])->name('documentos.admin.store.fotos');
            Route::get('/fotos', [HomeController::class, 'listDocumentoFotos'])->name('documentos.admin.listar.fotos');
            Route::post('/generarPdf', [HomeController::class, 'generarPdf'])->name('documentos.admin.pdf.generar');
            Route::post('/enviarBlockchain', [HomeController::class, 'enviarBlockchain'])->name('documentos.admin.enviarBlockchain');
        });
    });




    Route::get('/descargas', [DescargaController::class, 'listDescargas'])->name('descargas.index');
    Route::get('/descargas/{id}', [DescargaController::class, 'show'])->name('descargas.show');

    Route::get('/descargas/validar', [DescargaController::class, 'validarDescargas'])->name('descargas.validar');
    Route::get('/descargas/true', [DescargaController::class, 'descargar'])->name('descargas.descargar');
});

Route::post('/auth/generarOtp', [AuthOptController::class, 'generarOtp'])->name('auth.otp.generar');
Route::post('/auth/validarOtp', [AuthOptController::class, 'validarOtp'])->name('auth.otp.validar');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
