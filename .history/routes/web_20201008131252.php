<?php


use App\Http\Livewire\Ecoles;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcoleController;
use App\Http\Controllers\InscriptionController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('ecole', Ecoles::class);

Route::get('ecole-index', [EcoleController::class, 'index'])->name('ecoles.index');
Route::post('/inscription', [InscriptionController::class, 'inscrire'])->name('inscription');
Route::post('registerparents', [InscriptionController::class, 'registerparents'])->name('registerParents');
Route::get('/students-list', [InscriptionController::class, 'listStudent'])->name('students-list');
