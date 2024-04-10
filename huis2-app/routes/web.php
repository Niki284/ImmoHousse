<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\TechnischController;
use App\Http\Controllers\VoorziningenController;
use App\Http\Controllers\WoningController;
use App\Http\Controllers\WoningTypeController;
use App\Models\Product;
use App\Models\Woning;
use App\Models\WoningType;
use GuzzleHttp\Middleware;
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
    return view('welcome' , ['productHuis' => Product::all(), 'woningType' => WoningType::all(), 'woningHuis' => Woning::all()]
    ); 
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::resource('product', ProductController::class)->only(['index', 'show', 'create', 'store']);

// Route::post('product/store', [ProductController::class, 'store'])->Middleware('auth');
// Route::put('/product/update/{productId}', [ProductController::class, 'update'])->middleware('auth');
// Route::delete('/product/{productId}', [ProductController::class, 'destroy'])->middleware('auth');

Route::resource('woning', WoningController::class)->only(['index', 'show', 'create', 'store']);
Route::post('woning/store', [WoningController::class, 'store'])->Middleware('auth');
Route::put('/woning/update/{woningId}', [WoningController::class, 'update'])->middleware('auth');
Route::delete('/woning/{woningId}', [WoningController::class, 'destroy'])->middleware('auth');



Route::resource('/woningType', WoningTypeController::class)->only(['index', 'show', 'create', 'store']);

// // tweede optie
//  Route::resource('/woningType', WoningTypeController::class)->only(['index', 'show', 'create', 'store'])->names('woningType');

Route::post('woningType/store', [WoningTypeController::class, 'store'])->Middleware('auth');
Route::put('/woningType/update/{woningType}', [WoningTypeController::class, 'update'])->middleware('auth');
Route::delete('/woningType/{typeId}', [WoningTypeController::class, 'destroy'])->middleware('auth');

Route::resource('voorziningen', VoorziningenController::class)->only(['index', 'show', 'create', 'store']);

Route::post('voorziningen/store', [VoorziningenController::class, 'store'])->Middleware('auth');
Route::put('/voorziningen/update/{voorzining}', [VoorziningenController::class, 'update'])->middleware('auth');
Route::delete('/voorziningen/{voorziningId}', [VoorziningenController::class, 'destroy'])->middleware('auth');


Route::resource('technisch', TechnischController::class)->only(['index', 'show', 'create', 'store'])->names('technisch');
Route::put('/technisch/update/{technischId}', [TechnischController::class, 'update'])->middleware('auth');
Route::delete('/technisch/{technischId}', [TechnischController::class, 'destroy'])->middleware('auth');




// Route::get('huis', function () {
//     return view('huis');
// });

require __DIR__.'/auth.php';
