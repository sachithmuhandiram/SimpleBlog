<?php 
/*
	route.php for Authors module
*/
	Route::group(['namespace' => 'App\Modules\Authors\Controllers'], function () {
	Route::get('blog/author/{fname}', ['uses' => 'AuthorsController@index']);
	});
?>