<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usertype extends Model
{
    //
    protected $fillable=[
    	'name',
    ];

  

   public function User()
    {
        return $this->belongTo('App\User');
    }
}
