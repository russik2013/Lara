<?php namespace Modules\Schedule\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class ScheduleController extends Controller {
	
	public function index()
	{
		return view('Schedule::index'); 
	}
	
}