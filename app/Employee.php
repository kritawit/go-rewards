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
    );

    public function luckylist(){
		return $this->hasMany('App\LuckyList');
	}

	public function branch()
    {
        return $this->belongsTo('App\Branch');
    }
}