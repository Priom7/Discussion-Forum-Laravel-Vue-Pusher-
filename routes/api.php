<?php

use App\Http\Controllers\CategoryController;
use App\Model\Category;


Route::apiResource('/post', 'PostController');
Route::apiResource('/category', 'CategoryController');
Route::apiResource('/post/{post}/reply', 'ReplyController');
Route::post('/{reply}/like', 'LikeController@likeIt');
Route::delete('/{reply}/like', 'LikeController@unlikeIt');
