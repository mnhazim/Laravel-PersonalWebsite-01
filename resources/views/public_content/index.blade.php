@extends('master_public.app')
@section('content')
<!-- 1 SECTION START -->
<section class="py-0">
   <div class="container-fluid wow"  style="height: 100vh;background-color: black;" id="vantanet">
      <!-- Github Link -->
      <div class="row mx-3 p-3 wow zoomInDown " data-wow-duration="3s" >
         <a class="col-lg-4 mx-auto text-white text-center d-flex justify-content-center p-1" href="https://github.com/mnhazim" target="_blank">
            <img class="px-1" src="images/github-logo.png" height="30">
            <h4 class="px-1" style="font-family: bauhaus">Github</h4>
         </a>
      </div>
      <!-- Text In The Middle -->
      <div class="row mx-3 align-items-end h-50 wow slideInUp" data-wow-duration="2s"  style="margin-top: -45px;">
         <div class="col-lg-12 mx-auto text-center text-white">
            <h2 class="main-title">{{ $owner->title }}</h2>
            <small style="font-family: bauhaus;font-size: 20px;">{{ $owner->position }}</small>
         </div>
      </div>
      <div class="row align-items-end h-25 wow zoomInUp " data-wow-duration="4s" >
         <div class="col-lg-4 mx-auto text-center text-white">
            <div class="font-italictext-white">
               <p class="text-center" style="font-size: 30px;font-family: bauhaus;">{{ $owner->scndsub }}</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- 1 SECTION END -->
<!-- 2 SECTION START -->
<section class="py-0">

   <div class="container wow"  id="home" style="padding-top: 7.5rem;padding-bottom: 7.5rem;">
      <div class="row align-items-center "  id="vantabird">
         <div class="col-sm-8 col-lg-10 col-xl-4 text-xl-right mt-5 mt-xl-0 order-lg-1 order-2 pr-xl-4 wow slideInLeft " data-wow-duration="2s" >
            <div class="overflow-hidden ">
               <p class="font-italic lead" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">{{ $owner->desc }}
                  <br class="d-none d-sm-block"><a href="{{ Route('about') }}" class="btn btn-outline-secondary"><strong>About Me ?</strong></a>
               </p>
            </div>
         </div>
         <div class="pop col-sm-8 col-lg-5 col-xl-4 mt-4 mt-xl-0 px-xl-4 order-lg-2 wow slideInUp" data-wow-duration="3s">
            <img class="w-100 radius-primary " src="images/try23.png" alt="" style="filter: blur(0px); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
         </div>
         <div class="col-sm-8 col-lg-5 col-xl-4 mt-5 mt-xl-0 order-3 align-self-lg-start align-self-xl-center pl-xl-4 wow slideInRight " data-wow-duration="2s">
            <div class="overflow-hidden">
               <h5 class="mb-3" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">{{ $owner->name }}</h5>
            </div>
            <div class="overflow-hidden">
               <p style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">{{ $owner->email }} <br>{{ $owner->notel }}</p>
               <p class="intro-subtitle"><span class="text-slider-items" style="display: none;">{{ $owner->positions }}</span><strong class="text-slider"></strong></p>
               <div class="py-2 mx-auto">
                  <a href="https://github.com/mnhazim" class="" target="_blank"><img src="images/icon/i-git.png" height="50"></a>
                  <a href="#" class=""><img src="images/icon/i-in.png" height="50"></a>
                  <a href="https://instagram.com/mnhazim__" class="" target="_blank"><img src="images/icon/i_ig.png" height="50"></a>
               </div>
            </div>
         </div>
      </div>
      <div class="row align-items-center" style="padding-top: 100px;">
         <div class="col-lg-12 mx-auto text-center wow zoomInUp " data-wow-duration="2s">
            <div class="font-italic one-time text-dark">
               @foreach ($quote as $listquote)
               <blockquote class="blockquote text-center">
                 <p class="mb-0">" {{$listquote->desc}} "</p>
                 <footer class="blockquote-footer"><cite title="Source Title">{{$listquote->from}}</cite></footer>
               </blockquote>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
<!-- 2 SECTION END -->
<!-- 3 SECTION START -->
<section class="py-0">
   <div class="container-fluid wow"  style="background-color: black;">
      <div id="sharing" class="container" >
         <div class="row">
            <div class="col-lg-12" style="margin-top: 80px;margin-bottom: 80px;">
               <h1 class="text-white text-center" style="font-size: 50px;font-family: romerio;">I Learned About Web Development, Internet of Things, Cyber Security and More.</h1>
            </div>
         </div>
         <div class="row justify-content-md-center">
            @foreach($categories as $category)
            <div class="col-lg-4 wow slideInUp " data-wow-duration="2s">
               <div class="work-box">
                  <a href="/category/{{ $category->code }}" data-lightbox="gallery-mf">
                     <div class="work-img">
                        <img src="{{ asset('images/' . $category->image) }}" alt="" class="img-fluid" width="100%">
                     </div>
                     <div class="work-content">
                        <div class="row">
                           <div class="col-sm-8">
                              <h2 class="w-title">{{ $category->title }}</h2>
                              <div class="w-more">
                                 <span class="w-ctegory"><span data-feather='layers' class="text-info" style="width: 15px;"></span> {{ $category->totalcount }}</span> / <span class="w-date"><span data-feather='eye' class="text-danger" style="width: 15px;"></span> {!! $category->visitor != '' ? number_format($category->visitor, 0) : '0'!!}</span>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div class="w-like">
                                 <span class="ion-ios-plus-outline"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            @endforeach
         </div>
         <div class="row">
            <div class="col-lg-12 my-4">
               <center><a href="/category" class="btn btn-outline-danger btn-sm">See More</a></center>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- 3 SECTION END -->
<!-- 4 SECTION START -->
<section class="py-0" id="portfolio" style="background-color: white;">
   <div class="container wow" >
      <div class="row py-4">
         <div class="col-sm-12">
            <div class="title-box text-center">
               <h3 class="title-a">
                  Latest Activity
               </h3>
               <p class="subtitle-a">
                  Program, meeting, talk session, training and more.
               </p>
               <div class="line-mf"></div>
            </div>
         </div>
      </div>
      <div class="row m-0">
         @if(count($activity) > 0)
         @foreach ($activity as $listact)
         <div class="col-sm-6 col-lg-3 wow slideInUp " data-wow-duration="2s"  >
            <div class="work-box h-100">
               <a href="/activity/{{ $listact->postid }}" data-lightbox="gallery-mf">
                  <div class="work-img">
                     @if($listact->image != '')
                     <img src="{{ asset('images/' . $listact->image) }}" alt="" class="img-fluid" width="100%">
                     @else
                     <img src="images/default.png" alt="" class="img-fluid" width="100%">
                     @endif
                  </div>
                  <div class="work-content ">
                     <div class="row">
                        <div class="col-sm-12">
                           <h2 class="w-title">{{ str_limit($listact->title) }}</h2>
                           <div class="w-more">
                              <p>{{ str_limit($listact->desc) }}</p>
                              <span class="w-date">{{ \Carbon\Carbon::parse($listact->datepost)->diffForHumans() }}</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         @endforeach
         @else
         <h5 class="text-center">No Activity Found</h5>
         @endif
      </div>
      <div class="row">
         <div class="col-lg-12 my-4">
            <center><a href="/activity" class="btn btn-outline-secondary btn-sm">See More</a></center>
         </div>
      </div>
      <!--Grid row-->
   </div>
</section>
<!-- 4 SECTION END -->
<!-- 5 SECTION START -->
<section class="py-0" id="sharing" style="background-color: #fafafa;">
   <div class="container wow" >
      <div class="row py-4">
         <div class="col-sm-12">
            <div class="title-box text-center">
               <h3 class="title-a">
                  Sharing
               </h3>
               <p class="subtitle-a">
                  Any Info, Code Snippet, Knowledge and Anything else.
               </p>
               <div class="line-mf"></div>
            </div>
         </div>
      </div>
      <div class="row justify-content-between">
         @if(count($sharings) > 0)
         @foreach ($sharings as $listshare)
         <div class="col-lg-4 wow slideInUp " data-wow-duration="2s"  >
            <div class="work-box bg-transparent">
               <a href="/sharing/{{ $listshare->postid }}" data-lightbox="gallery-mf">
                  <div class="work-img">
                     @if($listshare->image != '')
                     <img src="{{ asset('images/' . $listshare->image) }}" alt="" class="img-fluid" width="100%">
                     @else
                     <img src="images/default.png" alt="" class="img-fluid" width="100%">
                     @endif
                  </div>
                  <div class="work-content">
                     <div class="overflow-hidden">
                        <small class="d-inline-block ls fw-500 mb-0 mt-3 color-6 ml-auto">{{ \Carbon\Carbon::parse($listshare->datepost)->diffForHumans() }}</small>
                        <h5 class="mt-4" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">{{ str_limit($listshare->title) }}</h5>
                     </div>
                     <div class="overflow-hidden">
                        <p style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">{{ str_limit($listshare->desc) }}</p>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         @endforeach
         @else
         <h5 class="text-center">No Sharing Found</h5>
         @endif
      </div>
      <div class="row">
         <div class="col-lg-12 my-4">
            <center><a href="/sharing" class="btn btn-outline-secondary btn-sm">See More</a></center>
         </div>
      </div>
   </div>
</section>
<!-- 5 SECTION END -->
<!-- 6 SECTION START -->
<section class="py-4 wow">
   <div class="container wow" >
      <div class="row">
         <div class="col-lg-6 background-white py-6 py-lg-8 wow slideInLeft " data-wow-duration="2s" >
            <div class="row h-100 align-items-center justify-content-center">
               <div class="col-sm-11 col-md-8 col-lg-10 col-xl-9 px-5">
                  <div class="mb-5 mb-lg-7 oveflow-hidden">
                     <h2 style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">So, Collaborate Now?</h2>
                  </div>
                  <div class="media mb-5 card-service" >
                     <div class="oveflow-hidden">
                        <img class="mr-3 mr-sm-4" src="images/icon/i_fyp.png" alt="" width="50" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                     </div>
                     <div class="media-body">
                        <div class="overflow-hidden">
                           <h5 class="mb-2" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">Final Year Project.</h5>
                        </div>
                        <div class="overflow-hidden">
                           <p class="mb-0" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">Build project based on your requirement and scope; giving you basic and simple code for easy to understand.</p>
                        </div>
                     </div>
                  </div>
                  <div class="media mb-5 card-service" >
                     <div class="oveflow-hidden">
                        <img class="mr-3 mr-sm-4" src="images/icon/i_pg.png" alt="" width="50" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                     </div>
                     <div class="media-body">
                        <div class="overflow-hidden">
                           <h5 class="mb-2" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">Personal Guide.</h5>
                        </div>
                        <div class="overflow-hidden">
                           <p class="mb-0" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">Database structure, flow, resources and deep explaination to make your project complete smooth.</p>
                        </div>
                     </div>
                  </div>
                  <div class="media mb-5 card-service" >
                     <div class="oveflow-hidden">
                        <img class="mr-3 mr-sm-4" src="images/icon/i_job.png" alt="" width="50" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                     </div>
                     <div class="media-body">
                        <div class="overflow-hidden">
                           <h5 class="mb-2" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">Job Vacancy.</h5>
                        </div>
                        <div class="overflow-hidden">
                           <p class="mb-0" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">'Life is a long <strong class="text-danger">journey</strong>, with problems to <strong class="text-danger">solve</strong>, lessons to <strong class="text-danger">learn</strong>, but most of all, experiences to <strong class="text-success">enjoy</strong>'.So, Hire me ?.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 background-white py-6 py-lg-8 wow slideInRight " >
            <div class="row h-100 align-items-center justify-content-center">
               <div class="col-sm-8 col-md-6 col-lg-12 col-xl-8" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                  @if (Session::has('message'))
                  <div class="alert alert-success">{{ Session::get('message') }}</div>
                  @endif
                  @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
                  @endif
                  <h3 class="lh-1 fs-2 fs-md-3">Perfect for Students,
                     <br>Beginner &amp; You.
                  </h3>
                  <h6 class="text-success mt-3">I will response within 3 working days. ok?</h6>
                  <form class="mt-5" method="post" action="{{ Route('formSubmit') }}">
                     @csrf
                     <div class="row mb-4">
                        <div class="col">
                           <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" placeholder="Your Name" name="name" value="{{ old('name') }}" required> 
                        </div>
                     </div>
                     <div class="row mb-4">
                        <div class="col">
                           <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required> 
                        </div>
                     </div>
                     <div class="row mb-4">
                        <div class="col">
                           <textarea rows="4" class="form-control{{ $errors->has('desc') ? ' is-invalid' : '' }}" name="desc" required>{{ old('desc') == '' ? 'Whats up ?' : old('desc') }}</textarea>
                           <small class="text-danger">**180 Character Only</small>
                        </div>
                     </div>
                     <div class="row mb-4">
                        <div class="col">
                           <label class="text-dark"><strong>Enter Captcha.</strong></label>
                           <div class="d-flex col-md-6 captcha p-2">
                              <span class="mr-2">{!! captcha_img() !!}</span>
                              <button type="button" class="btn btn-sm btn-outline-danger" id="caprefresh"><span data-feather='refresh-ccw'></span></button>
                           </div>
                           <input type="text" id="captcha" class="form-control{{ $errors->has('captcha') ? ' is-invalid' : '' }}" placeholder="Enter Captcha" name ="captcha" required>
                           @if ($errors->has('captcha'))
                           <span class="invalid-feedback" role="alert">
                           <strong>Input Wrong, Try again.</strong>
                           </span>
                           @endif
                        </div>
                     </div>
                     <div class="row mb-4">
                        <div class="col">
                           <!-- <div class="custom-control custom-switch">
                              <input type="checkbox" class="custom-control-input" id="customSwitch1">
                              <label class="custom-control-label" for="customSwitch1">Urgent and need fast response?</label>
                              </div> -->
                           <div class="custom-control custom-checkbox mr-sm-2">
                              <input type="checkbox" class="custom-control-input" id="customControlAutosizing" name="urgent">
                              <label class="custom-control-label text-danger" for="customControlAutosizing">Urgent and need fast response?</label>
                           </div>
                        </div>
                     </div>
                     <div class="row mb-4 align-items-center">
                        <div class="col">
                           <input class="btn btn-dark btn-block" type="submit" name="submit" value="Submit"> 
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="row justify-content-md-center">
         <div class="col-lg-12">
            <div class="w-50 w-lg-35 mx-auto">
               <hr class="my-4">
            </div>
            <div class="text-center wow slideInDown " data-wow-duration="2s" >
               @if(count($extlink) > 0)
               @foreach($extlink as $link)
               <div class="d-inline px-2 >
                  <a href="{{ $link->link }}"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="{{ $link->title }}">
                  <img src="{{ asset('images/' . $link->image) }}" class="rounded mb-2" alt="..." height="60">
                  </a>
               </div>
               @endforeach
               @endif
            </div>
         </div>
      </div>
      <!--/.row-->
   </div>
</section>
<!-- 6 SECTION END -->
<!-- 7 SECTION START -->
<section class="text-center text-white border-top border-color-9 py-4 wow"  id="software-cta" style="background-color: black;">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8" >
            <div class="overflow-hidden wow slideInDown " data-wow-duration="2s" >
               <h3 style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">Start you next project with me.</h3>
            </div>
            <div class="overflow-hidden wow slideInLeft " data-wow-duration="2s" >
               <p style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">{{ $owner->descwebsite }}</p>
            </div>
            <div style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class=" wow slideInRight " >
               <button type="button" class="btn btn-outline-light btn-sm">More About This Website ?</button>
            </div>
         </div>
      </div>
      <!--/.row-->
   </div>
   <!--/.container-->
</section>
<!-- 7 SECTION END -->
<section class="m-0 p-0" style="background-color: black;">
   <div class="container ">
      <div class="row ">
         <div class="col-lg-12 ">
            <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" >
               <div class="modal-content" style="background-color: transparent!important; backdrop-filter: blur(10px)!important;">
                  <div class="modal-body bg-transparent">
                     <div class="work-content">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" class="text-white " style="font-size: 30px;">&times;</span><span class="sr-only">Close</span></button>
                        <img src="" class="imagepreview" style="width: 100%;" >
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </div>
   </div>
</section>
@stop