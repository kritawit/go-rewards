<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'Employee';

	protected $fillable = array('empidx','branidx','empid','title', 'firstname',
		'lastname','personalid','rehire_date','created_at','updated_at','active');

	public static $rules = array(
    	'empid' => 'required|unique:Employee',
        'rehire_date' => 'required'
    );

    public function employeelucky(){
		return $this->hasMany('App\EmployeeLucky');
	}

    public function branchlucky(){
        return $this->hasMany('App\BranchLucky');
    }

	public function branch()
    {
        return $this->belongsTo('App\Branch');
    }
}