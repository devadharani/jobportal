<?php

namespace App\Http\Controllers;
use App\applied;
use App\jobpro;
use App\education;
use App\Mail\NotificationMails;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => ucfirst($request['first_name']) . " " . $request['last_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'mobile_no' => $request['mobile_no'],
        ]);
        $id = $this->encode($user->id);
        $name = $user->name;
        $this->sendWaitlistMails($request['email'], 'link to login', 'Mails.register', $id, $name);
        return redirect()->back()->withSuccess('Registered Successfully.Mail sent to your MailId');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decoded_id = base64_decode($id);
        $user = User::where('id', $decoded_id)->first();
        $education = education::where('user_id', $decoded_id)->first();
        return view('edit', compact('user', 'education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $decoded_id = base64_decode($id);
        $user = User::where('id',$decoded_id)->first();
        $user->update($request->all());
        $education = education::where('user_id', $decoded_id)->first();
        $education->update($request->all());
        return view('profile', compact('user', 'education'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login($id)
    {
        $id = $this->decode($id);
        $user = User::where('id', $id)->first();
        $user->user_type = 3;
        $user->save();
        return view("auth.login");
    }

    public function sendWaitlistMails($to, $subject, $template, $id, $name)
    {
        $input['subject'] = $subject;
        $input['view'] = $template;
        $input['id'] = $id;
        $input['name'] = $name;
        Mail::to($to)->send(new NotificationMails($input));
    }

    public function encode($value)
    {
        $value = base64_encode($value);
        return str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($value));
    }

    public function decode($value)
    {
        $value = str_replace(['-', '_', ''], ['+', '/', '='], base64_decode($value));
        return base64_decode($value);
    }

    public function complete_profile(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $request = Arr::add($request, 'user_type', 4);
         $user->update($request->all());
        $id = $user->id;
        $encoded_id = $this->encode($id);
        $request = Arr::add($request, 'user_id', $id);
        $data = $request->all();
        $education = education::create($data);
        return view('profile', compact(['user', 'education']));
    }
    public function posted_jobs()
    {
         $row=jobpro::all();
         $applied_jobs=Auth::user()->getappliedjobs()->get();
         $applied_lists=array_column($applied_jobs->toArray(),"job_id");
         return view('jobs',compact('row','applied_lists'));
    }
    public function full_job_details_users($id)
    {
        $providers=jobpro::where('id',base64_decode($id))->first();
        return view('full_detail',compact('providers'));
    }
    public function apply($id)
    {
        $user=Auth::user();
        $encoded_id=$this->encode($user->id);
        $providers=jobpro::where('id',$id)->first();
        return view('apply',compact('user','encoded_id','providers'));
    }
    public function form_data(Request $request,$id)
    {
        $decoded_id=$this->decode($id);
        $request=Arr::add($request,'user_id',$decoded_id);
         applied::create($request->all());
        $row=jobpro::all();
        $applied_jobs=Auth::user()->getappliedjobs()->get();
        $applied_lists=array_column($applied_jobs->toArray(),"job_id");
        return view('jobs',compact('row','applied_lists'));
    }
    public function new_user_login()
    {
        return view('auth.login');
    }
}

