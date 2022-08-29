<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;

class VisitorController extends Controller
{
    public function VisitorIndex(){

        $data=VisitorModel::all();
        return view('Visitor',compact('data'));
    }
}
