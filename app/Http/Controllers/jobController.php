<?php

namespace App\Http\Controllers;

use App\jobpro;
use App\message;
use App\education;
use App\applied;
use App\User;
use App\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
class jobController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('welcome');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jobpro  $jobprovider
     * @return \Illuminate\Http\Response
     */
    public function show(jobpro $provider)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jobpro  $jobprovider
     * @return \Illuminate\Http\Response
     */
    public function edit(jobpro $jobprovider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jobpro  $jobprovider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jobpro $jobprovider)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jobpro  $jobprovider
     * @return \Illuminate\Http\Response
     */
    public function destroy(jobpro $jobprovider)
    {


    }

    public function provider_profile(Request $request)
    {
        $providers=new jobpro();
        $providers->company_name=$request->company_name;
        $providers->company_email=$request->company_email;
        $providers->name=Auth::user()->name;
        $providers->user_id=Auth::id();
        $providers->save();
        $user=User::where('id',Auth::id())->first();
        $user->user_type=5;
        $user->save();
        $encoded_id=(new UserController)->encode($providers->id);
        return view('post_jobs',compact('providers','encoded_id'));
    }

    public function post_jobs(Request $request,$id)
    {
        $decoded_id=(new UserController)->decode($id);
        $provider=jobpro::where('id',$decoded_id)->first();
        $provider->update($request->all());
        $payment=payment::where('user_id',Auth::id())->first();
        $paymentJobs=$payment->extra_jobs;
        if($payment!=null and $payment->extra_jobs!=0)
        {
            $payment->extra_jobs=--$paymentJobs;
            $payment->save();
        }
        $row=jobpro::where('user_id',Auth::id())->get();
       return view('posted_jobs',compact('row'));
    }

    public function applied_users($id)
    {
        $decoded_id=base64_decode($id);
        $user=User::where('id',$decoded_id)->first();
        $education=$user->geteducationdetails()->first();
        return view('applied_users',compact('user','education'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function add_jobs()
    {
        $user=Auth::user();
        $users_id=$user->id;
        $postedJobs=jobpro::where('user_id',$users_id)->where('delete_status',null)->get()->count();
        $payment=payment::Where('user_id',Auth::id())->first();

        if($payment!= null) {
            if ($payment->extra_jobs == 4 ) {
                return view('add_jobs', compact('user'));
            }
            elseif($payment->extra_jobs == 0)
            {
                return view('paypal');
            }
        }

        else {
            if ($postedJobs >= 4) {
                return view('paypal');
            }
        }
        return view('add_jobs',compact('user'));
    }

    public function welcome()
    {
        $row=jobpro::all();
        if(Auth::user()) {
            $applied_jobs = Auth::user()->getappliedjobs()->get();
            $applied_lists = array_column($applied_jobs->toArray(), "job_id");
        }
        return view('welcome',compact('row','applied_lists'));
    }

    public function full_job_details_employers($id)
    {
        $decoded_id=base64_decode($id);
        $providers=jobpro::where('id',$decoded_id)->first();
        $appliers=jobpro::find($decoded_id)->getappliedusers()->get();
            $user_data = [];
            $edu=[];
            foreach ($appliers as $applied) {
                $user_data['data'] = $applied->getuser()->first();
                $user_data['appliers'] = $applied;
                $edu[] = $user_data;
            }
        return view('full_details_employers',compact('edu','providers'));
    }

    public function message(Request $request,$id)
    {
        $decoded_id=base64_decode($id);
        $mes=applied::where('job_id',$decoded_id)->get();
        if($mes!="") {
            foreach ($mes as $value) {
                if ($value->user_id == $request->user_id) {
                    $value->message = $request->message;
                    $value->save();
                }
            }
        }
        return redirect()->back();
    }
}
