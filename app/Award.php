<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $table = 'Award';

	protected $fillable = array('awidx','name','created_at','updated_at','active');

	public static $rules = array(
    	'name' => 'required|unique:Award',
    );

     public function planning(){
		return $this->hasMany('App\Planning');
	}

	public function branchlucky(){
		return $this->hasMany('App\BranchLucky');
	}

	public function employeelucky(){
		return $this->hasMany('App\EmployeeLucky');
	}
}