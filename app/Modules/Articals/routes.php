<?php  
/*	route.php for Articals module.
	here Views controller's namespace is defined. and module is considered as a group.
	all the routes related to that module go inside this group as normal routes.
*/
	/*
		* Route::group(['middleware' => ['web']], function ()
			{ ----- });
		  This was used to show validation errors in the forms.

		* Controller should have, this
			use Illuminate\View\Middleware\ShareErrorsFromSession;
			
	*/
Route::group(['middleware' => ['web']], function ()
{

Route::group(['namespace' => 'App\Modules\Articals\Controllers'], function () {
	Route::get('blog', ['uses' => 'BlogController@index']);
	Route::get('artical', ['uses' => 'BlogController@artical']);
	//this will have to update into artical/artical_id
	Route::get('addartical', ['uses' => 'BlogController@addArtical']);
	Route::post('addpost', ['uses' => 'BlogController@addPost']);

	Route::get('blog/{id}/like',['uses' => 'BlogController@likePost']);
	Route::get('blog/{id}/dislike',['uses' => 'BlogController@dislikePost']);

	Route::get('blog/{blog_id}',['uses' => 'BlogController@showPost']);

	Route::post('addcomment', ['uses' => 'BlogController@addComment']);
	
});

});



?>