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
         <div class="col-sm-12 col-lg-10 col-xl-4 text-xl-right mt-5 mt-xl-0 order-lg-1 order-3 pr-xl-4" >
            <div class="overflow-hidden  wow slideInLeft" data-wow-duration="2s">
               <div class="overflow-hidden">
                  <p style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">APRIL 27, 1996 (23 YEARS)<br>BANDAR PENAWAR, JOHOR</p>
                  <h5 class="mb-1" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">LANGUAGES</h5>
                  <ul style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);list-style-type:none;">
                     <li>Bahasa Melayu</li>
                     <li>Bahasa English</li>
                  </ul>
               </div>
               <div class="py-2 mx-auto">
                  <a href="https://github.com/mnhazim" class=""><img src="images/icon/i-git.png" height="50"></a>
                  <!-- <a href="#" class=""><img src="images/icon/i-in.png" height="50"></a> -->
                  <a href="https://instagram.com/mnhazim__" class=""><img src="images/icon/i_ig.png" height="50"></a>
               </div>
            </div>
         </div>
         <div class="pop col-sm-12 col-lg-5 col-xl-4 mt-4 mt-xl-0 px-xl-4 order-lg-2 wow slideInUp " data-wow-duration="2s"> 
            <img class="w-100 radius-primary" src="images/XOEW7523.png" alt="" style="filter: blur(0px); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
         </div>
         <div class="col-sm-12 col-lg-5 col-xl-4 mt-5 mt-xl-0 order-2 align-self-lg-start align-self-xl-center pl-xl-4 wow slideInRight" data-wow-duration="3.5s">
            <div class="overflow-hidden">
               <h5 class="mb-3" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">MUHAMAD NOOR HAZIM MOHAMED ESA</h5>
            </div>
            <div class="overflow-hidden">
               <p style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">noorhazimesa@gmail.com <br>(+60)16 783 2383</p>
               <p style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">No 98, PERJIRANAN 10/14 TAMAN BAKTI 2 81700 PASIR GUDANG, JOHOR.</p>
               <p class="intro-subtitle"><span class="text-slider-items" style="display: none;">Programmer</span><strong class="text-slider"></strong></p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="wow" id="default-process">
   <div class="container">
   <div class="row justify-content-center text-center mb-6 wow slideInDown">
      <div class="col-lg-6">
         <h1 class="display-4 wow slideInUp" data-wow-duration="2s">TECHNOLOGY</h1>
         <hr class="short mt-4 border-secondary">
      </div>
   </div>
   <div class="row py-2 mb-4">
      <div class="col-12">
         <div class="row align-items-center">
            <div class="col-lg-6 pb-lg-8 mt-4 mt-lg-0 mb-8 mb-lg-0 mx-auto text-center">
               <div class="py-2 wow slideInLeft" data-wow-duration="1.5s">
                  <h5 class="lead"><strong><mark>PROGRAMMING SKILLS:</mark></strong></h5>
                  <div class="d-inline p-2">
                     <a href="#" class="mx-1"  data-toggle="tooltip" data-placement="bottom" title="PHP">
                     <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="MySQL">
                     <img src="images/1573400649.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="HTML5">
                     <img src="images/1573400501.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="CSS3">
                     <img src="images/1573400443.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="C">
                     <img src="images/1574443385.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="C++">
                     <img src="images/1574443416.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="JavaScript">
                     <img src="images/1574446547.jpg" class="rounded mb-2" alt="..." height="50">
                     </a>
                  </div>
               </div>
               <div class="py-2 wow slideInRight" data-wow-duration="2s">
                  <h5 class="lead"><strong><mark>PHP FRAMEWORK:</mark></strong></h5>
                  <div class="d-inline p-2">
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="Laravel">
                     <img src="images/1573400603.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="Genpro">
                     <img src="images/1574514283.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                  </div>
               </div>
               <div class="py-2 wow slideInLeft" data-wow-duration="2.5s">
                  <h5 class="lead"><strong><mark>PLUGIN/LIBRARY:</mark></strong></h5>
                  <div class="d-inline p-2">
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="Bootstrap">
                     <img src="images/1573399874.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="JQuery">
                     <img src="images/1573400572.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="WowJs">
                     <img src="images/1574573272.jpg" class="rounded mb-2" alt="..." height="50">
                     </a>
                  </div>
               </div>
               <div class="py-2 wow slideInRight" data-wow-duration="3s">
                  <h5 class="lead"><strong><mark>SYSTEMS:</mark></strong></h5>
                  <div class="d-inline p-2">
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="Windows">
                     <img src="images/window.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="Centos">
                     <img src="images/centos.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                  </div>
               </div>
               <div class="py-2 wow slideInLeft" data-wow-duration="3s">
                  <h5 class="lead"><strong><mark>CONTENT MANAGEMENT SYSTEM(CMS):</mark></strong></h5>
                  <div class="d-inline p-2">
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="Wordpress">
                     <img src="images/1573400793.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                  </div>
               </div>
               <div class="py-2 wow slideInRight" data-wow-duration="3s">
                  <h5 class="lead"><strong><mark>SOFTWARE/TOOLS:</mark></strong></h5>
                  <div class="d-inline p-2">
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="Git Control">
                     <img src="images/git.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="Laragon">
                     <img src="images/laragon.jpg" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="SQLYog">
                     <img src="images/sqlyog.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="HeidiSQL">
                     <img src="images/hedi.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="Tortoise SVN">
                     <img src="images/tortoisesvn.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="File Zilla">
                     <img src="images/1573400957.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="Putty">
                     <img src="images/put.jpg" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="XAMPP">
                     <img src="images/xampplogo.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                  </div>
               </div>
               <div class="py-2 wow slideInLeft" data-wow-duration="3s">
                  <h5 class="lead"><strong><mark>EXTRA SKILLS:</mark></strong></h5>
                  <div class="d-inline p-2">
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="Adobe Photoshop">
                     <img src="images/1573400721.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="Adobe Experience">
                     <img src="images/1573400841.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="Adobe Illustrator">
                     <img src="images/1573400905.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                     <a href="#" class="mx-1" data-toggle="tooltip" data-placement="bottom" title="Microsoft Office">
                     <img src="images/mso.png" class="rounded mb-2" alt="..." height="50">
                     </a>
                  </div>
               </div>
               <!-- Programming/Languages: VB.Net; C#; .Net; C; C++; ASP.Net; Python, VBA, Java, Visual Basic; SharePoint; PHP; MySQL; HTML; Ant
                  Databases Management: Oracle 8.x/9.x, SQL Server, MS Access
                  Design & IDE Tools: Rational Rose, UML, WSAD, Oracle WebLogic Server
                  Systems: Windows Server 2016, Linux/Unix, Mac OS X -->
            </div>
         </div>
      </div>
   </div>
   <div class="row justify-content-center text-center mb-6">
      <div class="col-lg-6 wow slideInUp" data-wow-duration="2s">
         <h1 class="display-4 ">EDUCATION</h1>
         <hr class="short mt-4 border-secondary">
      </div>
   </div>
   <div class="row py-2 mb-4">
      <div class="col-12">
         <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 text-center wow slideInDown" data-wow-duration="2s">
               <img src="images/21427.png" alt="" width="100%">
            </div>
            <div class="col-lg-6 pb-lg-8 mt-4 mt-lg-0 mb-8 mb-lg-0">
               <div class="py-2 wow slideInLeft" data-wow-duration="2s">
                  <span>2015 - 2018 <strong>Politeknik Mersing, Johor</strong></span>
                  <h4>Diploma Information Technology and Communication (Programming)</h4>
                  <h6 class="lead">3.48 CGPA. In Polytechnic Mersing Johor, basically courses about hardware and software, database, Java, C++, HTML and CSS. For final year project must develop one system and fully function.</h6>
                  <ul class="lead">
                     <li>Head of Department Award Semester 5 (3.64 GPA)</li>
                     <li>Head of Department Award Semester 3 (3.50 GPA)</li>
                  </ul>
               </div>
               <div class="py-2 wow slideInRight" data-wow-duration="2s">
                  <span>2014 - 2015 <strong>Kolej Komuniti Bandar Penawar</strong></span>
                  <h4>Certificate of Computer Software Application(Programming)</h4>
                  <h6 class="lead">3.76 CGPA. In Kolej Komunitii, basically courses about software and hardware, Microsoft Office, Java, database, HTML and CSS. Develop the simple system for the last semester in kolej komuniti.</h6>
                  <ul class="lead">
                     <li>Head of Department Award Semester 3 (3.90 GPA)</li>
                     <li>Head of Department Award Semester 2 (3.91 GPA)</li>
                     <li>Head of Department Award Semester 1 (3.92 GPA)</li>
                  </ul>
               </div>
               <div class="py-2 wow slideInLeft" data-wow-duration="2s">
                  <span>2012 - 2013 | <strong>Sekolah Menengah Bandar Penawar</strong></span>
                  <h4>Malaysian Certificate of Education(SPM)</h4>
                  <h6 class="lead">Science's class from 2012 and mostly study about pure science like Physics, chemistry, Biology and etc.</h6>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row justify-content-center text-center mb-6">
      <div class="col-lg-6 wow slideInUp" data-wow-duration="2s">
         <h1 class="display-4 ">EXPERIENCE</h1>
         <hr class="short mt-4 border-secondary">
      </div>
   </div>
   <div class="row align-items-middle mb-4">
      <div class="col-lg-6 text-center wow slideInUp" data-wow-duration="2s">
         <!-- <h1 class="display-4 ">EXPERIENCE</h1> -->
         <img src="images/2668180.png" alt="" width="100%">
      </div>
      <div class="col-lg-6 mt-4 mt-lg-0 mb-8 mb-lg-0 my-lg-8">
         <div class="py-2 wow slideInRight" data-wow-duration="2s">
            <span>01 FEB 2019 – NOW | <strong>PROGRAMMER</strong></span>
            <h4>MYNET TECHNOLOGIES SDN BHD</h4>
            <p class="lead">Develop applications and maintenance for previous project, setup and configure server, attend meeting and present to deal with client.</p>
         </div>
         <div class="py-2 wow slideInLeft" data-wow-duration="2s">
            <span>2018(02 JULAI 2018 – 16 NOVEMBER 2018) | <strong>INTERNSHIP(POLYTECHNIC)</strong></span>
            <h4>KOLEJ KOMUNITI PASIR GUDANG</h4>
            <p class="lead">System development, design poster, develop arduino project, design data flow for system, Manage Small Event.</p>
         </div>
         <div class="py-2 wow slideInRight" data-wow-duration="2s">
            <span>2015(THREE MONTH) | <strong>INTERNSHIP(KOLEJ KOMUNITI)</strong></span>
            <h4>PC MAXIMA KOTA TINGGI</h4>
            <p class="lead">Repair personal computer, repair printer, format computer, seller and promoter.</p>
         </div>
      </div>
   </div>
   <div class="row justify-content-center text-center mb-6">
      <div class="col-lg-6 wow slideInUp" data-wow-duration="2s">
         <h1 class="display-4 ">TALK & TRAINING</h1>
         <hr class="short mt-4 border-secondary">
      </div>
   </div>
   <div class="row py-2">
      <div class="col-12 mb-4">
         <div class="row align-items-end equal">
            <div class="col-lg-6 mx-auto order-lg-2 text-center wow slideInRight" data-wow-duration="2s">
               <img src="images/talk.png" alt="" width="100%">
            </div>
            <!-- Jangan lupa letak PWTC comp -->
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>1.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[4]->datepost)->format('F d, Y') }}</span>
                     <h4>{{ $tt[4]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[4]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[4]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[4]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>2.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[10]->datepost)->format('F d, Y') }}<span data-feather='award'></span></span>
                     <h4>{{ $tt[10]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[10]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[10]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[10]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>3.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[9]->datepost)->format('F d, Y') }}<span data-feather='award'></span></span>
                     <h4>{{ $tt[9]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[9]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[9]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[9]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>4.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[6]->datepost)->format('F d, Y') }}</span>
                     <h4>{{ $tt[6]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[6]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[6]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[6]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>5.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[12]->datepost)->format('F d, Y') }}<span data-feather='award'></span></span>
                     <h4>{{ $tt[12]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[12]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[12]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[12]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row justify-content-center text-center mb-6">
      <div class="col-lg-10 wow slideInUp" data-wow-duration="2s">
         <h1 class="display-4 ">RECOGNITION & PARTICIPANT</h1>
         <hr class="short mt-4 border-secondary">
      </div>
   </div>
   <div class="row py-2 ">
      <div class="col-12 mb-4">
         <div class="row align-items-end equal">
            <div class="col-lg-6 mx-auto order-lg-2 text-center wow slideInRight" data-wow-duration="2s">
               <img src="images/participant.png" alt="" width="100%">
            </div>
            <!-- Jangan lupa letak PWTC comp -->
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>1.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[24]->datepost)->format('F d, Y') }}</span>
                     <h4>{{ $tt[24]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[24]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[24]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[24]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>2.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[11]->datepost)->format('F d, Y') }}</span>
                     <h4>{{ $tt[11]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[11]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[11]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[11]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>3.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[21]->datepost)->format('F d, Y') }}<span data-feather='award'></span></span>
                     <h4>{{ $tt[21]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[21]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[21]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[21]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>4.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[22]->datepost)->format('F d, Y') }}<span data-feather='award'></span></span>
                     <h4>{{ $tt[22]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[22]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[22]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[22]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>5.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[2]->datepost)->format('F d, Y') }}<span data-feather='award'></span></span>
                     <h4>{{ $tt[2]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[2]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[2]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[2]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>6.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[8]->datepost)->format('F d, Y') }}<span data-feather='award'></span></span>
                     <h4>{{ $tt[8]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[8]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[8]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[8]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>7.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[5]->datepost)->format('F d, Y') }}</span>
                     <h4>{{ $tt[5]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[5]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[5]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[5]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>8.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[23]->datepost)->format('F d, Y') }}<span data-feather='award'></span></span>
                     <h4>{{ $tt[23]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[23]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[23]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[23]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>9.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[19]->datepost)->format('F d, Y') }}<span data-feather='award'></span></span>
                     <h4>{{ $tt[19]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[19]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[19]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[19]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>10.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[20]->datepost)->format('F d, Y') }}<span data-feather='award'></span></span>
                     <h4>{{ $tt[20]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[20]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[20]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[20]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>11.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[18]->datepost)->format('F d, Y') }}<span data-feather='award'></span></span>
                     <h4>{{ $tt[18]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[18]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[18]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[18]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>12.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[16]->datepost)->format('F d, Y') }}<span data-feather='award'></span></span>
                     <h4>{{ $tt[16]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[16]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[16]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[16]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>13.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[17]->datepost)->format('F d, Y') }}<span data-feather='award'></span></span>
                     <h4>{{ $tt[17]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[17]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[17]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[17]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>14.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[14]->datepost)->format('F d, Y') }}<span data-feather='award'></span></span>
                     <h4>{{ $tt[14]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[14]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[14]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[14]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>15.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[13]->datepost)->format('F d, Y') }}<span data-feather='award'></span></span>
                     <h4>{{ $tt[13]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[13]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[13]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[13]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>16.</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tt[15]->datepost)->format('F d, Y') }}<span data-feather='award'></span></span>
                     <h4>{{ $tt[15]->title }}</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="{{ asset('images/' . $tt[15]->image) }}" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">{{ str_limit($tt[15]->desc, $limit = 150, $end = '...') }}</p>
                     <a href="/activity/{{ $tt[15]->id }}" class="btn btn-link lead">Read More -></a>
                  </div>
               </div>
            </div>
         </div>
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
      <!--/.row-->
   </div>
   <!--/.container-->
</section>
@stop