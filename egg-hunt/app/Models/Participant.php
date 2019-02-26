<?php

namespace App\Models;

use App\Models\Team;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model {
	public function teams() {
		return $this->belongsToMany(Team::class);
	}
}
