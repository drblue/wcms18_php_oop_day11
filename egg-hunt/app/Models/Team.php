<?php

namespace App\Models;

use App\Models\Participant;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Model;

class Team extends Model {
	public function shop() {
		return $this->belongsTo(Shop::class);
	}

	public function participants() {
		return $this->belongsToMany(Participant::class);
	}
}
