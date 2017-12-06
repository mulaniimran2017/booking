<?php
namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Package;
use App\Models\Customer;
use App\Models\Configuration;
use App\Models\TimeInterval;
use App\Models\user;

use Input;
use Auth;
use View;
class userloginController extends Controller {
  
      // public function __construct()
      //     {
      //         $this->middleware('auth');
      //     }
  

  /**
   * Function to retrieve the index page
   */
  public function index()
  {
    $errors = "None";
    return view('userlogin')->with('errors', $errors);
  }
  public function login()
  {
  
  //   $input = Input::all();
  //   echo "login", $input;
  //   if (Auth::attempt(array('name' => $input['name'],'email' => $input['email'], 'password' => $input['password'] ))) {
  //     return redirect('userlogin/booking');
  //   } else {
  //     $errors = "Invalid E-mail or password";
  //     return view('userlogin')->with('errors', $errors);
  //   }
  // }
   
  return redirect('booking');
  
  }

}