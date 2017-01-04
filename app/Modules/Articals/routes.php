<?php  
/*	route.php for Articals module.
	here Views controller's namespace is defined. and module is considered as a group.
	all the routes related to that module go inside this group as normal routes.
*/

Route::group(['namespace' => 'App\Modules\Articals\Controllers'], function () {
	Route::get('blog', ['uses' => 'BlogController@index']);
	Route::get('artical', ['uses' => 'BlogController@artical']);
	//this will have to update into artical/artical_id
});



?>