<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesModel;

class ServicesController extends Controller
{
    public function ServicesIndex(){
        return view('Services');
    }

    public function getServices(){
        $services=ServicesModel::all();
        return $services;
    }

    public function deleteService(Request $req){
        $id = $req->input('id');
        $result=ServicesModel::where('id',$id)->delete();

        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }
}
