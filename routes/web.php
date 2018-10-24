<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
    Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10']], function () {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::resource('users', 'UserController');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{id}/{nom}','PageController@user')
->where (['id'=>'[0-9]+','nom' =>'[a-zA-Z]+']);//permet le contrôle des paramètre

Route::get('articles', 'ArticleController@index')->name('articles.index'); 
Route::get('articles/create', 'ArticleController@create')->name('articles.create'); //creation formulaire
Route::post('articles/store', 'ArticleController@store')->name('articles.store');//sauvegarde

Route::get('articles/update', 'ArticleController@update')->name('articles.update') ;
Route::get('articles/destory', 'ArticleController@destory')->name('articles.destory');