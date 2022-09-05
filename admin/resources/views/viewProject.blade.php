@extends('Layout.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12 p-5">
    
<table id="" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
    <a class="btn btn-sm btn-danger" href="{{url('/project/create')}}">Add New</a>
    <h5 class="text-center p-3 text-success font-bold">{{Session::get('success')}}</h5>
  <thead>
    <tr>
        <th class="th-sm">Image</th>
        <th class="th-sm">Project Title</th>
	    <th class="th-sm">Project Description</th>
        <th class="th-sm">Action</th>
    </tr>
  </thead>
  <tbody>
	@forelse($data as $d)
    <tr>
      <th class="th-sm">{{$d->project_img}}</th>
	  <th class="th-sm">{{$d->project_name}}</th>
	  <th class="th-sm">{{$d->project_des}}</th>
	  <th class="th-sm d-flex">
      <button class="btn btn-info btn-sm"><a href="{{url('/project/'.$d->id.'/edit')}}"><i class="fas fa-edit"></i></a></button>
      <form action="{{ url('/project/'.$d->id) }}" method="post">
        <input type="hidden" name="_method" value="DELETE">
        @csrf
        <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
      </form>
      </th>
    </tr>
	@empty
    <tr>
      <td colspan="5" class="th-sm">No Items Found!!!</td>
    </tr>
	@endforelse
  </tbody>
</table>

</div>
</div>
</div>

@endSection
