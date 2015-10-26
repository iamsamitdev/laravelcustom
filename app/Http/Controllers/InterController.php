<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request; // Library สำหรับเรียกรับค่าจาก form
use Validator; // Libray สำหรับ validate form

// เรียกใช้ Model Member
use App\Http\Model\Member;

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

	public function register()
	{
		return view("pages.register");
	}

	public function post_register()
	{
		$message = [
			'required'	=> 'ข้อมูล :attribute จำเป็น',
			'email'		=> 'รูปแบบ :attribute ไม่ถูกต้อง',
			'min'		=> 'ข้อมูล :attribute ต้องไม่น้อยกว่า :min ตัว',
			'unique'	=> 'อีเมล์ซ้ำ'
		];

		// Validate form
		$rules = [
			'fullname'	=> 'required',
			'email'		=> 'required|email|unique:members',
			'password'	=> 'required|Min:8',
			'tel'		=> 'required|Min:9',
			'address'	=> 'required'
		];

		$validator  = Validator::make(Request::all(),$rules,$message);

		// กรณี Validate fail
		if($validator->fails())
		{
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
			$data_member = array(
				'fullname'	=> Request::get('fullname'),
				'email'		=> Request::get('email'),
				'password'	=> Request::get('password'),
				'tel'		=> Request::get('tel'),
				'address'	=> Request::get('address'),
				'status'		=> 1
			);

			$add_member = Member::create($data_member); // insert into member

			// เช็คว่า insert success
			if($add_member->exists())
			{
				return redirect('register')->with('status','<div class="alert alert-success">Insert Success</div>');
			}else{
				return redirect('register')->with('status','<div class="alert alert-danger">Insert Fail!!!</div>');
			}
		}

	}


	public function member()
	{
		//$member = Member::all(); // select * from member
		//$member = Member::find(2);
		//$member = Member::find(array(2,3));
		//$member = Member::first();
		//$member = Member::where('fullname', '=', 'Samit Koyom')->get();
		$member = Member::where(
			array(
				'fullname' => 'Samit Koyom',
				'tel'=>'0598989898'
			))->get();

		// Update
		//$member = Member::update($variable);

		// Delete with conditon
		// $member = Member::where('Samit Koyom', '=', 'Johny')->delete();

		// Delete all
		//$member = Member::truncate();

		return $member;
		//return view("pages.member")->with("member",$member);
	}

}
