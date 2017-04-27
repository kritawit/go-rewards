<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeLucky extends Model
{
    protected $table = 'EmployeeLucky';

	protected $fillable = array('emplucidx','empidx','awidx','created_at','updated_at','active');

	public function employee()
    {
        return $this->belongsTo('App\Employee');
    }

    public function award(){
    	return $this->hasMany('App\Award');
    }
}