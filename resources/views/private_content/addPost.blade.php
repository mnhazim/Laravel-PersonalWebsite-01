@extends('master_private.app')
@section('private_content')
<div class="border-bottom mt-2">
   <h1 class="h2">Add New Post</h1>
</div>
<div class="row my-3">
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
               <select class="form-control" name="typepost" required>
                  <option value="">Select..</option>
                  @foreach($listtypepost as $typepost)
                     <option value="{{ $typepost->id }}">{{ $typepost->title }}</option>
                  @endforeach
               </select>
            </div>
            <div class="form-group col-md-6">
               <label>Date Post</label>
               <input type="datetime-local" class="form-control" placeholder="title" name="datepost">
            </div>
         </div>
         <div class="form-group">
               <label>Title</label>
               <input type="text" class="form-control" placeholder="title" name="title" required>
            </div>
         <div class="form-group">
            <label >Desc</label>
            <textarea class="form-control" rows="5" name="desc" required></textarea>
         </div>
         <div class="form-group">
            <label >Content</label>
            <textarea class="form-control" rows="5" name="content" required></textarea>
         </div>
         <div class="form-row">
            <div class="form-group col-md-4">
               <label >Place</label>
               <select class="form-control" name="place" required>
                  <option value="">Select..</option>
                  @foreach($listplace as $place)
                     <option value="{{ $place->id }}">{{ $place->title }}</option>
                  @endforeach
               </select>
            </div>
            <div class="form-group col-md-4">
               <label >Status</label>
               <select class="form-control" name="status" required>
                  @foreach($liststatus as $status)
                     <option value="{{ $status->code }}">{{ $status->title }}</option>
                  @endforeach
               </select>
            </div>
            <div class="form-group col-md-4">
               <label >Thumbail</label>
               <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="image" required>
                  <label class="custom-file-label" >Thumbnail</label>
               </div>
            </div>
         </div>
         <button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-primary">Submit</button>
      </form>
   </div>
</div>
@stop