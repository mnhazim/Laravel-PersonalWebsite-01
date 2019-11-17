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
   <div class="container-fluid">
      <div class="row" style="height: 75vh">
         <div class="col-lg-6 px-0 order-lg-2">
            <div class="background-holder" style="background-image: url(images/bg1.jpg); filter: blur(0px); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" > </div>
         </div>
         <div class="col-lg-6">
            <div class="row h-100 align-items-center justify-content-center">
               <div class="col-lg-10 py-6 py-lg-8">
                  <h1 class="fw-300 text-uppercase fs-2 fs-sm-4">
                     <div class="overflow-hidden">
                        <img src="images/icon/i_logoH.png" width="50">
                     </div>
                     <div class="overflow-hidden">
                        <span class="d-block mt-2" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">Web Development</span>
                     </div>
                  </h1>
                  <div class="overflow-hidden">
                     <h6 class="text-uppercase mt-4" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">Web Development</h6>
                  </div>
                  <div style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                     <a class="btn btn-danger btn-sm mt-5 mt-sm-7" href="#">Home</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--/.row-->
   </div>
   <!--/.container-->
</section>
<section class="text-center" >
   <div class="container">
      <div class="row justify-content-center align-items-center" style="height: 50vh;">
         <div class="col-lg-7">
            <p class="lead">
               <strong >Quality and precision </strong>are what decorates each Sparrow bicycle. Confirmed by more than
               <strong >3 million people </strong>who have been cruising the world for the past quarter of a century. And we keep on riding.
            </p>
            <h6 class="mt-5">Damien Rice, Founder</h6>
         </div>
      </div>
      <!--/.row-->
   </div>
   <!--/.container-->
</section>
<section class="py-4" id="bicycle-features-1">
   <div class="container">
      <div class="row m-0">
         <div class="col-sm-6 col-lg-3" data-zanim-timeline="{&quot;delay&quot;:0.1}">
            <a href="#">
               <img class="w-100 radius-primary" src="images/bg1.jpg" alt="" style="filter: blur(0px); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
               <h6 class="d-inline-block ls text-uppercase fw-500 mb-0 mt-3 color-6">Mountain</h6>
               <h5>mountain</h5>
               <p class="color-5 d-inline-block">XC, DH, trail—our mountain bikes cover every facet of riding.</p>
            </a>
         </div>
         <div class="col-sm-6 col-lg-3 mt-4 mt-sm-0" data-zanim-timeline="{&quot;delay&quot;:0.2}">
            <a href="#">
               <img class="w-100 radius-primary" src="images/bg1.jpg" alt="" style="filter: blur(0px); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
               <h6 class="d-inline-block ls text-uppercase fw-500 mb-0 mt-3 color-6">Road</h6>
               <h5>road</h5>
               <p class="color-5 d-inline-block">Whether you're a veteran racer or first-time rider, we have the perfect Road …</p>
            </a>
         </div>
         <div class="col-sm-6 col-lg-3 mt-4 mt-lg-0" data-zanim-timeline="{&quot;delay&quot;:0.3}">
            <a href="#">
               <img class="w-100 radius-primary" src="images/bg1.jpg" alt="" style="filter: blur(0px); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
               <h6 class="d-inline-block ls text-uppercase fw-500 mb-0 mt-3 color-6">fitness</h6>
               <h5>fitness &amp; hybrid</h5>
               <p class="color-5 d-inline-block">Get in-shape or around town with our Fitness &amp; Urban bikes.</p>
            </a>
         </div>
         <div class="col-sm-6 col-lg-3 mt-4 mt-lg-0" data-zanim-timeline="{&quot;delay&quot;:0.4}">
            <a href="#">
               <img class="w-100 radius-primary" src="images/bg1.jpg" alt="" style="filter: blur(0px); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
               <h6 class="d-inline-block ls text-uppercase fw-500 mb-0 mt-3 color-6">Turbo</h6>
               <h5>e-bikes</h5>
               <p class="color-5 d-inline-block">Our E-Bikes are far from typical. They feel just like a Specialized bike shou…</p>
            </a>
         </div>
      </div>
      <!--/.row-->
   </div>
   <!--/.container-->
</section>
<section>
   <div class="container">
      <div class="row mt-4">
         <div class="col-lg-8 ">
            <div class="row ">
               <div class="col-12">
                  <div class="row ">
                     <div class="col">
                        <a class="font-1 color-7" href="#">May 15, 2018</a>
                     </div>
                  </div>
                  <h4 class="mt-4">What selfies mean for avatars in VR and the way we perceive ourselves</h4>
                  <p class="mt-4">You just landed in Paris, the euro trip you’ve always dreamed of! After fighting with the street signs and foreign language, you finally exchange keys and smiles with your Airbnb host and drop off your bags.</p>
                  <img class="d-block mt-5 w-100" src="images/bg1.jpg" alt="" width="100%">
                  <p class="mt-4">The first thing you do is visit the Eiffel Tower, which has been tempting you the whole time, peeking through the city’s legendary architecture. As you walk up to it, you see the familiar yet astonishing structure,
                     defying you with its scale. There it is — you’ve seen it in pictures countless times, but this is different.
                  </p>
                  <p class="mt-4">You’re there. There are no screens between you and The Tower. You can touch it, step on it, and most importantly, prove that you were there. You can’t wait to tell all your friends how marvelous it is. So, you reach
                     inside your pocket and take out your most trusted travel companion: the camera phone.
                  </p>
                  <p class="pl-4 my-6 border-left border-color-7 border-2x font-italic fw-400 color-6 lead">When shopping around for other companies that would allow Richard to keep his pride, he comes across the forward-thinking Flutterbug, who wants Richard to lead engineering on a fantastical new technology that seems
                     poised to change the world. That technology, of course, allows you to look in a camera that puts a fake mustache on your face.
                  </p>
                  <p class="mt-4">But, it’s important to recognize that Identity Transfer is appealing to many because it washes away the mundanity of their reality and places them as the protagonist of a newly found, unbounded environment, ripe
                     for creativity.
                  </p>
                  <p class="mt-4">No longer are you beholden by the unremarkable reality that surrounds you. Instead, you can now virtually inhabit any environment and bring along the things that make you
                     <i>you</i>.
                  </p>
                  <p class="mt-4">In The Chemical Brothers’ music video ‘Wide Open', Dom &amp; Nic explore a surprisingly captivating motion capture technique where the main character slowly reveals a body made of a synthetic, see-through material
                     that is then anthropomorphized through the masterful dance of Sonoya Mizuno.
                  </p>
                  <p class="mt-4">Thanks to Gabriel Valdivia. Original post:
                     <a href="https://artplusmarketing.com/identity-transfer-and-the-rise-of-virtual-surrealism-bac751e6342c" target="_blank">Identity Transfer And The Rise Of Virtual Surrealism</a>
                  </p>
                  <div class="row mt-5 fs-1 align-items-center">
                     <div class="col-auto">
                        <h6 class="mb-0">Share on</h6>
                     </div>
                  </div>
                  <div class="mt-6">
                     <a class="btn btn-sm btn-outline-secondary m-1" href="#">Creativity</a>
                     <a class="btn btn-sm btn-outline-secondary m-1" href="#">Ideas</a>
                     <a class="btn btn-sm btn-outline-secondary m-1" href="#">Travel</a>
                     <a class="btn btn-sm btn-outline-secondary m-1" href="#">Art</a>
                     <a class="btn btn-sm btn-outline-secondary m-1" href="#">Life</a>
                     <a class="btn btn-sm btn-outline-secondary m-1" href="#">Music</a>
                  </div>
               </div>
               <div class="col-12 mt-8">
                  <h4 class="mb-4">More from Web design</h4>
               </div>
               <div class="col-lg-4">
                  <img src="images/bg1.jpg" alt="" width="100%">
                  <h6 class="fs-0 mt-3">How to make the shame out of self-promotion totally insane!</h6>
               </div>
               <div class="col-lg-4 mt-4 mt-lg-0">
                  <img src="images/bg1.jpg" alt="" width="100%">
                  <h6 class="fs-0 mt-3">Magic. My Macbook has been stolen.</h6>
               </div>
               <div class="col-lg-4 mt-4 mt-lg-0">
                  <img src="images/bg1.jpg" alt="" width="100%">
                  <h6 class="fs-0 mt-3">How to make the shame out of self-promotion totally insane!</h6>
               </div>
            </div>
         </div>
         <div class="col-lg-4 mt-6 mt-lg-0 pl-lg-7">
            <div class="row px-2">
               <div class="col">
                  <h5 class="mt-5">Popular</h5>
                  <a href="page--single-blog.html">
                     <img class="mt-3 radius-primary" src="images/bg1.jpg" alt="" width="100%">
                     <h6 class="fs-0 mt-3">How to take the shame out of self-promotion</h6>
                  </a>
                  <a href="page--single-blog.html">
                     <img class="mt-5 radius-primary" src="images/bg1.jpg" alt="" width="100%">
                     <h6 class="fs-0 mt-3">Magic. My Macbook has been stolen.</h6>
                  </a>
                  <div class="mt-6">
                     <h5>Categories</h5>
                     <ul class="nav tags mt-3 fs--1">
                        <li>
                           <a class="btn btn-sm btn-outline-secondary m-1" href="#">Creativity</a>
                        </li>
                        <li>
                           <a class="btn btn-sm btn-outline-secondary m-1" href="#">Ideas</a>
                        </li>
                        <li>
                           <a class="btn btn-sm btn-outline-secondary m-1" href="#">Travel</a>
                        </li>
                        <li>
                           <a class="btn btn-sm btn-outline-secondary m-1" href="#">Art</a>
                        </li>
                        <li>
                           <a class="btn btn-sm btn-outline-secondary m-1" href="#">Psychology</a>
                        </li>
                        <li>
                           <a class="btn btn-sm btn-outline-secondary m-1" href="#">Life</a>
                        </li>
                        <li>
                           <a class="btn btn-sm btn-outline-secondary m-1" href="#">Music</a>
                        </li>
                        <li>
                           <a class="btn btn-sm btn-outline-secondary m-1" href="#">Books</a>
                        </li>
                        <li>
                           <a class="btn btn-sm btn-outline-secondary m-1" href="#">Movie</a>
                        </li>
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