<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlunoController;

Route::get("/aluno", [AlunoController::class, "index"]);
Route::Post("/aluno", [AlunoController::class, "salvar"]);
Route::Get("/aluno/excluir/{id}",[AlunoController::class,"excluir"]);
Route::Get("/aluno/editar/{id}", [AlunoController::class, "editar"]);

Route::get('/', function () {
    return view('welcome');
});
