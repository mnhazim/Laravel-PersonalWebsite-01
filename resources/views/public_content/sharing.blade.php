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
   <div class="container-fluid wow" >
      <div class="row" style="height: 50vh">
         <div class="col-lg-6 px-0 order-lg-2 wow slideInRight " data-wow-duration="2s">
            <div class="background-holder" style="background-image: url(/../images/{{ $detailSharing->image }}); filter: blur(0px); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" > </div>
         </div>
         <div class="col-lg-6 wow slideInLeft " data-wow-duration="2s">
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
   <div class="container wow" >
      <div class="row">
         <div class="col-lg-8">
            <h2 class="display-4 pb-2 ">Latest Post</h2>
            @if(count($getSharing) > 0)
            @foreach($getSharing as $listSharing)
            <div class="mb-4 border-bottom wow slideInUp " data-wow-duration="2s">
               <img class="d-block w-100 mb-2 radius-primary" src="{{ asset('images/' . $listSharing->image) }}" alt="" width="100%">
               <a class="font-1 color-7" href="/sharing/{{ $listSharing->id }}">{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $listSharing->created_at)->format('M d, Y') }}</a>
               <a href="/sharing/{{ $listSharing->id }}">
                  <h4>{{ $listSharing->title }}</h4>
               </a>
               <p class="mt-2">{{ $listSharing->desc }}
               </p>
               <a href="/activity/{{ $listSharing->id }}">
                  <h6 class="mt-3 text-uppercase">read more ⟶</h6>
               </a>
            </div>
            @endforeach
            @else 
            <h5>No Data Found</h5>
            @endif
            <nav class="font-1" aria-label="Page navigation example">
               {{ $getSharing->links() }}
            </nav>
         </div>
         <div class="col-lg-4 mt-4">
            <div class="row px-2">
               <div class="col">
                  <div class="my-2">
                     <h3 class="">Top Hits</h3>
                     @if(count($topHit) > 0)
                     @foreach($topHit as $listhit)
                     <div class="wow slideInRight " data-wow-duration="2s">
                        <a href="/sharing/{{ $listhit->id }}">
                           <img class="mt-3 radius-primary" src="{{ asset('images/' . $listhit->image) }}" width="100%" alt="">
                           <h6 class="fs-0 mt-3">{{ $listhit->title }}</h6>
                        </a>
                     </div>
                     @endforeach
                     @else
                     <h5>No Data Found</h5>
                     @endif
                  </div>
                  <hr>
                  <div class="my-2">
                     <h5>Categories</h5>
                     <ul class="nav tags mt-3 fs--1">
                        @foreach($listTagAct as $tagAct)
                        <li class="wow slideInUp " data-wow-duration="2s">
                           <a class="btn btn-sm btn-outline-secondary m-1" href="/{{ $tagAct->code }}">{{ $tagAct->title }}</a>
                        </li>
                        @endforeach
                     </ul>
                  </div>
                  <hr>
               </div>
            </div>
         </div>
      </div>
      <!--/.row-->
   </div>
   <!--/.container-->
</section>
<section class="py-4 wow" >
   <div class="container">
      <div class="row m-0">
         <div class="col-lg-12 py-2">
            <h3>Other Category</h3>
         </div>
         @php
         $num4 = 1;
         @endphp
         @foreach($randomAct as $ranlist)
         <div class="col-sm-6 col-lg-3 wow slideInLeft " data-wow-duration="2s" >
            <a href="#">
               <img class="w-100 radius-primary" src="{{ asset('images/'. $ranlist->image) }}" width="100%" alt="" style="filter: blur(0px); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
               <h6 class="d-inline-block ls fw-500 mb-0 mt-3 color-6">{{ $ranlist->typepost }}</h6>
               <h5>{{ $ranlist->title }}</h5>
               <p class="color-5 d-inline-block">{{ $ranlist->desc }}</p>
            </a>
         </div>
         @endforeach
      </div>
      <!--/.row-->
   </div>
   <!--/.container-->
</section>
@stop