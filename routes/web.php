<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('empresa','App\Http\Controllers\EmpresaController');

//Route::view('tenant-404', 'erros.404-tenant')->name('tenant.404');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cadastre-se', function () {return view('empresa.cadastro-empresa');})->name('cadastro-empresa');
Route::get('/cadastre-se/sucesso', function () {return view('empresa.cadastro-empresa-sucesso');})->name('cadastro-empresa-sucesso');

Route::get('/modal', function () {return view('components.modalAlert');})->name('cadastro-empresa-sucesso');

