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
    <div class="form-row mb-4">
        <div class="col">
            <input type="text" name="course_title" class="form-control mb-4" placeholder="Course Title">
        </div>
        <div class="col">
            <input type="text" name="course_fee" class="form-control mb-4" placeholder="Course Fee">
        </div>
    </div>
    <div class="form-row mb-4">
        <div class="col">
            <input type="text" name="total_class" class="form-control mb-4" placeholder="Total Class">
        </div>
        <div class="col">
            <input type="text" name="total_enroll" class="form-control mb-4" placeholder="Total Enroll">
        </div>
    </div>
    <div class="form-row mb-4">
        <div class="col">
            <input type="text" name="course_link" class="form-control mb-4" placeholder="Course Link">
        </div>
        <div class="col">
            <input type="text" name="course_img" class="form-control mb-4" placeholder="Image">
        </div>
    </div>
    <div class="form-group">
        <textarea name="course_des" class="form-control rounded-0" rows="3" placeholder="Course Description"></textarea>
    </div>
    <button class="btn btn-info btn-block" type="submit">Submit</button>
</form>

</div>
</div>
</div>
@endSection