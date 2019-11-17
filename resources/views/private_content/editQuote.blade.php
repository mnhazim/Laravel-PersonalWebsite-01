@extends('master_private.app')
@section('private_content')
<div class="border-bottom mt-2">
   <h1 class="h2">Edit Quote:</h1>
</div>
<div class="row">
   <div class="col-lg-8 col-md-8 col-sm-12">
      <form class="mt-3" method="post" action="/admin/quote/edit/{{ $quote->id }}" enctype="multipart/form-data">
         @csrf
         <div class="form-group">
            <label>Desc</label>
            <input type="text" class="form-control" placeholder="Desc" name="desc" value="{{ $quote->desc }}">
         </div>
         <div class="form-row">
                  <div class="form-group col-md-6">
                     <label>From</label>
                     <input type="text" class="form-control" name="from" value="{{ $quote->from }}">
                  </div>
                  <div class="form-group col-md-6">
                     <label>Status</label>
                     <select class="form-control" name="status">
                     @foreach($liststatus as $status)
                        <option value="{{ $status->code }}" {{ $status->code == $quote->status ? 'selected' : '' }}>{{ $status->title }}</option>
                     @endforeach
                  </select>
                     </div>
               </div>
            <input type="hidden" name="mstid" value="{{ $quote->id }}">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/admin/quote" class="btn btn-danger">Back</a>
      </form>
   </div>
</div>
@stop