<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;
use Input;
use Redirect;
use Validator;
use Session;
use Auth;
use Response;
use File;
use Excel;
use DB;

use App\Employee;
use App\Branch;
use Illuminate\Queue\SerializesModels;


class AdminController extends Controller
{

	use SerializesModels;


	public function index()
	{
		return view('admin.index');
	}

	public function employee(){

		$sql = 'SELECT e.*,b.bucode,b.name FROM Employee e
        LEFT JOIN Branch b ON e.branidx = b.branidx
        WHERE e.active = ?';

		$employee = \DB::select($sql, [1]);

		return view('admin.employee.index',['employee' => $employee]);
	}


	public function importFormEmployee(){
		return view('admin.employee.import');
	}

	public function importEmployee(){

		$file = array('excelfile' => Input::file('excelfile'));

		$rules = array('excelfile' => 'required',);
  		$validator = Validator::make($file, $rules);
  		if ($validator->fails()) {
    		return Redirect::to('admin/employee/import')->withInput()->withErrors($validator);
  		}else{

      		// checking file is valid.
    		if (Input::file('excelfile')->isValid()) {
      			$destinationPath = 'public/excel/employee'; // upload path
      			$extension = Input::file('excelfile')->getClientOriginalExtension(); // getting 		image extension
      			$fileName = rand(11111,99999).'.'.$extension; // renameing image
      			Input::file('excelfile')->move($destinationPath, $fileName);

      			Excel::load('public/excel/employee/'.$fileName, function($reader) {

    					$results = $reader->get();

    					foreach ($results as $row) {

            				$emp = new Employee;
            				$emp->empid = $row->empid;
            				$emp->branidx = $row->branidx;
            				$emp->title = $row->title;
            				$emp->firstname = $row->firstname;
            				$emp->lastname = $row->lastname;
            				$emp->personalid = $row->personalid;
            				$emp->rehire_date = $row->rehire_date->format('Y-m-d');
            				$emp->save();
            			}
				});





      			Session::flash('success', 'Import successfully');
      			return Redirect::to('admin/employee');
    		}
    		else {
      			// sending back with error message.
      			Session::flash('error', 'uploaded file is not valid');
      			return Redirect::to('admin/employee/import');
    		}
  		}
	}


	public function employeeForm(){
		// printf($id);
		$employee = array();
		$branch = Branch::where('active',1)->pluck('bucode', 'branidx');
		return view('admin.employee.add',compact('branch','employee'));
	}

	public function editEmployee($id){
		$employee = array();
		$branch = Branch::where('active',1)->pluck('bucode', 'branidx');
		$employee = Employee::where('empidx',$id)->first();
		return view('admin.employee.add',compact('branch'))->with('employee',$employee);
	}

	public function addEmployee(){

	}

	public function updateEmployee(){

	}

	public function branch(){

		$branch = \DB::select('select * from branch where active = ?', [1]);

		return view('admin.branch.index',['branch' => $branch]);
	}

	public function award(){
		return view('admin.award.index');
	}

	public function planning(){
		return view('admin.planning.index');
	}

	public function luckylist(){
		return view('admin.luckylist.index');
	}

}