<?php

use App\Http\Controllers\CategoryController;
use App\Model\Category;


Route::apiResource('/post', 'PostController');
Route::apiResource('/category', 'CategoryController');
Route::apiResource('/post/{post}/reply', 'ReplyController');
Route::post('/{reply}/like', 'LikeController@likeIt');
Route::delete('/{reply}/like', 'LikeController@unlikeIt');





Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});
