@extends('master_private.app')
@section('private_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
   <h1 class="h2">Manage Lookup (Master)</h1>
   <div class="btn-toolbar mb-2 mb-md-0">
      <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
      <span data-feather="plus-circle"></span>
      Add New 
      </button>
   </div>
</div>
<div class="table-responsive">
   <table class="table table-striped table-sm text-center">
      <thead>
         <tr>
            <th>ID (Mst)</th>
            <th>Title</th>
            <th>Created At</th>
            <th>Update At</th>
            <th>Total Child</th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody >
         @foreach($lookup as $listlookup)
         <tr>
            <td>{{ $listlookup->mstid }}</td>
            <td>{{ $listlookup->title }}</td>
            <td>{{ \Carbon\Carbon::parse($listlookup->created_at)->diffForHumans() }}</td>
            <td>{{ \Carbon\Carbon::parse($listlookup->updated_at)->diffForHumans() }}</td>
            <td>{{ $listlookup->totalcount }}</td>
            <td>
               <form class="btn-group mr-2" method="post" action="/admin/lookup/delete/{{ $listlookup->mstid }}">
                  <a class="btn btn-sm btn-outline-primary" href="/admin/lookupvar/{{ $listlookup->mstid }}"><span data-feather='upload-cloud'></span></a>
                  <a class="btn btn-sm btn-outline-info" href="/admin/lookup/edit/{{ $listlookup->mstid }}"><span data-feather='edit'></span></a>
                  @csrf
                  <button type="submit" name="delete" class="btn btn-sm btn-outline-danger" onclick="return confirm('Really bro ?. Make sure this child clear first.')"><span data-feather='trash-2'></span></button>
               </form>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="post" action="/admin/lookup/add">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Lookup Master</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
         @csrf
          <div class="form-group">
            <label class="col-form-label">Title:</label>
            <input type="text" name="title" class="form-control">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
@stop