<?php

namespace App\Modules\Authors\Controllers;
use Illuminate\Http\Request;
use App\User; //to comment Comment::create

use App\Http\Controllers\Controller;



class AuthorsController extends Controller
{
	public function index($fname)
	{
		$author = User::where('name','=',$fname)
							->get();

		return view('Authors::index')->with('author',$author);
	}


}

?>