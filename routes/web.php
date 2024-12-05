<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShrineController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Редірект з головної сторінки на сторінку вибору святині
Route::redirect('/', '/ShrineChoose');
Route::get('/shrines', [ShrineController::class, 'index'])->name('shrines.index');
// Маршрут для відображення списку всіх святинь
Route::get('/ShrineChoose', [ShrineController::class, 'index'])->name('ShrineChoose');

// Динамічний маршрут для відображення конкретної святині за ID
Route::get('/Shrine/{id}', [ShrineController::class, 'show'])->name('Shrine.show');

// Single Action Controller для редіректу (приклад)
Route::get('/redirect', RedirectController::class)->name('redirectToShrineChoose');

//Route::middleware('auth')->group(function () {
  //  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
Route::middleware(['auth'])->group(function () {
    Route::get('/private-page-1', [PageController::class, 'privatePage1'])->name('private.page1');
    Route::get('/private-page-2', [PageController::class, 'privatePage2'])->name('private.page2');
});
Route::get('/dashboard', function () {
    return view('dashboard'); // Використовуйте вашу відповідну сторінку
})->name('dashboard');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');



require __DIR__.'/auth.php';
