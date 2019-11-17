@extends('master_private.app')
@section('private_content')
<div class="border-bottom mt-2">
   <h1 class="h2">Edit Lookup (Master): {{ $lookupmst->title }}</h1>
</div>
<div class="row">
   <div class="col-lg-8 col-md-8 col-sm-12">
      <form class="mt-3" method="post" action="/admin/lookup/edit/{{ $lookupmst->id }}">
         @csrf
         <div class="form-row">
            <div class="form-group col-md-12">
               <label for="inputEmail4">Title</label>
               <input type="text" name="title" class="form-control" value="{{ $lookupmst->title }}">
            </div>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
         <a href="{{ URL::previous() }}" class="btn btn-danger">Back</a>
      </form>
   </div>
</div>
@stop