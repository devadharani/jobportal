<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    protected $table='education';
    public $timestamps=false;
    protected $fillable=['sslc_school','sslc_place','sslc_percentage','sslc_year','hsc_school','hsc_place',
                 'hsc_percentage','hsc_year','ug_college','ug_place','ug_percentage','ug_year','pg_college',
                'pg_place','pg_percentage','pg_year','user_id'];

}
