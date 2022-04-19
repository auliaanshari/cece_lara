<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\DetailGameController;

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

Route::group(['prefix' => 'soal'], function(){
    Route::get('/', function() { return view('soal.soal'); });
    Route::post('/create', [SoalController::class, 'create']);
    Route::post('/update/{id}', [SoalController::class, 'update']);
    Route::get('/delete/{id}', [SoalController::class, 'delete']);
    Route::get('/data', [SoalController::class, 'data']);
});

Route::group(['prefix' => 'team'], function(){
    Route::get('/', function() { return view('team.team'); });
    Route::post('/create', [TeamController::class, 'create']);
    Route::post('/update/{id}', [TeamController::class, 'update']);
    Route::get('/delete/{id}', [TeamController::class, 'delete']);
    Route::get('/data', [TeamController::class, 'data']);
});

Route::group(['prefix' => 'game'], function(){
    Route::get('/', function() { return view('game.regist'); });
    Route::get('/penyisihan', function() { return view('game.penyisihan'); });
    Route::get('/semi', function() { return view('game.semi'); });
    Route::get('/final', function() { return view('game.final'); });
    Route::get('/finish', function() { return view('game.finish'); });
    Route::post('/create', [GameController::class, 'create']);
    Route::post('/update/{id}', [TeamController::class, 'update']);
    Route::get('/delete/{id}', [TeamController::class, 'delete']);
    Route::get('/data', [DetailGameController::class, 'data']);
});
