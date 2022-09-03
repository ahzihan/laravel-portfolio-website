@extends('Layout.app')

@section('content')

<div class="container">
<div class="row">
<div class="col-md-12 p-5">
    <a class="btn btn-sm btn-danger" href="{{url('/courses')}}">View All</a>
{{Session::get('success')}}
<form class="text-center" action="{{url('/store')}}" method="post">
    <h4 class="mb-4">Add New Course</h4>
    @csrf
    <input type="text" id="" name="course_title" class="form-control mb-4" placeholder="Course Title">
    <input type="text" id="" name="course_img" class="form-control mb-4" placeholder="Image link">
    <div class="form-group">
        <textarea name="course_sub_title" class="form-control rounded-0" id="" rows="3" placeholder="Sub title"></textarea>
    </div>
    <button class="btn btn-info btn-block" type="submit">Submit</button>
</form>

</div>
</div>
</div>
@endSection