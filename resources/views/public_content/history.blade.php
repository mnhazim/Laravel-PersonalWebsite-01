@extends('master_public.app')
@section('content')
<!-- 1 SECTION START -->
<section class="py-0 wow">
   <div class="container" id="home" style="padding-top: 4.5rem;padding-bottom: 4.5rem;">
      <div class="row align-items-center wow slideInDown">
         <div class="col-lg-12 mx-auto text-center m-4">
            <a href="{{ Route('home') }}" class="btn btn-outline-dark btn-sm">Home Page</a>
         </div>
      </div>
      <div class="row align-items-center "  id="vantabird">
         <div class="col-sm-12 col-lg-10 col-xl-4 text-xl-right mt-5 mt-xl-0 order-lg-1 order-2 pr-xl-4 wow slideInLeft" data-wow-duration="2s" >
            <div class="overflow-hidden">
               <h5>Welcome to,</h5>
               <H3 class="mb-3" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">MNHAZIM.COM</H3>
            </div>
         </div>
         <div class="pop col-sm-12 col-lg-5 col-xl-4 mt-4 mt-xl-0 px-xl-4 order-lg-2 wow slideInUp " data-wow-duration="2s"> 
            <img class="w-100 radius-primary" src="images/default.png" alt="" style="filter: blur(0px); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
         </div>
         <div class="col-sm-12 col-lg-5 col-xl-4 mt-5 mt-xl-0 order-3 align-self-lg-start align-self-xl-center pl-xl-4 wow slideInRight" data-wow-duration="2s">
         </div>
      </div>
   </div>
</section>
<section class="wow" id="default-process">
   <div class="container">
      <div class="row justify-content-center text-center mb-6">
      <div class="col-lg-6 wow slideInUp" data-wow-duration="2s">
         <h1 class="display-4 ">INTODUCTION</h1>
         <hr class="short mt-4 border-secondary">
      </div>
   </div>
   <div class="row align-items-middle mb-4">
      <div class="col-lg-6 text-center wow slideInUp" data-wow-duration="2s">
         <!-- <h1 class="display-4 ">EXPERIENCE</h1> -->
         <img src="images/intro.png" alt="" width="100%">
      </div>
      <div class="col-lg-6 mt-4 mt-lg-0 mb-8 mb-lg-0 my-lg-8">
         <div class="py-2 wow slideInLeft" data-wow-duration="2s">
            <h4 class="lead text-justify">This is my first <strong>customize personal website</strong>. Im using <strong>Bootsrap 4</strong> for my UI(User Interface) Library and <strong>Laravel 6</strong> (PHP Framework) for my backend process. I implemented animation and transition for this website using <strong>animate.css</strong> and <strong>wow js</strong> library. I try to implement <strong>CMS (Content Management System)</strong> for this website, currently only 60% data fetch from Database and 40% hardcoded (In planning to make 100% data fetch from DB). </h4>
            <center><div class="d-inline px-2">
               <a href=""  target="_blank" data-toggle="tooltip" data-placement="bottom" title="">
                  <img src="images/1573400603.png" class="rounded mb-2" alt="..." height="60">
               </a>
               <a href=""  target="_blank" data-toggle="tooltip" data-placement="bottom" title="">
                  <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="60">
               </a>
               <a href=""  target="_blank" data-toggle="tooltip" data-placement="bottom" title="">
                  <img src="images/1573400649.png" class="rounded mb-2" alt="..." height="60">
               </a>
               <a href=""  target="_blank" data-toggle="tooltip" data-placement="bottom" title="">
                  <img src="images/1573400501.png" class="rounded mb-2" alt="..." height="60">
               </a>
               <a href=""  target="_blank" data-toggle="tooltip" data-placement="bottom" title="">
                  <img src="images/1573400572.png" class="rounded mb-2" alt="..." height="60">
               </a>
               <a href=""  target="_blank" data-toggle="tooltip" data-placement="bottom" title="">
                  <img src="images/1574446547.jpg" class="rounded mb-2" alt="..." height="60">
               </a>
               <a href=""  target="_blank" data-toggle="tooltip" data-placement="bottom" title="">
                  <img src="images/1574573272.jpg" class="rounded mb-2" alt="..." height="60">
               </a>
               <a href=""  target="_blank" data-toggle="tooltip" data-placement="bottom" title="">
                  <img src="images/1573399874.png" class="rounded mb-2" alt="..." height="60">
               </a>
            </div></center>
         </div>
      </div>
   </div>
   <div class="row justify-content-center text-center mb-6 wow slideInDown">
      <div class="col-lg-6">
         <h1 class="display-4 wow slideInUp" data-wow-duration="2s">PLAN</h1>
         <hr class="short mt-4 border-secondary">
      </div>
   </div>
   <div class="row py-2 mb-4">
      <div class="col-12">
         <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 text-center wow slideInDown" data-wow-duration="2s">
               <img src="images/plan.png" alt="" width="100%">
            </div>
            <div class="col-lg-6 pb-lg-8 mt-4 mt-lg-0 mb-8 mb-lg-0">
               <div class="py-2 wow slideInLeft" data-wow-duration="2s">
                  <h4 class="lead text-justify">Planning and analysis are important things before I start develop something. First, I collect all information,portfolio and any resources like design modern website(Pinterest/UI UX Instagram), example personal website, database structure for CMS (Basic CMS part). After that, I draft my storyboard and my database structure before I start design my first UI in Adobe XD. Draft database structure you must thing about flow, and the important thing how CMS work. MNH is my prefix table.</h4>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row justify-content-center text-center mb-6">
      <div class="col-lg-6 wow slideInUp" data-wow-duration="2s">
         <h1 class="display-4 ">DESIGN</h1>
         <hr class="short mt-4 border-secondary">
      </div>
   </div>
   <div class="row align-items-middle mb-4">
      <div class="col-lg-6 text-center wow slideInUp" data-wow-duration="2s">
         <!-- <h1 class="display-4 ">EXPERIENCE</h1> -->
         <img src="images/design.png" alt="" width="100%">
      </div>
      <div class="col-lg-6 mt-4 mt-lg-0 mb-8 mb-lg-0 my-lg-8">
         <div class="py-2 wow slideInLeft" data-wow-duration="2s">
            <h4 class="lead">After I complete collect all information and flow database structre, I start design my first UI in Adobe XD. Currently for this UI is my second design. Designing is not easy because you must being creative and know about modern design. I follow many resources in UI/UX Designer in Facebook, Instagram, Pinterest and etc to get Idea for design my website. I take 5 days to finish my first design. </h4>
            <div class="d-inline px-2 ">
               
               <a href=""  target="_blank" data-toggle="tooltip" data-placement="bottom" title="">
                  <img src="images/1573400721.png" class="rounded mb-2" alt="..." height="60">
               </a>
               <a href=""  target="_blank" data-toggle="tooltip" data-placement="bottom" title="">
                  <img src="images/1573400841.png" class="rounded mb-2" alt="..." height="60">
               </a>
               <a href=""  target="_blank" data-toggle="tooltip" data-placement="bottom" title="">
                  <img src="images/1573400905.png" class="rounded mb-2" alt="..." height="60">
               </a>
            </div>
         </div>
      </div>
   </div>
   <div class="row justify-content-center text-center mb-6">
      <div class="col-lg-6 wow slideInUp" data-wow-duration="2s">
         <h1 class="display-4 ">DEVELOP</h1>
         <hr class="short mt-4 border-secondary">
      </div>
   </div>
   <div class="row py-2 mb-4">
      <div class="col-12">
         <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 text-center wow slideInDown" data-wow-duration="2s">
               <img src="images/develop.png" alt="" width="100%">
            </div>
            <div class="col-lg-6 pb-lg-8 mt-4 mt-lg-0 mb-8 mb-lg-0">
               <div class="py-2 wow slideInLeft" data-wow-duration="2s">
                  <h4 class="lead">Before I start write my code. I draft my folder directory like private part, public part, master part and etc. Seprate folder make my work more efficient and easy to trace. Next, I start project using laragon and write my code on Sublime Text 3 for my code editor and HeidiSQL for my database manager. I use Git to push my code on github if any modified or any process going. </h4>
                  <div class="d-inline px-2 ">
                     
                     <a href=""  target="_blank" data-toggle="tooltip" data-placement="bottom" title="">
                        <img src="images/1573400752.png" class="rounded mb-2" alt="..." height="60">
                     </a>
                     <a href=""  target="_blank" data-toggle="tooltip" data-placement="bottom" title="">
                        <img src="images/hedi.png" class="rounded mb-2" alt="..." height="60">
                     </a>
                     <a href=""  target="_blank" data-toggle="tooltip" data-placement="bottom" title="">
                        <img src="images/git.png" class="rounded mb-2" alt="..." height="60">
                     </a>
                     <a href=""  target="_blank" data-toggle="tooltip" data-placement="bottom" title="">
                        <img src="images/laragon.jpg" class="rounded mb-2" alt="..." height="60">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row justify-content-center text-center mb-6">
      <div class="col-lg-10 wow slideInUp" data-wow-duration="2s">
         <h1 class="display-4 ">DEPLOY</h1>
         <hr class="short mt-4 border-secondary">
      </div>
   </div>
   <div class="row align-items-middle mb-4">
      <div class="col-lg-6 text-center wow slideInLeft" data-wow-duration="2s">
         <!-- <h1 class="display-4 ">EXPERIENCE</h1> -->
         <img src="images/deploy.png" alt="" width="100%">
      </div>
      <div class="col-lg-6 mt-4 mt-lg-0 mb-8 mb-lg-0 my-lg-8">
         <div class="py-2 wow slideInRight" data-wow-duration="2s">
            <h4 class="lead">for this application, Im using shared hosting from jimathosting provider to deploy my application. CPanel to manage/configure my server then I use File Zilla (FTP) To transfer file from local to server. </h4>
            <div class="d-inline px-2 ">
               
               <a href=""  target="_blank" data-toggle="tooltip" data-placement="bottom" title="">
                  <img src="images/1573400957.png" class="rounded mb-2" alt="..." height="60">
               </a>
               <a href=""  target="_blank" data-toggle="tooltip" data-placement="bottom" title="">
                  <img src="images/cpanel.png" class="rounded mb-2" alt="..." height="60">
               </a>
            </div>
         </div>
      </div>
   </div>
   <!--/.container-->
</section>
@stop