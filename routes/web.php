<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cadastro-perfil', [App\Http\Controllers\ProfileSelectionController::class, 'getCadastroPerfil'])->name('profile-selection');
Route::get('/cadastro-candidato', [App\Http\Controllers\FormsWorkerController::class, 'getCadastroCandidato'])->name('register-worker');
Route::get('/cadastro-candidato-informacoes-adicionais', [App\Http\Controllers\WorkerAddInfosController::class, 'getInformacoesAdicionais'])->name('register-worker-add-info');
Route::get('/cadastro-candidato-upload-curriculo', [App\Http\Controllers\WorkerUploadCurriculumController::class, 'getCurriculum'])->name('register-worker-upload-cv');