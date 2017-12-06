<?php
namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Package;
use App\Models\Customer;
use App\Models\Configuration;
use App\Models\TimeInterval;

use Input;
use Auth;
use View;


class HomeController extends BaseController {
	 public function __construct()
    {
        $this->middleware('auth');
    }
  

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
  {
    
    return view('user');
  }
  

}