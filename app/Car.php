<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
	protected $fillable = ['license_no'];

    public function packages()
    {
        return $this->hasMany('App\Package');
    }
}
