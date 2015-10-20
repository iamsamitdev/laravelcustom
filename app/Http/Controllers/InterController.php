<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class InterController extends Controller {

	public function index()
	{
		return view("pages.index");
	}

	public function about()
	{
		return view("pages.about");
	}

	public function service()
	{
		return view("pages.service");
	}

	public function portfolio()
	{
		return view("pages.portfolio");
	}

	public function blog()
	{
		return view("pages.blog");
	}

	public function contact()
	{
		return view("pages.contact");
	}

}
