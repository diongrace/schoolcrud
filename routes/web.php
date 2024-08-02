<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CartController;

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
// //route pour suppression
// Route::get('/delete-etudiant/{id}', [EtudiantController::class, 'delete_etudiant']);

// //route pour la modification
// Route::get('/update-etudiant/{id}', [EtudiantController::class, 'update_etudiant']);
// Route::post('/update/traitement', [EtudiantController::class, 'update_etudiant_traitement']);

// //route afficher etudiant
// Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant']);

// //ajouter un etudiant
// Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant']);
// Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']);

// Route pour afficher le dashboard
Route::get('/acceuil', [ PageController::class, 'index'])->name('front.index');

Route::get('/shop', [ PageController::class, 'shop'])->name('front.shop');

Route::get('/about', [ PageController::class, 'about'])->name('front.about');
 
Route::get('/contact', [ PageController::class, 'contact'])->name('front.contact');

Route::get('/cart', [ PageController::class, 'cart'])->name('front.cart');

Route::get('/addToCart/{id}', [CartController::class, 'addToCart'])->name('add_to_cart');
Route::get('/client/login', [ ClientController::class, 'login'])->name('client.login');
Route::get('/client/register', [ ClientController::class, 'register'])->name('client.register');
Route::post('/client/register/post', [ ClientController::class, 'register_post'])->name('client.register.post');
Route::post('/client/login/post', [ ClientController::class, 'login_post'])->name('client.login.post');
Route::get('/dashboard', [ ClientController::class, 'dashboard'])->name('front.dashboard');
Route::get('/logout', [ClientController::class, 'logout'])->name('logout');
