<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesModel;

class ServicesController extends Controller
{
    function ServicesIndex(){
        return view('Services');
    }

    function getServices(){
        $services=ServicesModel::all();
        return $services;
    }

    function deleteService(Request $req){
        $id = $req->input('id');
        $result=ServicesModel::where('id',$id)->delete();

        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    function getServiceById(Request $req){
        $id = $req->input('id');
        $result=ServicesModel::where('id',$id)->get();

        return $result;
    }

    function ServiceUpdate(Request $req){
        var_dump($req);
     $id= $req->input('id');
     $name= $req->input('name');
     $des= $req->input('des');
     $img= $req->input('img');
     $result= ServicesModel::where('id','=',$id)->update(['service_name'=>$name,'service_des'=>$des,'service_img'=>$img]);

     if($result==true){      
       return 1;
     }
     else{
      return 0;
     }
}

}
