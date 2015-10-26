<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model {
	//$primary_key = array('xxx','xxx');
	protected $table = 'members';
	protected $fillable = ['fullname','email','password','tel','address','status'];
}
