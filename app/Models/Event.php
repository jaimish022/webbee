<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Workshop;
class Event extends Model
{

	public function Comments()
    {
        return $this->hasMany('App\Models\Workshop','event_id','id');
    }
}
