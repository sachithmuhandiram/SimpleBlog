<?php 

Route::group(['namespace' => 'App\Modules\Auth\Controllers'], function () {
	Route::get('/', ['uses' => 'AuthController@index']);
	});
Route::auth();
?>