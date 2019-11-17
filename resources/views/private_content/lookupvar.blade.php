@extends('master_private.app')
@section('private_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
   <h1 class="h2">Manage Lookupvar ({{ $msttitle->title }})</h1>
   <div class="btn-toolbar mb-2 mb-md-0">

      <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
      <span data-feather="plus-circle"></span>
      Add New 
      </button>
      <button type="button" class="btn btn-sm btn-outline-danger" onclick="window.location.href='/admin/lookup'">
      <span data-feather="corner-right-up"></span>
      Back
      </button>
   </div>
</div>
<div class="table-responsive">
   <table class="table table-striped table-sm text-center">
      <thead>
         <tr>
            <th>ID</th>
            <th>Code <small class="text-danger">(Options)</small></th>
            <th>Title</th>
            <th>Thumbnail</th>
            <th>Link</th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody >
         @if(count($lookupvarlist) > 0)
         @foreach($lookupvarlist as $list)
         <tr>
            <td>{{ $list->varid }}</td>
            <td>{{ $list->code }}</td>
            <td>{{ $list->vartitle }}</td>
            <td>
              @if($list->varimg != '')
              <img src="{{ asset('images/' . $list->varimg) }}" width="60">
              @else
              -
              @endif
            </td>
            <td>{{ $list->varlink != '' ? $list->varlink : '-' }}</td>
            <td>
               <form class="btn-group mr-2" method="post" action="/admin/lookupvar/delete/{{ $list->varid }}">
                  <a class="btn btn-sm btn-outline-info" href="/admin/lookupvar/edit/{{ $list->varid }}"><span data-feather='edit'></span></a>
                  @csrf
                  <button type="submit" name="delete" class="btn btn-sm btn-outline-danger" onclick="return confirm('Really bro ?. Make sure this child clear first.')"><span data-feather='trash-2'></span></button>
               </form>
            </td>
         </tr>
         @endforeach
         @else
         <tr>
            <td colspan="6">No Data Found</td>
         </tr>
         @endif
      </tbody>
   </table>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <form method="post" action="/admin/lookupvar/add" enctype="multipart/form-data">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">New Lookupvar({{ $msttitle->title }})</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               @csrf
               <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" placeholder="Title" name="title">
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label>Code <small class="text-danger">(Options) Need edit source code.</small></label>
                     <input type="number" class="form-control" name="code">
                  </div>
                  <div class="form-group col-md-6">
                     <label>Link</label>
                     <input type="text" class="form-control" placeholder="Link" name="link">
                  </div>
               </div>
               <div class="form-group">
                  <label for="inputAddress">Thumbnail</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="image">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
               </div>
            </div>
            <input type="hidden" name="mstid" value="{{ $msttitle->id }}">
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
         </form>
      </div>
   </div>
</div>
@stop