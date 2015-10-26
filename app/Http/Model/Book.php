<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {
	protected $table = 'books';
	protected $fillable=[
	        'isbn',
	        'title',
	        'author',
	        'publisher',
	        'image'
	];
}
