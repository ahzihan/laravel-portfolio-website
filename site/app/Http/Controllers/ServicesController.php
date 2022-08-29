<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesModel;

class ServicesController extends Controller
{
    public function ServicesIndex(){

        // ServicesModel::insert();

        return view('Services');
    }
}
