<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\Api\PesquisaController;


Route::get('/olamundo', function(){
    return ['Hello word!!'=>true];
});

Route::get('/401', [AuthController::class, 'unauthorized'])->name('login');

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout']);
Route::post('/auth/refresh', [AuthController::class, 'refresh']);
Route::post('/user', [AuthController::class, 'create']);
Route::get('/user', [UserController::class, 'read']);

Route::group(['as' => 'api.'], function() {
    Orion::resource('pesquisa', PesquisaController::class);
});