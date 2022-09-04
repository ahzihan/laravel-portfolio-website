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
        <th class="th-sm">Edit</th>
        <th class="th-sm">Delete</th>
    </tr>
  </thead>
  <tbody>
	@forelse($data as $d)
    <tr>
      <th class="th-sm">{{$d->project_img}}</th>
	  <th class="th-sm">{{$d->project_name}}</th>
	  <th class="th-sm">{{$d->project_des}}</th>
	  <th class="th-sm"><a href="{{url('/project/'.$d->id.'/edit')}}"><i class="fas fa-edit"></i></a></th>
	  <th class="th-sm"><a onclick="return confirm('Are you Sure?')" href="{{url('/project/'.$d->id.'/delete')}}"><i class="fas fa-trash-alt"></i></a></th>
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
