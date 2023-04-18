<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MensagemTesteMail;
use App\Controller\VisitaController;

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
Route::get('/', [App\Http\Controllers\Controller::class, 'index'])
    ->name('home');

Route::get('/home', [App\Http\Controllers\Controller::class, 'index'])
    ->name('home');

Route::get('/sobre', [App\Http\Controllers\Controller::class, 'sobre'])
    ->name('sobre');

Route::get('/acervos', [App\Http\Controllers\Controller::class, 'acervos'])
    ->name('acervos');

Route::get('/tematica', [App\Http\Controllers\Controller::class, 'tematica'])
    ->name('tematica');

Route::get('/revista', [App\Http\Controllers\Controller::class, 'revista'])
    ->name('revista');


Route::get('/servicos', [App\Http\Controllers\Controller::class, 'servicos'])
    ->name('servicos');


Auth::routes(['verify' => true]);

/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('home')
->middleware('verified');
*/

Route::get('tarefa/exportacao/{extensao}', 'App\Http\Controllers\TarefaController@exportacao')
    ->name('tarefa.exportacao');

Route::get('tarefa/exportar', 'App\Http\Controllers\TarefaController@exportar')
    ->name('tarefa.exportar');

Route::resource('tarefa', 'App\Http\Controllers\TarefaController')
    ->middleware('verified');

Route::resource('visita', 'App\Http\Controllers\VisitaController')
    ->middleware('verified');


Route::get('consult/{id}', 'App\Http\Controllers\VisitaController@consultById')
    ->name('consultById')
    ->middleware('verified');

Route::get('cancel/{id}', 'App\Http\Controllers\VisitaController@cancelById')
    ->name('cancelById')
    ->middleware('verified');

Route::post('filtervisit', 'App\Http\Controllers\VisitaController@filterVisit')
    ->name('filterVisit')
    ->middleware('verified');

Route::get('showFile/{id}', 'App\Http\Controllers\VisitaController@showFile')
    ->name('showFile')
    ->middleware('verified');

Route::get('/mensagem-teste', function () {
    return new MensagemTesteMail();
    //Mail::to('atendimento@jorgesantana.net.br')->send(new MensagemTesteMail());
    //return 'E-mail enviado com sucesso!';
});