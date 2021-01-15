<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TransModel;

class Home extends BaseController
{
	public function index()
	{
		return view('home/edittrans');
	}
}
