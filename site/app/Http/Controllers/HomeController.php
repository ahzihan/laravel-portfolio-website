<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;
use App\Models\ServicesModel;

class HomeController extends Controller
{
    public function HomeIndex(){

        $userIP=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate= date("Y-m-d h:i:sa");

        VisitorModel::insert(['ip_address'=>$userIP,'visit_time'=>$timeDate]);

        $services=ServicesModel::all();


        return view('Home',compact('services'));
    }
}
