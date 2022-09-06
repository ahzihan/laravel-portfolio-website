@extends('Layout.app')

@section('content')
<div id="main-div" class="container d-none">
<div class="row">
<div class="col-md-12 p-5">
<table id="serviceDataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Image</th>
      <th class="th-sm">Name</th>
      <th class="th-sm">Description</th>
      <th class="th-sm">Edit</th>
      <th class="th-sm">Delete</th>
    </tr>
  </thead>
  <tbody id="services_table">
  
  </tbody>
</table>

</div>
</div>
</div>


<div id="loading" class="container">
<div class="row">
<div class="col-md-12 p-5 text-center mt-5">
    <img src="{{asset('images/Spinner.gif')}}" alt="loading">
</div>
</div>
</div>

<div id="no_item" class="container d-none">
<div class="row">
<div class="col-md-12 p-5">
    <h3 class="text-center">No Items Found!</h3>
</div>
</div>
</div>




<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body text-center p-3 mt-3">
        <h5>Are you sure?</h5>
        <h6>You want to delete.</h6>
        <h5 id="serviceDeleteId"></h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">No</button>
        <button id="confirmDelete" data-id="" type="button" class="btn btn-sm btn-danger">Yes</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body text-center p-3 mt-3">
        <h3 class="text-center">Service Update Form</h3>
        <h5 class="text-center" id="serviceEditId"></h5>
          <div id="serviceUpdateForm" class="d-none">
            <input type="text" id="serviceName" class="form-control mb-4" placeholder="Service Name">
            <div class="form-group">
                <textarea class="form-control rounded-0" id="serviceDes" rows="3" placeholder="Description"></textarea>
            </div>
            <input type="text" id="serviceImg" class="form-control mb-4" placeholder="Image Link">
          </div>
        </div>
        
        <img id="serviceEditLoading" src="{{asset('images/Spinner.gif')}}" alt="loading">
        <h3 id="serviceDataEmpty" class="text-center d-none">No Items Found!</h3>

      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
        <button id="confirmUpdateBtn" type="button" class="btn btn-sm btn-info">Update</button>
      </div>
    </div>
  </div>
</div>


@endSection

@section('script')
<script type="text/javascript">
    getServicesData();
</script>
@endSection