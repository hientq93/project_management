<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    const ADMIN = 'admin';
    const MANAGER = 'manager';
    const EMPLOYEE = 'employee';

    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
