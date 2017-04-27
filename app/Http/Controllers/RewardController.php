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

use App\Award;
use Illuminate\Queue\SerializesModels;


class RewardController extends Controller
{
	use SerializesModels;

	public function __construct()
	{
		// $this->beforeFilter('csrf',array('on'=>'post'));
	}

    public function index(){
    	$award = Award::where('active', 1)->pluck('name', 'awidx');
    	
    	return view('rewards.index',compact('award'));
    }

    public function reward(){

    	$validator = Validator::make(Input::all(),Award::$rules);

		if ($validator->passes()) {

			$award = Input::get('name');

			if ($award == 1) {
				$reward =\DB::select('CALL rewardrandom('.$award.',730,2)');
			}elseif ($award == 2) {
				$reward =\DB::select('CALL rewardrandom('.$award.',180,30)');
			}elseif ($award == 3) {
				$reward =\DB::select('CALL rewardrandom('.$award.',0,90)');
			}

			return view('rewards.result',['reward' => $reward]);
			// return redirect('reward')->with(['reward'=>$this->reward]);
		}

		return Redirect::back()->withInput()->withErrors($validator);

    }
}