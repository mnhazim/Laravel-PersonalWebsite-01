@extends('master_private.app')
@section('private_content')
<div class="border-bottom mt-2">
   <h1 class="h2">Edit Post ({{ $posts->typepost }}): {{ $posts->title }}</h1>
</div>
<div class="row py-3">
   <div class="col-lg-8 col-md-8 col-sm-12 mx-auto">
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <div class="row">
         <div class="col-lg-3 mx-auto">
            @if($posts->image != '')
              <img src="{{ asset('images/' . $posts->image) }}" width="100%">
            @else
            <h4 class="text-danger">No Image</h4>
            @endif
         </div>
      </div>
      <form class="mt-3" method="post" action="/admin/post/edit/{{ $posts->id }}" enctype="multipart/form-data">
         @csrf
         <div class="form-row">
            <div class="form-group col-md-7">
               <label for="inputEmail4">Title</label>
               <input type="text" class="form-control" value="{{ $posts->title }}" name="title">
            </div>
            <div class="form-group col-md-5">
               <label for="inputEmail4">Date Post</label>
               <input type="datetime-local" class="form-control" value="{{ date('Y-m-d\TH:i:s',strtotime($posts->datepost)) }}" name="datepost">
            </div>
         </div>
         <div class="form-group">
            <label for="inputAddress">Desc</label>
            <textarea class="form-control" rows="5" name="desc">{{ $posts->desc }}</textarea>
         </div>
         <div class="form-group">
            <label for="inputAddress2">Content</label>
            <textarea class="form-control" rows="5" name="content">{{ $posts->content }}</textarea>
         </div>
         <div class="form-row">
            <div class="form-group col-md-4">
               <label >Place</label>
               <select class="form-control" name="place">
                  <option value="">Select..</option>
                  @foreach($listplace as $place)
                     <option value="{{ $place->id }}" {{ $place->id == $posts->place ? 'selected' : '' }}>{{ $place->title }}</option>
                  @endforeach
               </select>
            </div>
            <div class="form-group col-md-4">
               <label >Status</label>
               <select class="form-control" name="status">
                  @foreach($liststatus as $status)
                     <option value="{{ $status->code }}" {{ $status->code == $posts->status ? 'selected' : '' }}>{{ $status->title }}</option>
                  @endforeach
               </select>
            </div>
            <div class="form-group col-md-4">
               <label >Thumbail</label>
               <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="image">
                  <label class="custom-file-label" >Thumbnail</label>
               </div>
            </div>
         </div>
         <button type="submit" class="btn btn-primary">Update</button>
      </form>
   </div>
</div>
@stop