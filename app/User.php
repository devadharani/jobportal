<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $timestamps=false;
    protected $appends=['encode_id'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','mobile_no','skills','projects','addressline1','addressline2','city','state','country',
        'zip'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getappliedjobs()
    {
        return $this->hasMany('App\applied','user_id','id');
    }
    public function geteducationdetails()

    {
        return $this->hasOne('App\education','user_id','id');
    }
    public function getEncodeIdAttribute()
    {
        return base64_encode($this->id);
    }

}
