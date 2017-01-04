<?php

namespace App\Modules\Authors\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;



class AuthorsController extends Controller
{
	public function index()
	{
		return view('Authors::index');
	}
}

?>