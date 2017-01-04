<?php

namespace App\Modules\Articals\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;



class BlogController extends Controller
{
	public function index()
	{
		return view('Articals::index');
	}
}

?>