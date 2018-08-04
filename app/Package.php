<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $dates = ['created_at','updated_at','date_start','date_stop'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function car()
    {
        return $this->belongsTo('App\Car');
    }

    public function histories()
    {
        return $this->hasMany('App\History');
    }
}
