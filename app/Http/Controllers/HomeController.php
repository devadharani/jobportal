<?php

namespace App\Http\Controllers;
use App\jobpro;
use Illuminate\Http\Request;
use App\User;
use App\education;
use Illuminate\Support\Facades\Auth;
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
       if($user->delete_status!=1) {
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
