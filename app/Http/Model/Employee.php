<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

	protected $table = 'employees';
	protected $primaryKey = 'emp_no';

	public function employee_salary()
	{
		$this->hasMany('App\Http\Model\Salary','emp_no');
	}
}
