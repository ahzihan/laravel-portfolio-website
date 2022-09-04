@extends('Layout.app')

@section('content')

<div class="container">
<div class="row">
<div class="col-md-12 p-5">
<a class="btn btn-sm btn-danger" href="{{url('/project')}}">View All</a>
{{Session::get('success')}}
<form class="text-center" action="{{url('/project/'.$data->id)}}" method="post">
    <h4 class="mb-4">Update Project</h4>
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <input type="text" value="{{ $data->project_name }}" name="project_name" class="form-control mb-4" placeholder="Project Name">
    <input type="text" value="{{ $data->project_img }}" name="project_img" class="form-control mb-4" placeholder="Image link">
    <div class="form-group">
        <textarea name="project_des" class="form-control rounded-0" id="" rows="3" placeholder="Project Description">{{ $data->project_des }}</textarea>
    </div>
    <button class="btn btn-info btn-block" type="submit">Submit</button>
</form>

</div>
</div>
</div>
@endSection