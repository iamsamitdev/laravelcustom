<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Deptmanager extends Model {

	protected $table = 'dept_manager';
	protected $primaryKey = 'emp_no';

	public function deptmanger_employee()
	{
		return $this->hasOne('App\Http\Model\Employee','emp_no');
	}


}
