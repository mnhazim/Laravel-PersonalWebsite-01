@extends('master_private.app')
@section('private_content')
<div class="border-bottom mt-2">
   <h1 class="h2">View Post: {{ $post->title }}</h1>
</div>
<div class="row py-3">
   <div class="col-lg-8 col-md-8 col-sm-12 mx-auto">
      <div class="row">
         <div class="col-lg-3 mx-auto">
            @if($post->image != '')
              <img src="{{ asset('images/' . $post->image) }}" width="100%">
            @endif
         </div>
      </div>
      <form class="mt-3">
         @csrf
         <div class="form-row">
            <div class="form-group col-md-6">
               <label >Type of Post</label>
               <input type="text" class="form-control" disabled value="{{ $post->typepost }}">
            </div>
            <div class="form-group col-md-6">
               <label>Title</label>
               <input type="text" class="form-control" disabled value="{{ $post->title }}">
            </div>
         </div>
         <div class="form-group">
            <label >Desc</label>
            <textarea class="form-control" rows="5">{{ $post->desc }}</textarea>
         </div>
         <div class="form-group">
            <label >Content</label>
            <textarea class="form-control" rows="5">{{ $post->content }}</textarea>
         </div>
         <div class="form-row">
            <div class="form-group col-md-4">
               <label >Place</label>
               <input type="text" class="form-control" disabled value="{{ $post->place }}">
            </div>
            <div class="form-group col-md-4">
               <label >Status</label>
               <input type="text" class="form-control" disabled value="{{ $post->status }}">
            </div>
            <div class="form-group col-md-4">
               <label >Created</label>
               <input type="text" class="form-control" disabled value="{{ $post->datepost }}">
            </div>
         </div>
         <a href="{{ URL::previous() }}" class="btn btn-danger"><span data-feather="corner-right-up"></span> Back</a>
      </form>
   </div>
</div>
@stop