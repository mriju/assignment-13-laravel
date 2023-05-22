<?php
use App\Http\Controllers\DemoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello/{page}',[DemoController::class, 'DemoAction']);


