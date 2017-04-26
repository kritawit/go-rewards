<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{

    protected $table = 'Branch';

	protected $fillable = array('branidx','bucode','name','created_at','updated_at','active');

	public static $rules = array(
    	'bucode' => 'required|unique:Branch',
    );

    public function employee(){
		return $this->hasMany('App\Employee');
	}
}
