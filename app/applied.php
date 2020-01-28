<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class applied extends Model
{
    protected $table='applied';
    public $timestamps=false;
    protected $fillable=['job_id','user_id'];

    public function getuser()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

}
