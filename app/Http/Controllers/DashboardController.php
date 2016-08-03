<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User
use View;
use DB;
use Illuminate\Mail\Message;

class DashboardController extends Controller
{
    //
    public function index()
	{
		$dashboard = Dashboard::all();

		return View::make('Dashboard', ['dashboard' => $dashes]);
	}

	/*public function ValidateUser(Request $request)
	{
		$this->validate($request, [
			'name' => 'max:255',
			'email' => 'email|max:255|unique:users',
			'zip' => 'numeric|digits:5',
			'birthday' => 'date_format:m/d/Y',
			'phone' => 'numeric|digits:10',
			]);
	}*/

	public function CreateDashboard()
	{
		return View::make('Dashboard');
	}

	public function AddPlayer()
	{
		//make view to select player(s) to be added
		Redirect::to('SelectPlayer', ['dashboard => $dashboard']);

		//extract name, age, and last course and scroe from player(s) selected
		
	}

	public function store(Request $request)
	{
		$dashboard = new Dashboard;

		$dashboard->name = $request->name;
		$dashboard->age = $request->age;
		$dashboard->course = $request->course;
		$dashboard->score = $request->score;

		$dashboard->save();

		return Redirect::to('/Dashboard');
	}
}
