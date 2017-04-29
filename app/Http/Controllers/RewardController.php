<?php

namespace App\Http\Controllers;

use App\Award;
use App\Branch;
use App\BranchLucky;
use App\Employee;
use App\EmployeeLucky;
use DB;
use Illuminate\Queue\SerializesModels;
use Input;
use Redirect;
use Session;
use Validator;
use View;

class RewardController extends Controller
{
    use SerializesModels;

    public function index()
    {
        $award = Award::where('active', 1)->pluck('name', 'awidx');

        return view('rewards.index', compact('award'));
    }

    public function reward()
    {

        $validator = Validator::make(Input::all(), Award::$rules);

        if ($validator->passes()) {

            $award = Input::get('name');

            if ($award == 1) {
                $reward = \DB::select('CALL rewardrandom(' . $award . ',730,2)');
            } elseif ($award == 2) {
                $reward = \DB::select('CALL rewardrandom(' . $award . ',180,30)');
            } elseif ($award == 3) {
                $reward = \DB::select('CALL rewardrandom(' . $award . ',0,90)');
            }

            return view('rewards.result', ['reward' => $reward, 'award' => $award]);
            // return redirect('reward')->with(['reward'=>$this->reward]);
        }

        return Redirect::back()->withInput()->withErrors($validator);

    }

    public function savelucky()
    {
        // print_r(Input::all());
        $lucky         = array();
        $lucky['emp']  = Input::get('empid');
        $lucky['bran'] = Input::get('bucode');
        $award         = Input::get('award');

        // print_r(count($lucky['bran']));

        $empluck  = new EmployeeLucky;
        $branluck = new BranchLucky;

        $clearlucky = \DB::statement('CALL clearlucky(' . $award . ')');

        if ($clearlucky) {
            for ($i = 0; $i < count($lucky['emp']); $i++) {

                if ($award == 1 || $award == 3) {
                    $emp         = new EmployeeLucky;
                    $empidx      = $this->getempidx($lucky['emp'][$i]);
                    $emp->empidx = $empidx;
                    $emp->awidx  = $award;
                    $emp->save();
                } elseif ($award == 2) {

                    $emp         = new EmployeeLucky;
                    $empidx      = $this->getempidx($lucky['emp'][$i]);
                    $emp->empidx = $empidx;
                    $emp->awidx  = $award;
                    $emp->save();

                    $bran          = new BranchLucky;
                    $branidx       = $this->getbranidx($lucky['bran'][$i]);
                    $bran->empidx  = $empidx;
                    $bran->awidx   = $award;
                    $bran->branidx = $branidx;
                    $bran->save();
                }
            }
            Session::flash('success', 'Reward log saved successfully.');
        }else{
        	Session::flash('error', 'Cannot clear lucky list!');
        }

        return redirect('reward');
    }

    protected function getempidx($empid = null)
    {

        $emp = array();

        $emp = Employee::where('empid', '=', $empid)->first();

        return $emp['empidx'];

    }

    protected function getbranidx($bucode = null)
    {

        $bran = array();

        $bran = Branch::where('bucode', '=', $bucode)->first();

        return $bran['branidx'];

    }
}
