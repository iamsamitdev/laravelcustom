<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use  App\Http\Model\Employee;
use  App\Http\Model\Deptmanager;
use App\Http\Model\Salary;

class EmployeeController extends Controller {

	public function __construct()
    	{
    		$this->middleware('auth');
    	}

    	public function getIndex()
    	{
    		$data_emp = DB::table('employees')->paginate(20);
    		$count_all = DB::table('employees')->count();

    		return view('employee.show_employee')->with(
    			array(
    				'data_emp'=>$data_emp,
    				'count_all'=>$count_all
    			)
    		);
    	}

             public function getDeptmanager()
             {
                    //$id =Request::get('xxxxx');

                    //$dept_emp = Deptmanager::where('dept_no','d004')->first();
                    $dept_emp = Deptmanager::all();
                    return view('employee.show_deptmanager')->with('dept_emp',$dept_emp);

                    // echo "ID: ".$dept_emp->dept_no."<br>";
                    // echo "Emp_NO: ".$dept_emp->emp_no."<br>";
                    // echo "First Name: ".$dept_emp->deptmanger_employee->first_name."<br>";
                    // echo "Last Name: ".$dept_emp->deptmanger_employee->last_name;
             }

             public function getEmployee()
             {
                    $data_emp = Employee::paginate(20);
                    $count_all = Employee::count();
                    return view('employee.view_employee')->with(
                        array(
                            'data_emp'=>$data_emp,
                            'count_all'=>$count_all
                        )
                    );
             }

             public function getEmpsalary($id)
             {
                    $data_emp = Employee::where('emp_no',$id)->first();
                    $data_salary = Salary::where('emp_no',$id)->get();
                    return view('employee.view_salary')->with(

                         array(
                            'data_salary'=>$data_salary,
                            'data_emp'=>$data_emp
                        )
                         
                    );
             }

}
