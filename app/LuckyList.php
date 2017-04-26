<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LuckyList extends Model
{
    protected $table = 'LuckyList';

	protected $fillable = array('lucidx','empidx','created_at','updated_at','active');

	public function employee()
    {
        return $this->belongsTo('App\Employee');
    }

}