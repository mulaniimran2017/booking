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


class myController extends BaseController {
public function TestDatabaseConnection(){
    try {
        $database_host = Config::get('config.database_host');
        $database_name = Config::get('config.database_name');
        $database_user = Config::get('config.database_user');
        $database_password = Config::get('config.database_password');

        $connection = mysqli_connect($database_host,$database_user,$database_password,$database_name);

        if (mysqli_connect_errno()){
                return false;
            } else {
                return true;
            }

    } catch (Exception $e) {

        return false;

    }
}
}