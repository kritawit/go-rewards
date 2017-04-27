<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchLucky extends Model
{
    protected $table = 'BranchLucky';

	protected $fillable = array('branluidx','branidx','empidx','awidx','created_at','updated_at','active');

	public function branch()
    {
        return $this->belongsTo('App\Branch');
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }


    public function award(){
    	return $this->hasMany('App\Award');
    }
}
}