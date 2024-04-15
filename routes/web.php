<?php

use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Middleware\EnsureAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    
    //Route::get('/participantes/{participante}/{estado}/edit', 'ParticipanteController@edit')->name('participantes.edit');
    Route::resource('participantes',ParticipanteController::class);
    Route::resource('participantes', ParticipanteController::class)->only(['index'])->middleware(EnsureAdmin::class);
    //Route::get('participantes', 'ParticipanteController@edit');
    route::get('admin/dashboard',[HomeController::class,'index']);
    Route::get('/send-email', [MailController::class, 'enviarCorreo']);
});

