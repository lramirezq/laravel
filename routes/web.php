<?php

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

Route::middleware(['splade'])->group(function () {
  //  Route::get('/', fn () => view('welcome'))->name('home');

    Route::get('/', function () {
        return redirect()->route('login');
    });

    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();
});

Route::middleware(['auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/documents', [App\Http\Controllers\Admin\DocumentController::class, 'index'])->name('documents.index');
    Route::post('admin/documents/buscar', [App\Http\Controllers\Admin\DocumentController::class, 'buscar'])->name('documents.buscar');
    Route::get('admin/documents/api', [App\Http\Controllers\Admin\DocumentController::class, 'api'])->name('documents.api');
    Route::get('admin/documents/create', [App\Http\Controllers\Admin\DocumentController::class, 'create'])->name('documents.create');
    Route::post('admin/documents', [App\Http\Controllers\Admin\DocumentController::class, 'store'])->name('documents.store');
    Route::get('admin/documents/{model}', [App\Http\Controllers\Admin\DocumentController::class, 'show'])->name('documents.show');
    Route::get('admin/documents/{model}/edit', [App\Http\Controllers\Admin\DocumentController::class, 'edit'])->name('documents.edit');
    Route::post('admin/documents/{model}', [App\Http\Controllers\Admin\DocumentController::class, 'update'])->name('documents.update');
    Route::delete('admin/documents/{model}', [App\Http\Controllers\Admin\DocumentController::class, 'destroy'])->name('documents.destroy');
});

Route::middleware(['auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/mantenedor', [App\Http\Controllers\Admin\MantenedorController::class, 'index'])->name('mantenedor.index');
    Route::get('admin/mantenedor/api', [App\Http\Controllers\Admin\MantenedorController::class, 'api'])->name('mantenedor.api');
    Route::get('admin/mantenedor/create', [App\Http\Controllers\Admin\MantenedorController::class, 'create'])->name('mantenedor.create');
    Route::post('admin/mantenedor', [App\Http\Controllers\Admin\MantenedorController::class, 'store'])->name('mantenedor.store');
    Route::get('admin/mantenedor/{model}', [App\Http\Controllers\Admin\MantenedorController::class, 'show'])->name('mantenedor.show');
    Route::get('admin/mantenedor/{model}/edit', [App\Http\Controllers\Admin\MantenedorController::class, 'edit'])->name('mantenedor.edit');
    Route::post('admin/mantenedor/{model}', [App\Http\Controllers\Admin\MantenedorController::class, 'update'])->name('mantenedor.update');
    Route::delete('admin/mantenedor/{model}', [App\Http\Controllers\Admin\MantenedorController::class, 'destroy'])->name('mantenedor.destroy');
    
});

Route::get('/mostrar-files/{nombreArchivo}', function ($nombreArchivo) {
    $rutaCompletaArchivo = storage_path('app/archivos/' . $nombreArchivo);

    if (Storage::exists('archivos/' . $nombreArchivo)) {
        $contenidoArchivo = Storage::get('archivos/' . $nombreArchivo);

        // Determinar el tipo de contenido basado en la extensión del archivo
        $tipoContenido = 'application/octet-stream';
        if (pathinfo($nombreArchivo, PATHINFO_EXTENSION) == 'pdf') {
            $tipoContenido = 'application/pdf';
        } elseif (pathinfo($nombreArchivo, PATHINFO_EXTENSION) == 'xml') {
            $tipoContenido = 'application/xml';
        }

        return Response::make($contenidoArchivo, 200, [
            'Content-Type' => $tipoContenido,
            'Content-Disposition' => 'inline; filename="' . $nombreArchivo . '"'
        ]);
    } else {
        abort(404);
    }
})->name('mostrar-files');