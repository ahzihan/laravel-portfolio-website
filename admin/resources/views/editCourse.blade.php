@extends('Layout.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12 p-5">
<a class="btn btn-sm btn-danger" href="{{url('/courses')}}">View All</a>
<form class="text-center" action="{{url('/update')}}" method="post">
    <p class="h4 mb-4">Update Course</p>
    @csrf
    <input type="hidden" value="{{$data->id}}" name="id">
    <div class="form-row mb-4">
        <div class="col">
            <input type="text" value="{{$data->course_title}}" name="course_title" class="form-control mb-4">
        </div>
        <div class="col">
            <input type="text" value="{{$data->course_fee}}" name="course_fee" class="form-control mb-4">
        </div>
    </div>
    <div class="form-row mb-4">
        <div class="col">
            <input type="text" value="{{$data->total_class}}" name="total_class" class="form-control mb-4">
        </div>
        <div class="col">
            <input type="text" value="{{$data->total_enroll}}" name="total_enroll" class="form-control mb-4">
        </div>
    </div>
    <div class="form-row mb-4">
        <div class="col">
            <input type="text" value="{{$data->course_link}}" name="course_link" class="form-control mb-4">
        </div>
        <div class="col">
            <input type="text" value="{{$data->course_img}}" name="course_img" class="form-control mb-4">
        </div>
    </div>
    <div class="form-group">
        <textarea name="course_des" class="form-control rounded-0"  rows="3">{{$data->course_des}}</textarea>
    </div>
    <button class="btn btn-info btn-block" type="submit">Update</button>
</form>
</div>
</div>
</div>
@endSection