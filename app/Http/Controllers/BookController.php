<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

use App\Http\Model\Book;

class BookController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data_book = Book::all();
		return view('books.index')->with('book',$data_book);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('books.form_add_book');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$add_book = Book::create(Request::all());
		if($add_book->exists())
		{
			return redirect('book/create')->with('status','<div class="alert alert-success">Add book success</div>');
		}else{
			return redirect('book/create')->with('status','<div class="alert alert-danger">Add book Fail!!!</div>');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return "OK show method";
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "OK edit Method";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$delete_book = Book::where('id',$id)->delete();
		if($delete_book)
		{
			return redirect('book')->with('status','<div class="alert alert-success">Delete Success</div>');
		}
	}
}
