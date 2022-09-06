<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    
    public function index()
    {
        $data=Project::all();
        return view('viewProject',compact('data'));

    }

    public function create()
    {
        return view('createProject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        Project::create($r->all());
        return redirect('project')->with('success','Data inserted successfully.');
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data=Project::find($id);
        return view('editProject',compact('data'));
    }

    
    public function update(Request $r, $id)
    {
        Project::where('id',$id)->update(array('project_name'=>$r->project_name,'project_des'=>$r->project_des,'project_img'=>$r->project_img));
        return redirect('project')->with('success','Data Updated successfully.');
    }

    public function destroy($id)
    {
        // Project::where('id',$id)->delete();
        $project=Project::findOrFail($id);
        $project->delete();
        return redirect('project')->with('success','Data Deleted successfully.');
    }
}
