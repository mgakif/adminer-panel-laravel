<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'is_admin'])->prefix('adminer')->group(function () {
    Route::get('/', fn () => view('adminer-panel::index'))->name('adminer.index');
});