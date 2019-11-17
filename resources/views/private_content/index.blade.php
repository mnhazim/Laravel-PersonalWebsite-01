@extends('master_private.app')
@section('private_content')
<div class="border-bottom mt-2">
   <h1 class="h2">Dashboard</h1>
</div>

<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
   <h2>Latest Post</h2>
</div>
<div class="table-responsive">
   <table class="table table-striped table-sm">
      <thead>
         <tr>
            <th>#</th>
            <th>Thumbnail</th>
            <th>Type Post</th>
            <th>Title</th>
            <th >Visitor</th>
            <th>Date Created</th>
         </tr>
      </thead>
      <tbody>
         @php
         $i = 1
         @endphp
         @foreach ($posts as $listposts)
         <tr>
            <td>{{ $i++ }}</td>
            <td>
               @if($listposts->image != '')
              <img src="{{ asset('images/' . $listposts->image) }}" width="100" >
              @else
              <small class="text-danger">No Image</small>
              @endif
              </td>
              <td>{{ str_limit($listposts->typepost) }}</td>
            <td>{{ $listposts->title }}</td>
            <td class="text-danger">{{ $listposts->visitor }}</td>
            <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $listposts->created_at)->format('d M Y') }}</td>
         </tr>
         @endforeach
      </tbody>
   </table>
</div>
@stop