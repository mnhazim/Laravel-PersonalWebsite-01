<!-- Nanti delete hurmm aku saje test github guia -->

@extends('master_public.app')
@section('content')
<!-- 1 SECTION START -->
<section class="py-0" id="header-split-static">
   <div class="container-fluid animatedParent" data-sequence='800'>
      <div class="row" style="height: 50vh">
         <div class="col-lg-6 px-0 order-lg-2 animated fadeInLeftShort slowest" data-id='1'>
            <div class="background-holder" style="background-image: url(/../images/{{ $detailActivity->image }}); filter: blur(0px); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" > </div>
         </div>
         <div class="col-lg-6 animated fadeInRightShort slowest" data-id='2'>
            <div class="row h-100 align-items-center justify-content-center">
               <div class="col-lg-10 py-6 py-lg-8">
                  <h1 class="fw-300 text-uppercase fs-2 fs-sm-4">
                     <a href="{{ Route('home') }}">
                        <div class="overflow-hidden">
                           <img src="{{ asset('images/icon/i_logoH.png') }}" width="50">
                        </div>
                     </a>
                     <div class="overflow-hidden">
                        <span class="d-block mt-2" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">{{ $detailActivity->title }}</span>
                     </div>
                  </h1>
                  <div class="overflow-hidden">
                     <h6 class="text-uppercase mt-4" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">{{ $detailActivity->second_title }}</h6>
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
<section class="border-top border-color-9" id="default-process">
                <div class="container">
                    <div class="row justify-content-center text-center mb-6">
                        <div class="col-lg-6">
                            <h2 class="fs-3 fs-sm-4 underline mb-3">our process</h2>
                            <p class="color-7 font-italic">Our process is a flexible framework that adapts, evolves and responds to your needs. It is the streamlined result of two decades of website design and marketing for hundreds of clients.</p>
                            <hr class="short mt-5 border-color-9"> </div>
                    </div>
                    <div class="row">
                        <div class="col-12 pl-lg-7">
                            <div class="row align-items-end">
                                <div class="col-lg-6 order-lg-2 text-center">
                                    <img src="assets/images/illustration/process-01.svg" alt="" width="400">
                                </div>
                                <div class="col-lg-6 border-lg-left border-lg-bottom border-color-9 pb-lg-8 mt-4 mt-lg-0 mb-8 mb-lg-0">
                                    <div class="card-sparrow ml-6 ml-sm-8 ml-lg-6">
                                        <span>01</span>
                                        <h4>plan</h4>
                                        <p>We set priorities, organize content, and understand the buyer’s journey that your audience takes as they navigate your website. At the end of strategy, you will have a Blueprint for your website project, a comprehensive
                                            strategic plan for your website design, content, and functionality.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 border-lg-right border-lg-bottom border-color-9 text-center py-lg-8">
                                    <img src="assets/images/illustration/process-02.svg" alt="" width="400">
                                </div>
                                <div class="col-lg-6 mt-4 mt-lg-0 mb-8 mb-lg-0 my-lg-8">
                                    <div class="card-sparrow ml-6 ml-sm-8 ml-lg-6">
                                        <span>02</span>
                                        <h4>design</h4>
                                        <p>Once the Blueprint is approved, we create wireframes and a design comp for your review. This process involves various reviews, approvals, and close communication between you and our creative team. We begin with
                                            the Homepage to set style, image and branding standards, then move toward interior layouts.</p>
                                        <a class="btn btn-outline-dark mt-3" href="#">View Methods</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 order-lg-2 text-center align-self-center">
                                    <img src="assets/images/illustration/process-03.svg" alt="" width="400">
                                </div>
                                <div class="col-lg-6 border-lg-left border-lg-bottom border-color-9 py-lg-8 mt-4 mt-lg-0 mb-8 mb-lg-0">
                                    <div class="card-sparrow ml-6 ml-sm-8 ml-lg-6">
                                        <span>03</span>
                                        <h4>develop</h4>
                                        <p>With the blueprint &amp; design comps as our guide, the development team begins to create your website with the state of the earth tools. Our entire team works to add content, final design elements, review, &amp;
                                            test your website for quality.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row overflow-hidden">
                                <div class="col-lg-6 border-lg-right border-color-9 text-center py-lg-8">
                                    <img src="assets/images/illustration/process-04.svg" alt="" width="400">
                                </div>
                                <div class="col-lg-6 align-self-center mt-4 mt-lg-0 mt-lg-8">
                                    <div class="card-sparrow ml-6 ml-sm-8 ml-lg-6">
                                        <span class="last-span">04</span>
                                        <h4>deploy</h4>
                                        <p>After testing and review, we present your new website. Upon your approval, your website will be launched, promoted and optimized for search engines such as Google &amp; Bing.</p>
                                        <a class="btn btn-outline-dark btn-sm mt-3" href="page--portfolio.html">See portfolio</a>
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