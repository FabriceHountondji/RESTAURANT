<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

use Gloudemans\Shoppingcart\Facades\Cart;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\VitrineController;

use App\Http\Controllers\Admin\PanierController;


use App\Http\Controllers\Admin\ActeurController;
use App\Http\Controllers\Admin\FonctionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ImageController;

use App\Http\Controllers\Admin\PaiementController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ImageassocyController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Auth\Notifications\ResetPassword;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// LOGIN ET DECONNEXION

Route::get('/login', [LoginController::class , 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [LogoutController::class,'logout'])->name('logout');


// SIGN IN

Route::get('/signin', [ClientController::class, 'signin'])->name('signin');

// ACTIONS SUR TABLEAU DE BORD

Route::resource('dashboard', DashboardController::class);

Route::resource('/', VitrineController::class);

Route::resource('/detail', VitrineController::class );
Route::get('/detail/{menu}', [VitrineController::class , 'show'])->name('show');

Route::resource('reset', ResetPasswordController::class);

Route::resource('acteurs', ActeurController::class);
Route::get('acteurs.delete.{acteur}',[ActeurController::class,'destroy'])->name('acteurs.delete');

Route::resource('users', UserController::class);
Route::get('users.delete.{user}',[UserController::class,'destroy'])->name('users.delete');

Route::resource('roles', RoleController::class);
Route::get('roles.delete.{role}',[RoleController::class,'destroy'])->name('roles.delete');

Route::resource('fonctions', FonctionController::class);
Route::get('fonctions.delete.{fonction}',[FonctionController::class,'destroy'])->name('fonctions.delete');

Route::resource('images', ImageController::class);
Route::get('images.delete.{image}',[ImageController::class,'destroy'])->name('images.delete');

Route::resource('menus', MenuController::class);
Route::get('menus.delete.{menu}',[MenuController::class,'destroy'])->name('menus.delete');

Route::resource('imageassocies', ImageassocyController::class);
Route::get('imageassocies.delete.{imageassocy}',[ImageassocyController::class,'destroy'])->name('imageassocies.delete');

Route::resource('categories', CategoryController::class);
Route::get('categories.delete.{category}',[CategoryController::class,'destroy'])->name('categories.delete');

Route::resource('clients', ClientController::class);
Route::get('clients.delete.{client}',[ClientController::class,'destroy'])->name('clients.delete');

//  Routes paniers

Route::post('',[PanierController::class,'store'])->name('panier.store');
Route::get('/panier', [PanierController::class , 'show'])->name('panier');

Route::delete('panier.{rowId}',[PanierController::class,'delete'])->name('panier.delete');

Route::get('/vide_panier',function(){
    Cart::destroy();
});

// Fin routes paniers


// Paiements

Route::get('paiement', [PaiementController::class,'index'])->name('paiement.index');

// Fin paiements
