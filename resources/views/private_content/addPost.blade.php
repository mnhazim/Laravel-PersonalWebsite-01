@extends('master_private.app')
@section('private_content')
<div class="border-bottom mt-2">
   <h1 class="h2">Add New Post</h1>
</div>
<div class="row">
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

      @if (Session::has('message'))
         <div class="alert alert-success">{{ Session::get('message') }}</div>
      @endif
      <form class="mt-3" method="post" action="/admin/post/add" enctype="multipart/form-data">
         @csrf
         <div class="form-row">
            <div class="form-group col-md-6">
               <label >Type of Post</label>
               <select class="form-control" name="typepost">
                  <option value="">Select..</option>
                  @foreach($listtypepost as $typepost)
                     <option value="{{ $typepost->id }}">{{ $typepost->title }}</option>
                  @endforeach
               </select>
            </div>
            <div class="form-group col-md-6">
               <label>Title</label>
               <input type="text" class="form-control" placeholder="title" name="title">
            </div>
         </div>
         <div class="form-group">
            <label >Desc</label>
            <textarea class="form-control" rows="5" name="desc"></textarea>
         </div>
         <div class="form-group">
            <label >Content</label>
            <textarea class="form-control" rows="5" name="content"></textarea>
         </div>
         <div class="form-row">
            <div class="form-group col-md-4">
               <label >Place</label>
               <select class="form-control" name="place">
                  <option value="">Select..</option>
                  @foreach($listplace as $place)
                     <option value="{{ $place->id }}">{{ $place->title }}</option>
                  @endforeach
               </select>
            </div>
            <div class="form-group col-md-4">
               <label >Status</label>
               <select class="form-control" name="status">
                  @foreach($liststatus as $status)
                     <option value="{{ $status->code }}">{{ $status->title }}</option>
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
         <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
</div>
@stop