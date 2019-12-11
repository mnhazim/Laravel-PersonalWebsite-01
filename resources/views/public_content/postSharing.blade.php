@extends('master_public.app')
@section('content')
<!-- 1 SECTION START -->
<style type="text/css">
   .background-holder {
   position: absolute;
   width: 100%;
   min-height: 100%;
   top: 0;
   left: 0;
   background-size: cover;
   background-position: center;
   z-index: -1;
   overflow: hidden;
   will-change: transform, opacity, filter;
   -webkit-backface-visibility: hidden;
   backface-visibility: hidden;
   background-repeat: no-repeat;
   }
</style>
<section class="py-0" id="header-split-static">
   <div class="container-fluid wow">
      <div class="row" style="height: 50vh">
         <div class="col-lg-6 px-0 order-lg-2 wow slideInRight " >
            <div class="background-holder" style="background-image: url(/../images/{{ $detailSharing->image }}); filter: blur(0px); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" > </div>
         </div>
         <div class="col-lg-6 wow slideInDown " >
            <div class="row h-100 align-items-center justify-content-center">
               <div class="col-lg-10 py-6 py-lg-8">
                  <h1 class="fw-300 text-uppercase fs-2 fs-sm-4">
                     <a href="{{ Route('home') }}">
                        <div class="overflow-hidden">
                           <img src="{{ asset('images/icon/i_logoH.png') }}" width="50">
                        </div>
                     </a>
                     <div class="overflow-hidden">
                        <span class="d-block mt-2" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">{{ $detailSharing->title }}</span>
                     </div>
                  </h1>
                  <div class="overflow-hidden">
                     <h6 class="text-uppercase mt-4" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">{{ $detailSharing->second_title }}</h6>
                  </div>
                  <div style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                     <a class="btn btn-outline-secondary btn-sm mt-1" href="{{ Route('home') }}">Home</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--/.row-->
   </div>
   <!--/.container-->
</section>
<section>
   <div class="container wow">
      <div class="row mt-4">
         <div class="col-lg-8 ">
            <div class="row mb-3">
               <div class="col-12 wow slideInUp " >
                  <div class="row ">
                     <div class="col">
                        <a class="font-1 color-7" href="#">{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $getPost->created_at)->format('M d, Y') }}</a>
                     </div>
                  </div>
                  <h4 class="mt-2">{{ $getPost->title }}</h4>
                  <img class="d-block mt-3 w-100" src="{{ asset('images/'. $getPost->image) }}" alt="" width="100%">
                  <p>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $getPost->datepost)->format('M d, Y h:i a') }} | <span data-feather='eye' style="width: 16px;"></span><small>&nbsp;{{ $getPost->visitor != 0 ? $getPost->visitor : '0' }}</small></p>
                  <!-- Content Post --> 
                  {!! $getPost->content !!}
                  <!-- End Content Post -->
                  <div class="row mt-5 fs-1 align-items-center">
                     <div class="col-auto">
                        <h6 class="mb-0">Share on</h6>
                     </div>
                  </div>
                  <div id="share"></div>
               </div>
               <div class="col-12 mt-2">
                  <h4 class="mb-4">Other Category</h4>
               </div>
               @foreach($randomAct as $ranlist)
               <div class="col-sm-6 col-lg-4 wow slideInRight " >
                  <a href="/{{ $ranlist->code. '/'. $ranlist->id }}">
                     <img class="w-100 radius-primary" src="{{ asset('images/'. $ranlist->image) }}" width="100%" alt="" style="filter: blur(0px); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                     <h6 class="d-inline-block ls fw-500 mb-0 mt-3 color-6">{{ $ranlist->typepost }}</h6>
                     <h5>{{ $ranlist->title }}</h5>
                  </a>
               </div>
               @endforeach
            </div>
         </div>
         <div class="col-lg-4 mt-6 mt-lg-0 pl-lg-7">
            <div class="row px-2">
               <div class="col">
                  <h5 class="mt-5">Popular</h5>
                  @if(count($topHit) > 0)
                  @foreach($topHit as $listhit)
                  <div class="wow slideInRight " >
                     <a href="/sharing/{{ $listhit->id }}">
                        <img class="mt-3 radius-primary" src="{{ asset('images/' . $listhit->image) }}" width="100%" alt="">
                        <h6 class="fs-0 mt-3">{{ $listhit->title }}</h6>
                     </a>
                  </div>
                  @endforeach
                  @else
                  <h5>No Data Found</h5>
                  @endif
                  <div class="mt-6">
                     <h5>Categories</h5>
                     <ul class="nav tags mt-3 fs--1">
                         @foreach($listTagAct as $tagAct)
                        <li  class="wow slideInLeft " >
                           <a class="btn btn-sm btn-outline-secondary m-1" href="/{{ $tagAct->code }}">{{ $tagAct->title }}</a>
                        </li>
                        @endforeach
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--/.row-->
   </div>
   <!--/.container-->
</section>
@stop