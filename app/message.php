<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $table='message';
    public $timestamps=false;
    protected $fillable=['job_id','user_id','message'];
}
