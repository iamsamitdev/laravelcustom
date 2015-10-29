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
		return view('books.index');
	}

	public function showbook()
	{
		$data_book = Book::all();
		return view('books.showbook_data')->with('book',$data_book);
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
		//return "Store OK";
		$data_book = array(
			'isbn'		=> Request::get('isbn'),
			'title'		=> Request::get('title'),
			'author'		=> Request::get('author'),
			'publisher'	=> Request::get('publisher')
		);

		// Insert data to model Book
		$add_book = Book::create($data_book);
		
		// Check status insert data
		if($add_book->exists())
		{
			return '<div class="alert alert-success">Add book success</div>';
		}else{
			return '<div class="alert alert-danger">Add book Fail!!!</div>';
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
