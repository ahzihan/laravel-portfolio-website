<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;
use App\Models\ServicesModel;
use App\Models\Course;

class HomeController extends Controller
{
    public function HomeIndex(){

        $userIP=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate= date("Y-m-d h:i:sa");

        VisitorModel::insert(['ip_address'=>$userIP,'visit_time'=>$timeDate]);

        $services=ServicesModel::all();
        $data=Course::all();
        return view('Home',compact('services','data'));
    }
}
