<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PartieController;

Route::get('/', [PartieController::class, 'index'])
    ->name('parties.index');
