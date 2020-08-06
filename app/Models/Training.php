<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Training extends Model
{
	const INREVIEW=1;
	const APPOVED=2;
	const REJECT=3;

	//check status
	public function inReview($status) {
		return $status==self::INREVIEW ? true : false;
	}

	public function appoved($status) {
		return $status==self::APPOVED ? true : false;
	}

	public function reject($status) {
		return $status==self::REJECT ? true : false;
	}

	public function getStatus(){
	    $statusList = config('constants.TRANNING_STATUS');
	    return $statusList[$this->status];
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getAssignTo(){
	    $user = User::find($this->assign_to);

	    return $user ? $user->name : '';
    }
}
