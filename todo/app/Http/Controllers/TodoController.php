<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
	public function getTodos() {
		$listname = "My List of Things To Procastrinate About";
		$todoitems = [
			"Drink moar ☕️",
			"Take a break 🕺🏻",
			"Have fun with Laravel! ✨"
		];

		return view('todos/index', [
			'listname' => $listname,
			'whoami' => 'Batman!',
			'todoitems' => $todoitems,
		]);
	}
}
