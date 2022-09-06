@extends('Layout.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12 p-5">
    
<table id="VisitorDt" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
    <a class="btn btn-sm btn-danger" href="{{url('/create')}}">Add New</a>
    <h5 class="text-center p-3 text-success font-bold">{{Session::get('success')}}</h5>
  <thead>
    <tr>
        <th class="th-sm">Image</th>
        <th class="th-sm">Course Title</th>
	      <th class="th-sm">Description</th>
	      <th class="th-sm">Fee</th>
	      <th class="th-sm">Total Class</th>
        <th class="th-sm">Edit</th>
        <th class="th-sm">Delete</th>
    </tr>
  </thead>
  <tbody>
	@forelse($data as $d)
    <tr>
      <th class="th-sm">{{$d->course_img}}</th>
      <th class="th-sm">{{$d->course_title}}</th>
      <th class="th-sm">{{$d->course_des}}</th>
      <th class="th-sm">{{$d->course_fee}}</th>
      <th class="th-sm">{{$d->total_class}}</th>
      <th class="th-sm"><a href="{{url('/edit/'.$d->id)}}"><i class="fas fa-edit"></i></a></th>
      <th class="th-sm"><a onclick="return confirm('Are you Sure?')" href="{{url('/destroy/'.$d->id)}}"><i class="fas fa-trash-alt"></i></a></th>
    </tr>
	@empty
    <tr>
      <td colspan="7" class="th-sm text-center">No Items Found!!!</td>
    </tr>
	@endforelse
  </tbody>
</table>

</div>
</div>
</div>

@endSection
