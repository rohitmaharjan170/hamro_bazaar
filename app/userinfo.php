<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userinfo extends Model
{
    //
    $fillable=[
    	'id',
'name',
'dob',
'citizenship_no',
'mobile',
'p_street',
'p_wardno',
'p_wardname',
'p_municipality',
'p_disctrict',
'p_state',
'p_nation',
'p_postal',

    ];

    public function User()
    {
        return $this->hasOne('App\User');
    }

    
}
