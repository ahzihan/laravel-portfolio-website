<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Course::all();
        return view('Courses',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newCourse');
    }

    public function store(Request $request)
    {
        Course::create($request->all());
        return redirect('courses')->with('success','Data inserted successfully.');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        
        $data=Course::find($id);
        return view('editCourse',compact('data'));
    }

    public function update(Request $r)
    {
        Course::where('id',$r->id)->update(array('course_title'=>$r->course_title,'course_img'=>$r->course_img,'course_fee'=>$r->course_fee,'course_fee'=>$r->course_des,'total_class'=>$r->total_class,'total_enroll'=>$r->total_enroll,'course_link'=>$r->course_link,));
        return redirect('courses')->with('success','Data updated successfully.');
    }

    
    public function destroy($id)
    {
        Course::where('id',$id)->delete();
        return redirect('courses')->with('success','Product has been deleted successfully!');
    }
}
