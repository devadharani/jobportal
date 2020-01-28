<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobpro extends Model
{
    protected $appends=['encoded_id'];
    protected $table='jobs';
   public $timestamps=false;
   protected $fillable=['job_title','location','qualification','passedout_year','skills','last_date','posted_date',
           'job_type','job_role','job_category','hiring_process','experience','job_description','website'];
   public function getEncodedIdAttribute()
   {
       return base64_encode($this->id);
   }

   public function getappliedusers()
   {
          return $this->hasMany('App\applied','job_id','id');
   }

}
