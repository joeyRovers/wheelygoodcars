<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
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
    return view('cars.index');
})->name('index');



Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars/{car}', [CarController::class, 'show'])->name('cars.show');

Route::middleware(['auth'])->group(function () {
    Route::get('/cars/create/step1', [CarController::class, 'createStep1'])->name('cars.create.step1');
    Route::post('/cars/create/step1', [CarController::class, 'postCreateStep1'])->name('cars.create.step1.post');

    Route::get('/cars/create/step2', [CarController::class, 'createStep2'])->name('cars.create.step2');
    Route::post('/cars/create/step2', [CarController::class, 'postCreateStep2'])->name('cars.create.step2.post');

    Route::get('/cars/create/step3', [CarController::class, 'createStep3'])->name('cars.create.step3');
    Route::post('/cars/create/step3', [CarController::class, 'postCreateStep3'])->name('cars.create.step3.post');
});

require __DIR__.'/auth.php';



