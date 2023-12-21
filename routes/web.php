<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;



Route::get('/', [WebController::class,'index']);

Route::get('/login', [WebController::class,'loginPage']);
Route::post('/login', [WebController::class,'login']);
Route::get('/logout', [WebController::class,'logout']);

Route::get('/signup', [WebController::class,'signupPage']);
Route::post('/signup', [WebController::class,'signup']);

Route::get('/home', [WebController::class,'home'])->middleware('security');
Route::get('/detail/{id}', [WebController::class,'detailPage'])->middleware('security');
Route::get('/category/{id}', [WebController::class,'categoryPage'])->middleware('security');

Route::get('/cart',[WebController::class,'cartPage'])->middleware('memberonly');
Route::get('/addToCart/{id}',[WebController::class,'addToCart'])->middleware('memberonly');
Route::delete('/deleteProduct/{id}',[WebController::class,'deleteProduct'])->middleware('adminonly');

Route::get('/editCartPage/{id}',[WebController::class,'editCartPage'])->middleware('memberonly');
Route::post('/updateCart/{id}',[WebController::class,'editCart'])->middleware('memberonly');

Route::get('/deleteCart/{id}', [WebController::class,'deleteCart'])->middleware('memberonly');

Route::post('/checkout', [WebController::class,'checkout'])->middleware('memberonly');

Route::get('/history', [WebController::class,'historyPage'])->middleware('memberonly');

Route::get('/profile', [WebController::class,'profilePage'])->middleware('security');

Route::get('/editProfilePage', [WebController::class,'editProfilePage'])->middleware('security');
Route::post('/editProfile', [WebController::class,'editProfile'])->middleware('memberonly');

Route::get('/editPasswordPage', [WebController::class,'editPasswordPage'])->middleware('security');
Route::post('/editPassword', [WebController::class,'editPassword'])->middleware('security');

Route::get('/additem', [WebController::class,'addItemPage'])->middleware('adminonly');
Route::post('/addItem', [WebController::class,'addItem'])->middleware('adminonly');

Route::get('/search', [WebController::class,'searchPage'])->middleware('security');
