<?php

namespace App\Http\Controllers;
use App\jobpro;
use Illuminate\Http\Request;
use App\User;
use App\applied;
use App\education;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       $user=Auth::user();
       if($user->user_type==1) {

          for($month=1;$month<=12;$month++)
          {
               $Users[]=User::where('status', 'user')->whereMonth('created_at', $month)->where('delete_status',null)->get()->count();
          }
           for($month=1;$month<=12;$month++)
           {
               $employers[] = User::where('status', 'employer')->whereMonth('created_at', $month)->where('delete_status',null)->get()->count();
           }
           for($month=1;$month<=12;$month++)
           {
               $jobs[]=jobpro::whereMonth('created_at', $month)->where('delete_status',null)->get()->count();
           }
           $postedJobs=jobpro::where('delete_status',null)->get();
           $postedJobsId= array_column($postedJobs->toArray(), "id");
           foreach ($postedJobsId as $postedJobId) {
               $appliedJobs[] = applied::where('job_id', $postedJobId)->get()->count();
           }
           $postedEmployers=User::where('status','employer')->where('delete_status',null)->get();
           $postedEmployersId= array_column($postedEmployers->toArray(),"id");
           foreach ($postedEmployersId as $postedEmployerId) {
               $employersJob[] = jobpro::where('user_id', $postedEmployerId)->where('delete_status',null)->get()->count();
           }
           $totalUsers=User::where('status','user')->where('delete_status',null)->get()->count();
           $totalEmployers=User::where('status','employer')->where('delete_status',null)->get()->count();
           $totalJobsPosted=jobpro::where('delete_status',null)->get()->count();
           $month = array('Jan', 'Feb', 'Mar', 'April', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
           return view('admin', ['user' => $Users, 'month' => $month, 'employers' => $employers,'jobs'=> $jobs,
               'postedJobsId'=> $postedJobsId,'appliedJobs'=>$appliedJobs,'postedEmployersId'=>$postedEmployersId,'employersJob'=>$employersJob,
                   'totalUsers'=>$totalUsers,'totalEmployers'=>$totalEmployers,'totalJobsPosted'=>$totalJobsPosted]
            );
       }
       if($user->delete_status!=1 && $user->user_type!="") {
           if ($user->user_type == 4) {
               $encoded_id = (new UserController)->encode(Auth::id());
               /* =$this->encode(Auth::user()->id);*/
               $education = education::where('user_id', Auth::id())->first();
               return view('profile', compact('user', 'education', 'encoded_id'));
           }
           if ($user->user_type == 5) {
               $row = jobpro::where('user_id', Auth::id())->get();
               return view('posted_jobs', compact('row'));
           }
           if ($user->user_type == 2) {
               return view('add_jobs', compact('user'));
           }

           return view('home', compact('user'));
       }
       return  view('auth.login');
    }

}
