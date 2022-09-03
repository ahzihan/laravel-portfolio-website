@extends('Layout.app')

@section('content')
{{Session::get('success')}}
<form class="text-center border border-light p-5" action="{{url('/update')}}" method="post">
    <p class="h4 mb-4">Update Course</p>
    @csrf
    <input type="hidden" value="{{$data->id}}" name="id">
    <input type="text" value="{{$data->course_title}}" name="course_title" class="form-control mb-4" placeholder="Course Title">
    <input type="text" value="{{$data->course_img}}" name="course_img" class="form-control mb-4" placeholder="Image link">
    <div class="form-group">
        <textarea name="course_sub_title" class="form-control rounded-0"  rows="3" placeholder="Sub title">{{$data->course_sub_title}}</textarea>
    </div>
    <button class="btn btn-info btn-block" type="submit">Update</button>
</form>
@endSection