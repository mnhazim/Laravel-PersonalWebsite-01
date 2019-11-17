@extends('master_private.app')
@section('private_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
   <h1 class="h2">Manage Quote</h1>
   <div class="btn-toolbar mb-2 mb-md-0">
      <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
      <span data-feather="plus-circle"></span>
      Add New 
      </button>
   </div>
</div>

<div class="table-responsive">
   <table class="table table-striped table-sm">
      <thead>
         <tr>
            <th>#</th>
            <th>Desc</th>
            <th>From</th>
            <th >Status</th>
            <th>Date Created</th>
            <th width="80">Action</th>
         </tr>
      </thead>
      <tbody>
         @php
         $i = 1
         @endphp
         @foreach ($quotes as $listquotes)
         <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $listquotes->desc }}</td>
            <td>{{ str_limit($listquotes->from) }}</td>
            <td class="{{ $listquotes->statuscode == 2 ? 'text-danger' : 'text-success' }}">{{ $listquotes->status }}</td>
            <td>{{ \Carbon\Carbon::parse($listquotes->created_at)->diffForHumans() }}</td>
            <td>
               <form class="btn-group mr-2" method="post" action="/admin/quote/delete/{{ $listquotes->id }}">
                  <a class="btn btn-sm btn-outline-info" href="/admin/quote/edit/{{ $listquotes->id }}"><span data-feather='edit'></span></a>
                  @csrf
                  <button type="submit" name="delete" class="btn btn-sm btn-outline-danger" onclick="return confirm('Really bro ?. Think cook-cook bro.')"><span data-feather='trash-2'></span></button>
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
      <form method="post" action="/admin/quote/add">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Quote</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
         @csrf
          <div class="form-group">
            <label class="col-form-label">Your Quote:</label>
            <input type="text" name="desc" class="form-control" placeholder="Never Give Up">
          </div>
          <div class="form-group">
            <label class="col-form-label">From:</label>
            <input type="text" name="from" class="form-control" placeholder="BrotherHood">
          </div>
          <div class="form-group">
            <label class="col-form-label">Status:</label>
            <select class="form-control" name="status">
              @foreach($liststatus as $status)
              <option value="{{ $status->code }}">{{ $status->title }}</option>
              @endforeach
            </select>
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