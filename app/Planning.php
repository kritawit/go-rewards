<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    protected $table = 'Planning';

	protected $fillable = array('planidx','month','awidx','qty','created_at','updated_at','active');

    public function award()
    {
        return $this->belongsTo('App\Award');
    }
}