<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    public function packages()
    {
        return $this->hasMany('App\Package');
    }

    public function package()
    {
        return $this->belongsTo('App\Package');
    }
}
