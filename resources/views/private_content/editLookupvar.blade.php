@extends('master_private.app')
@section('private_content')
<div class="border-bottom mt-2">
   <h1 class="h2">Edit Lookup (Child): {{ $lookupvar->title }}</h1>
</div>
<div class="row">
   <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="row">
         <div class="col-lg-3 mx-auto">
            @if($lookupvar->varimg != '')
              <img src="{{ asset('images/' . $lookupvar->image) }}" width="100%">
            @endif
         </div>
      </div>
      <form class="mt-3" method="post" action="/admin/lookupvar/edit/{{ $lookupvar->id }}" enctype="multipart/form-data">
         @csrf
         <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" placeholder="Title" name="title" value="{{ $lookupvar->title }}">
         </div>
         <div class="form-row">
                  <div class="form-group col-md-6">
                     <label>Code <small class="text-danger">(Options)</small></label>
                     <input type="number" class="form-control" name="code" value="{{ $lookupvar->code }}">
                  </div>
                  <div class="form-group col-md-6">
                     <label>Link</label>
                     <input type="text" class="form-control" placeholder="Link" name="link" value="{{ $lookupvar->link }}">
                  </div>
               </div>
               <div class="form-group">
                  <label for="inputAddress">Thumbnail</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="image">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
               </div>

            <input type="hidden" name="mstid" value="{{ $lookupvar->id_mst }}">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/admin/lookupvar/{{ $lookupvar->id_mst }}" class="btn btn-danger">Back</a>
      </form>
   </div>
</div>
@stop