<?php
use App\Http\Controllers\BikeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PrimoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TallerController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\CuestionarioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClienteController;

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

Route::get('/primo/{numero}', [TallerController::class, 'esPrimo'])->name('curso.esPrimo');

Route::get('/tallerprimo', [TallerController::class, 'create']);
Route::post('/tallerprimo', [TallerController::class, 'store'])->name('taller.store');

Route::get('/talleramigo', [TallerController::class, 'createForm']);
Route::post('/talleramigo', [TallerController::class, 'storeAmigos'])->name('taller.store-amigos');

Route::get('/calculo-notas', [TallerController::class, 'createNotas']);
Route::post('/calculo-notas', [TallerController::class, 'storeNotas'])->name('taller.store-notas');

Route::get('/calcular-cuadratica', [TallerController::class, 'createCuadratica']);
Route::post('/calcular-cuadratica', [TallerController::class, 'storeCuadratica'])->name('cuadratica.store');

Route::get('/bike', [BikeController::class, 'formularioBike']);
Route::post('/bike', [BikeController::class, 'bikeStore'])->name('bike.store');

Route::get('/car', [CarController::class, 'formularioCar']);
Route::post('/car', [CarController::class, 'carStore'])->name('car.store');

Route::get('/producto', [ProductController::class, 'formularioProducto']);
Route::post('/producto', [ProductController::class, 'productStore'])->name('product.store');

Route::get('/primo', [PrimoController::class, 'primoCreate']);
Route::post('/primo', [PrimoController::class, 'primoStore'])->name('calcular.primo');

Route::get('/cursos/create',[CursosController::class,'create']);
Route::post('/cursos/store', [CursosController::class,'store'])->name('curso.store');
Route::get('/cursos/listar',[CursosController::class,'index'])->name('curso.index');

//formulario en casa

Route::get('/formularios/create',[ClienteController::class,'create']);
Route::post('/formularios/store', [ClienteController::class,'store'])->name('formulario.store');
Route::get('/formularios/view',[ClienteController::class,'index'])->name('formulario.index');

Route::delete('cursos/{curso}',[CursosController::class,'destroy'])->name('curso.destroy');
Route::get('cursos/{curso}',[CursosController::class,'show'])->name('curso.show');
Route::put('cursos/{curso}',[CursosController::class,'update'])->name('curso.update');
Route::get('cursos/{curso}/editar',[CursosController::class,'edit'])->name('curso.edit');

Route::get('profile/create',[ProfileController::class,'create']);
Route::post('profile/store', [ProfileController::class,'store'])->name('profile.store');