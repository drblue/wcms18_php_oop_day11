<?php

namespace App\Models;

use App\Models\Team;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model {
	public function teams() {
		return $this->hasMany(Team::class);
	}
}
