<?php


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return 'tenant';
});

Route::get('/lista-tenants',[App\Http\Controllers\Tenant\Empresa::class, 'list'] )->name('lista-empresas');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/cadastro-tenant-empresa',[App\Http\Controllers\Tenant\Empresa::class, 'store'] )->name('cadastro-tenant-empresa');



