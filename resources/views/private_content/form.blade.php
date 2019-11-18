@extends('master_private.app')
@section('private_content')
<div class="border-bottom mt-2">
   <h1 class="h2">Manage Form</h1>
</div>

<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
   <h2>List Form</h2>
</div>
<div class="table-responsive">
   <table class="table table-striped table-sm">
      <thead>
         <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Desc</th>
            <th >Urgent ?</th>
            <th>Status</th>
            <th width="80">Action</th>
         </tr>
      </thead>
      <tbody>
         @php
         $i = 1
         @endphp
         @foreach ($form as $listform)
         <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $listform->name }}</td>
            <td>{{ $listform->email }}</td>
            <td>{{ str_limit($listform->desc) }}</td>
            <td class="{{ $listform->urgent == 0 ? 'text-success' : 'text-danger' }}">{{ $listform->urgent == 0 ? 'No' : 'Yes' }}</td>
            <td class="{{ $listform->status == 0 ? 'text-danger' : 'text-success' }}">{{ $listform->status == 0 ? 'Pending' : 'Delivered' }}</td>
            <td>
               <form class="btn-group mr-2" method="post" action="">
                  @csrf
                  <button type="submit" name="delete" class="btn btn-sm btn-outline-primary"><span data-feather='send'></span></button>
               </form>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</div>
@stop