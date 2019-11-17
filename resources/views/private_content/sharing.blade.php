@extends('master_private.app')
@section('private_content')
<div class="border-bottom mt-2">
   <h1 class="h2">Manage Sharing</h1>
</div>

<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
<div class="table-responsive">
   <table class="table table-striped table-sm">
      <thead>
         <tr>
            <th>#</th>
            <th>Thumbnail</th>
            <th>Title</th>
            <th>Desc</th>
            <th >Visitor</th>
            <th width="80">Action</th>
         </tr>
      </thead>
      <tbody>
         @php
         $i = 1
         @endphp
         @foreach ($sharing as $listsharing)
         <tr>
            <td>{{ $i++ }}</td>
            <td>
               @if($listsharing->image != '')
              <img src="{{ asset('images/' . $listsharing->image) }}" width="100" >
              @else
              <small class="text-danger">No Image</small>
              @endif
              </td>
            <td>{{ $listsharing->title }}</td>
            <td>{{ str_limit($listsharing->desc) }}</td>
            <td class="text-danger">{{ $listsharing->visitor }}</td>
            <td>
               <form class="btn-group mr-2" method="post" action="/admin/post/delete/{{ $listsharing->postid }}">
                  <a class="btn btn-sm btn-outline-primary" href="/admin/post/view/{{ $listsharing->postid }}"><span data-feather='eye'></span></a>
                  <a class="btn btn-sm btn-outline-info" href="/admin/post/edit/{{ $listsharing->postid }}"><span data-feather='edit'></span></a>
                  @csrf
                  <button type="submit" name="delete" class="btn btn-sm btn-outline-danger" onclick="return confirm('Really bro ?. Think cook-cook bro.')"><span data-feather='trash-2'></span></button>
               </form>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</div>
@stop