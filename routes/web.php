<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Dashboard\Calls\CallsView;
use App\Livewire\Dashboard\Home\HomeView;
use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\Departaments\DepartamentsView;

require __DIR__.'/auth.php';

Route::get('/', App\Livewire\Main\Home\HomeView::class)->name('main');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
//    Route::get('/', HomeView::class)->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/', CallsView::class)->name('dashboard');
    Route::get('/departamentos', DepartamentsView::class)->name('dashboard.departaments.view');
});


