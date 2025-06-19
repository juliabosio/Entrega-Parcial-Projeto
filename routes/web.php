<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EstabelecimentoController;
use App\Http\Controllers\CarteiraController;
use App\Http\Controllers\PagamentoController;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('categorias', 'categorias')
    ->middleware(['auth', 'verified'])
    ->name('categoria');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::resource('categorias',CategoriaController::class);

Route::resource('estabelecimentos',EstabelecimentoController::class);

Route::resource('carteiras',CarteiraController::class);

Route::resource('pagamentos',PagamentoController::class);




require __DIR__.'/auth.php';
