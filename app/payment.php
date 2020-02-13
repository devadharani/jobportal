<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table='payment';
    public $timestamps=true;
    protected $fillable=['user_id','order_id','payer_id','extra_jobs'];
}
