<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	public function user()
	{
		return $this->hasMany('App\User');
	}

    public function training()
    {
        return $this->hasMany('App\Training');
    }
}
