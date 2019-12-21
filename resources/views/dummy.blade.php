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
         <div class="col-lg-6 px-0 order-lg-2 wow slideInRight " data-wow-duration="2s">
            <div class="background-holder" style="background-image: url(/../images/1573901399.jpg); filter: blur(0px); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" > </div>
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
                        <span class="d-block mt-2" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">DUMMY TITLE</span>
                     </div>
                  </h1>
                  <div class="overflow-hidden">
                     <h6 class="text-uppercase mt-4" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">DUMMY SECOND TITLE</h6>
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
               <div class="col-12 wow slideInUp " data-wow-duration="2s">
                  <div class="row ">
                     <div class="col">
                        <a class="font-1 color-7" href="">27-01-2019</a>
                     </div>
                  </div>
                  <h4 class="mt-2">Post Title</h4>
                  <img class="d-block mt-3 w-100" src="{{ asset('images/bg1.jpg') }}" alt="" width="100%">
                  <p class="mt-1 "><small>Post Desc</small></p>
                  <!-- Content Post --> 
                  <h5>1) PENGENALAN</h5>
                  <p class="lead">
                     <strong>Android P01</strong> adalah projek Arduino yang dibangunkan untuk <strong>mengesan kelembapan dan suhu udara</strong> dengan menggunakan <strong>sensor dht22</strong>. Projek ini <strong>berintegrasi</strong> dengan sistem yang dibangunkan sendiri dengan menggunakan bahasa pengaturcaraan PHP. Data yang dihantar melalui <strong>Get Method Request</strong> akan disimpan dalam database dan akan dipaparkan pada sistem setiap dua saat melalui <strong>Ajax Method</strong>.
                  </p>
                  <h5>2) ARKITEKTUR SISTEM</h5>
                  <h6>2.1: PLATFORM WEB</h6>
                  <p class="lead">Sistem ini dibangunkan dengan menggunakan Bahasa Pengaturcaraan PHP. Sistem ini menggunakan konsep Object Oriented Programming (OOP).</p>
                  <strong>System</strong>: -<br>
                  <ul>
                     <li>Programming Language: PHP 7.2</li>
                     <li>Database Support: MYSQL</li>
                     <li>UI: Bootstraps</li>
                     <li>TEMPLATE: Creative Tim (Argon Dashboard)</li>
                     <li>Mobile Mode: YES</li>
                     <li>Customization: YES.</li>
                  </ul>
                  <strong>Hardware</strong>: -<br>
                  <ul>
                     <li>Breadboard</li>
                     <li>Jumper wire</li>
                     <li>DHT22 (Humidity & temperature Sensor)</li>
                     <li>ESP32 (Main Board)</li>
                     <li>Arduino IDE</li>
                     <li>Programming Language: C</li>
                  </ul>
                  <h6>2.2: PANGKALAN DATA</h6>
                  <p>Pangkalan data yang dibangunkan akan menggunakan pangkalan data MySQL. MySQL adalah perisian sumber terbuka tanpa melibatkan kos tambahan Perisian. Berikut adalah ciri-ciri dan arkitektur pangkalan data MySQL:
                     <br>
                  <ul>
                     <li>Relational Database Management System (RDBMS)</li>
                     <li>Mudah untuk digunakan dan dikendalikan</li>
                     <li>Selamat untuk digunakan</li>
                     <li>Client/ Server Architecture</li>
                     <li>Muat turun secara percuma</li>
                     <li>Berskala</li>
                     <li>Serasi pada kebanyakan operating systems</li>
                     <li>Membolehkan transaksi roll-back</li>
                     <li>Prestasi tinggi</li>
                     <li>Fleksibiliti tinggi</li>
                     <li>Produktiviti tinggi</li>
                  </ul>
                  </p>
                  <h5>3) PAPARAN ANTARAMUKA</h5>
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 p-2">
                        <img src="../../images/1576303813.jpg" width="100%">
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 p-2">
                        <img src="../../images/1576303829.jpg" width="100%">
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 p-2">
                        <img src="../../images/1576303857.jpg" width="100%">
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 p-2">
                        <iframe width="100%" height="500" src="https://www.youtube.com/embed/QktM1K5spjM">
</iframe>
                     </div>
                  </div>
                  <!-- End Content Post -->
                  <div class="row mt-5 fs-1 align-items-center">
                     <div class="col-auto">
                        <h6 class="mb-0">Share on</h6>
                     </div>
                  </div>
                  <div id="share"></div>
               </div>
               <div class="col-12 mt-8">
                  <h4 class="mb-4">More from Web design</h4>
               </div>
               <div class="col-sm-6 col-lg-4 wow slideInUp " data-wow-duration="2s" >
                  <a href="">
                     <img class="w-100 radius-primary" src="{{ asset('images/bg1.jpg') }}" width="100%" alt="" style="filter: blur(0px); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                     <h6 class="d-inline-block ls fw-500 mb-0 mt-3 color-6">TYPE DUMMY</h6>
                     <h5>DUMMY TITLE</h5>
                  </a>
               </div>
               <div class="col-sm-6 col-lg-4 wow slideInUp " data-wow-duration="2s" >
                  <a href="">
                     <img class="w-100 radius-primary" src="{{ asset('images/bg1.jpg') }}" width="100%" alt="" style="filter: blur(0px); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                     <h6 class="d-inline-block ls fw-500 mb-0 mt-3 color-6">TYPE DUMMY</h6>
                     <h5>DUMMY TITLE</h5>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 mt-6 mt-lg-0 pl-lg-7">
            <div class="row px-2">
               <div class="col">
                  <h5 class="mt-5">Popular</h5>
                  <div class="wow slideInRight " data-wow-duration="2s">
                     <a href="">
                        <img class="mt-3 radius-primary" src="{{ asset('images/bg1.jpg') }}" width="100%" alt="">
                        <h6 class="fs-0 mt-3">Title</h6>
                     </a>
                  </div>
                  <div class="wow slideInRight " data-wow-duration="2s">
                     <a href="">
                        <img class="mt-3 radius-primary" src="{{ asset('images/bg1.jpg') }}" width="100%" alt="">
                        <h6 class="fs-0 mt-3">Title</h6>
                     </a>
                  </div>
                  <div class="mt-6">
                     <h5>Categories</h5>
                     <ul class="nav tags mt-3 fs--1">
                        <li  class="wow slideInUp " data-wow-duration="2s">
                           <a class="btn btn-sm btn-outline-secondary m-1" href="">DUMMY</a>
                        </li>
                        <li  class="wow slideInUp " data-wow-duration="2s">
                           <a class="btn btn-sm btn-outline-secondary m-1" href="">DUMMY</a>
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