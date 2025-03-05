<?php

use Illuminate\Support\Facades\Route;
use TronderData\Ocab\Http\Controllers\OcabController;

Route::middleware(['web', 'auth'])->group(function () {

    // --------------------------------------------------------------------------------------------------
    // Ocab routes
    // --------------------------------------------------------------------------------------------------

    Route::get('ocab/', [OcabController::class, 'index'])
        ->name('ocab.index')
        ->middleware('can:ocab.view');

    });