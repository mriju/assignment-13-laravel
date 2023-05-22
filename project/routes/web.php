<?php
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/hello',[DemoController::class, 'DemoAction']);
Route::get('/hello',[DemoController::class, 'DemoAction2']);
Route::get('/hello',[DemoController::class, 'DemoAction3']);
Route::get('/hello',[DemoController::class, 'uploadAvatar']);
Route::get('/hello',[DemoController::class, 'cokieControllerMethod']);
Route::post('/submit', [DemoController::class, 'test']);
