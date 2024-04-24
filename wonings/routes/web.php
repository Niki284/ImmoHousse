<?php

use App\Http\Controllers\BouwtypeController;
use App\Http\Controllers\IndelingController;
use App\Http\Controllers\NieuwTypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TechnischController;
use App\Http\Controllers\VoorziningenController;
use App\Http\Controllers\WoningController;
use App\Http\Controllers\WoningTypeController;
use App\Models\Bouwtype;
use App\Models\NieuwType;
use App\Models\Woning;
use App\Models\WoningType;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome' , ['woningHuis' => Woning::all() , 'woning_types'=>WoningType::all(), 'bouwtypes'=>Bouwtype::all(), 'nieuwTypes'=>NieuwType::all()]);
});


Route::get('/dashboard', function () {
    return view('dashboard' , ['woningHuis' => Woning::all() , 'woning_types'=>WoningType::all(), 'bouwtypes'=>Bouwtype::all(), 'nieuwTypes'=>NieuwType::all()]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('/dashboard/woning', WoningController::class)->only(['index', 'show' , 'create', 'store']);
Route::post('/dashboard/woning/store', [WoningController::class, 'store'])->Middleware('auth');
Route::get('/dashboard/woning/edit/{woningId}', [WoningController::class, 'edit'])->middleware('auth');

Route::put('/dashboard/woning/update/{woningId}', [WoningController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/{woningId}', [WoningController::class, 'destroy'])->middleware('auth')->name('woning.destroy');
// Route::delete('/dashboard/woning/{woningId}', [WoningController::class, 'destroy'])->middleware('auth')->name('woning.destroy');

/* woningType */
Route::resource('/dashboard/woningType', WoningTypeController::class)->only(['index', 'show', 'create', 'store']);
Route::post('/dashboard/woningType/store', [WoningTypeController::class, 'store'])->Middleware('auth');
Route::put('/dashboard/woningType/update/{woningType}', [WoningTypeController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/woningType/{typeId}', [WoningTypeController::class, 'destroy'])->middleware('auth');



Route::resource('/dashboard/bouwtype', BouwtypeController::class)->only(['index', 'show', 'create', 'store']);
Route::post('/dashboard/bouwtype/store', [BouwtypeController::class, 'store'])->Middleware('auth');
Route::put('/dashboard/bouwtype/update/{bouwtype}', [BouwtypeController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/bouwtype/{typeId}', [BouwtypeController::class, 'destroy'])->middleware('auth');

Route::resource('/dashboard/nieuwtype', NieuwTypeController::class)->only(['index', 'show', 'create', 'store']);
Route::post('/dashboard/nieuwtype/store', [NieuwTypeController::class, 'store'])->Middleware('auth');
Route::put('/dashboard/nieuwtype/update/{nieuwType}', [NieuwTypeController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/nieuwtype/{typeId}', [NieuwTypeController::class, 'destroy'])->middleware('auth');

/* Guest routes */
Route::resource('/woning', WoningController::class)->only(['index', 'show']);

require __DIR__.'/auth.php';


// Route::get('/woning/{id}/addvoorziningen', [VoorziningenController::class, 'create'])->middleware('auth');
// Route::get('/woning/{id}/addtechnisch', [TechnischController::class, 'create'])->middleware('auth');
// Route::get('/woning/{id}/edittechnisch', [TechnischController::class, 'edit'])->middleware('auth');
// Route::put('/technisch/update/{id}', [TechnischController::class, 'update'])->middleware('auth')->name('technisch.update');

// Route::get('/woning/{id}/addindeling' , [IndelingController::class, 'create'])->middleware('auth');
// Route::get('/woning/{id}/editindeling', [IndelingController::class, 'edit'])->middleware('auth');
// Route::put('/indeling/update/{id}', [IndelingController::class, 'update'])->middleware('auth')->name('indeling.update');

// Route::resource('voorziningen', VoorziningenController::class)->only(['index', 'show', 'create', 'store']);

// Route::post('voorziningen/store', [VoorziningenController::class, 'store'])->Middleware('auth');
// Route::put('/voorziningen/update/{voorzining}', [VoorziningenController::class, 'update'])->middleware('auth');
// Route::delete('/voorziningen/{voorziningId}', [VoorziningenController::class, 'destroy'])->middleware('auth');

// Route::resource('/bouwtype', BouwtypeController::class)->only(['index', 'show', 'create', 'store'])->names('bouwtype');
// Route::post('bouwtype/store', [BouwtypeController::class, 'store'])->Middleware('auth');
// Route::put('/bouwtype/update/{bouwtype}', [BouwtypeController::class, 'update'])->middleware('auth');
// Route::delete('/bouwtype/{bouwtypeId}', [BouwtypeController::class, 'destroy'])->middleware('auth');


// Route::resource('/technisch', TechnischController::class)->only(['index', 'show', 'create', 'store'])->names('technisch');
// Route::delete('/technisch/{technischId}', [TechnischController::class, 'destroy'])->middleware('auth');

// Route::resource('/indeling', IndelingController::class)->only(['index', 'show', 'create', 'store'])->names('indeling');