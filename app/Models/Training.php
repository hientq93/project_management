<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
