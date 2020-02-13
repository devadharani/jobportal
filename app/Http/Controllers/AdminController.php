<?php

namespace App\Http\Controllers;
use App\education;
use App\jobpro;
use App\payment;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\applied;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('paypalComplete');
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * To display the posted_job_details of the employers.
     * @param int $id (user_id) in jobs table
     * @return \Illuminate\Http\Response
     *
     */

    public function show($id)
    {
        $decoded_id = base64_decode($id);
        $jobs = jobpro::where('user_id', $decoded_id)->get();
        return view('posted_job_details', compact('jobs'));
    }

    /**
     * To edit the specific user information
     * @param int $id (id) in users table
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decoded_id = base64_decode($id);
        $user = User::where('id', $decoded_id)->first();
        $education = education::where('user_id', $decoded_id)->first();
        return view('user_info_edit', compact('user', 'education'));
    }

    /**
     * Update the specific user information
     * @param \Illuminate\Http\Request $request
     * @param int $id (id) in user table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $decoded_id = base64_decode($id);
        $user = User::where('id', $decoded_id)->first();
        $user->update($request->all());
        $education = education::where('user_id', $decoded_id)->first();
        $education->update($request->all());
        return redirect()->route('users_info',[ 'id' => $id])->with('message','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $decoded_id=base64_decode($id);
        $user=User::where('id',$decoded_id)->first();
        $user->delete_status=1;
        $user->save();
        return redirect()->back()->with('message','Deleted Successfully');
    }

    /** To view name of the employers*/
    public function employers()
    {
        $employers = User::where('user_type', 2)->get();
        $posted_employers = User::where('user_type', 5)->get();
        return view('employers', compact('employers', 'posted_employers'));
    }

    /** To view name of the users */
    public function users()
    {
        $new_users = User::where('user_type', 3)->get();
        $users_detail = User::where('user_type', 4)->get();
        return view('users', compact('new_users', 'users_detail'));
    }

    /** To view specific user information
     *$id (id) in user table
     */
    public function users_info($id)
    {
        $decoded_id = base64_decode($id);
        $user = User::where('id', $decoded_id)->first();
        $education = education::where('user_id', $decoded_id)->first();
        return view('users_info', compact('user', 'education'));
    }

    /**To view specific users applied jobs
     * ($id) id in users table
     */
    public function users_applied_jobs($id)
    {
        $decoded_id = base64_decode($id);
        $jobs_id = applied::where('user_id', $decoded_id)->get();
        $job_details = [];
        foreach ($jobs_id as $job_id) {
            $job_details[] = jobpro::where('id', $job_id->job_id)->first();
        }
        return view('users_applied_jobs', compact('job_details'));
    }

    /** To view the full applied jobs detail
     *$id(id) in jobs table
     */
    public function users_full_job_details($id)
    {
        $decoded_id=base64_decode($id);
        $jobs=jobpro::where('id',$decoded_id)->first();
        return view('users_full_job_details',compact('jobs'));
    }

    /**To edit the job details
     * $id (id) in jobs table
     */
    public function jobs_edit($id)
    {
        $decoded_id=base64_decode($id);
        $jobs=jobpro::where('id',$decoded_id)->first();
        return view('jobs_edit',compact('jobs'));
    }

    /**To update the jobs detail
     * $id (id) in jobs table
     */
    public function jobs_update(Request $request,$id)
    {
        $decoded_id=base64_decode($id);
        $jobs=jobpro::where('id',$decoded_id)->first();
        $jobs->company_name=$request->company_name;
        $jobs->company_email=$request->company_email;
       $jobs->save();
        $jobs->update($request->all());
        return redirect()->route('full_job_details_employers',['id'=>$id])->with('message','Updated Successfully');
    }

    public function delete_job($id)
    {
        $decoded_id=base64_decode($id);
        $job=jobpro::where('id',$decoded_id)->first();
        $job->delete_status=1;
        $job->save();
        return redirect()->route('post_jobs',['id' => $id ])->with('message','Deleted Successfully');
    }
    public function paypalComplete(Request $request)
    {
         $file=fopen(public_path().date("Y-m-d")."payment.txt","a+");
         fwrite($file,json_encode($request->all()));
         fclose($file);
         $payments=payment::where('user_id',Auth::id())->first();
         if($payments!=null)
         {
             $payments->orderID=$request['orderID']['orderID'];
             $payments->payerID=$request['orderID']['payerID'];
             $payments->extra_jobs=4;
             $payments->save();
         }
         else {
             $payment = new payment();
             $payment->user_id = Auth::id();
             $payment->orderID = $request['orderID']['orderID'];
             $payment->payerID = $request['orderID']['payerID'];
             $payment->extra_jobs = 4;
             $payment->save();
         }
    }
}
