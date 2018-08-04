<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
	protected $fillable = ['license_no','name','phone','engine_no','year','brand','model'];

    public function packages()
    {
        return $this->hasMany('App\Package');
    }
}
