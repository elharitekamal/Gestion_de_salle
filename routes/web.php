<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MealsController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\StripeController;




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
Route::get('/', [PagesController::class, 'home']);
Route::get('register', [PagesController::class, 'register']);
Route::get('login', [PagesController::class, 'login'])->name('login');
Route::get('about', [PagesController::class, 'about']);
Route::get('meals', [PagesController::class, 'meals']);
Route::get('offers', [PagesController::class, 'offers']);
Route::post('signup', [UserController::class, 'signup']);
Route::post('signin', [UserController::class, 'signin']);
Route::get('logout', [UserController::class, 'logout']);
Route::get('card', [PagesController::class, 'card'])->middleware(['auth', 'auth:web']);
Route::get('profil', [PagesController::class, 'profil'])->middleware(['auth', 'auth:web']);
Route::post('addcard/{id}', [CardController::class, 'addcard'])->middleware(['auth', 'auth:web']);
Route::get('deletecard/{id}', [CardController::class, 'deletecard'])->middleware(['auth', 'auth:web']);
Route::get('home', [PagesController::class, 'home']);




Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dash', [PagesController::class, 'dash']);
    Route::get('editmeal/{id}', [PagesController::class, 'editmeal']);
    Route::get('editoffer/{id}', [PagesController::class, 'editoffer']);
    Route::post('addmeal', [MealsController::class, 'addmeal']);
    Route::post('addcatmeal', [MealsController::class, 'addcatmeal']);
    Route::post('addoffer', [OffersController::class, 'addoffer']);
    Route::post('addcatoffer', [OffersController::class, 'addcatoffer']);
    Route::GET('deletecatmeal/{id}', [MealsController::class, 'deletecatmeal']);
    Route::GET('deletecatoffer/{id}', [OffersController::class, 'deletecatoffer']);
    Route::GET('deleteoffer/{id}', [OffersController::class, 'deleteoffer']);
    Route::GET('deletemeal/{id}', [MealsController::class, 'deletemeal']);
    Route::post('updatemeal/{id}', [MealsController::class, 'updatemeal']);
    Route::post('updateoffer/{id}', [OffersController::class, 'updateoffer']);
    Route::GET('deleteorder/{id}', [MealsController::class, 'deleteorder']);
    Route::get('orders', [PagesController::class, 'orders']);
    Route::get('abonnement', [PagesController::class, 'abonnement']);


});



Route::get('checkout', 'App\Http\Controllers\StripeController@checkout')->name('checkout')->middleware(['auth', 'auth:web']);
Route::post('session/{id}', 'App\Http\Controllers\StripeController@session')->name('session')->middleware(['auth', 'auth:web']);
Route::get('success', 'App\Http\Controllers\StripeController@success')->name('success')->middleware(['auth', 'auth:web']);
Route::POST('payforoffer/{id}', [StripeController::class, 'payforoffer'])->middleware(['auth', 'auth:web']);
Route::GET('offer_failed', [StripeController::class, 'offer_failed'])->name('offer_failed')->middleware(['auth', 'auth:web']);
Route::GET('offer_success/{id}', [StripeController::class, 'offer_success'])->name('offer_success')->middleware(['auth', 'auth:web']);