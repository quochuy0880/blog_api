<?php

//use Illuminate\Support\Facades\Route;

Route::get('dashboard','DashboardController@index');
Route::get('create-category','CategoryController@create');
Route::post('post-category-form','CategoryController@store');
Route::get('all-category','CategoryController@index');
Route::get('edit-category/{id}','CategoryController@edit');
Route::post('update-category/{id}','CategoryController@update');
Route::get('delete-category/{id}','CategoryController@destroy');
Route::get('get-blog-post-form','BlogPostController@create');
Route::post('store-blog-post','BlogPostController@store');
Route::get('all-blog-posts','BlogPostController@index');
Route::get('edit-blog-post/{id}','BlogPostController@edit');
Route::post('update-blog-post/{id}','BlogPostController@update');
Route::get('delete-blog-post/{id}','BlogPostController@destroy');
