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
         <div class="col-sm-12 col-lg-10 col-xl-4 text-xl-right mt-5 mt-xl-0 order-lg-1 order-2 pr-xl-4" >
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
         <div class="col-sm-12 col-lg-5 col-xl-4 mt-5 mt-xl-0 order-3 align-self-lg-start align-self-xl-center pl-xl-4 wow slideInRight" data-wow-duration="2s">
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
                  <span>2014 - 2015 <strong>Politeknik Mersing, Johor</strong></span>
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
                  <span>2012 - 2014 | <strong>Sekolah Menengah Bandar Penawar</strong></span>
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
                     <span><strong>1.</strong> DECEMBER 2018 </span>
                     <h4>FORUM WITH ALUMNI KOLEJ KOMUNITI BANDAR PENAWAR</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/IMG_0683.jpg" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">Sharing Knowledge and experience to students Sekolah Menengah Bandar Penawar at Dewan Utama Kolej Komuniti Bandar Penawar with Alumni student Kolej Komuniti. </p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>2.</strong> DECEMBER 2018 <span data-feather='award'></span></span>
                     <h4>TALK SESSION AT POLITEKNIK MERSING, JOHOR</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/try21.jpg" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">Sharing Knowledge, experience and tips about Final Year Project for all student Semester 4 Department Information Technolgy and Communication.</p>
                  </div>
               </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>3.</strong> DECEMBER 2018 <span data-feather='award'></span></span>
                     <h4>TALK SESSION AT KOLEJ KOMUNITI CAWANGAN GELANG PATAH, JOHOR</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/IMG_8837.jpg" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">Sharing Knowledge, experience and tips to all junior student at Kolej Komuniti cawangan Gelang Patah, Johor.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>4.</strong> OKTOBER 2018 <span data-feather='award'></span></span>
                     <h4>BLACK LINE PRO ROBOTS TRAINING AT POLITEKNIK MERSING, JOHOR</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/TNXY8919.jpg" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">Training students about how to code Black Line Pro Robots (ROBO-ROBO) using C language at Politeknik Mersing, Johor.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>5.</strong> OKTOBER 2018</span>
                     <h4>ROAD TO SUCCESS(R2S): ICT JOB CHALLENGE AND DEMAND IN IR 4.0</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/talk2.jpg" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">Sharing Knowledge and experience to all junior student Semester 1 and 2 about ICT job chanllenge and Demand in IR 4.0.</p>
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
                     <span><strong>1.</strong> FEBRUARY 2019 </span>
                     <h4>Malaysia Technology Expo 2019 PWTC, Kuala Lumpur</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/mte.jpg" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">Gold Award for The Castro Project in Malaysian Technology Expo 2019 competition at PWTC, Kuala Lumpur.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>2.</strong> JANUARY 2019 </span>
                     <h4>Advance Web Hacking & Defense</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/webhacking.jpg" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">Join the program Advance Web Hacking & Defense to becoming a web pentester in Politeknik Mersing Johor under the program Cyber Range Politeknik Mersing, Johor.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>2.</strong> DECEMBER 2018 <span data-feather='award'></span></span>
                     <h4>e-REKA 2018</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/ereka.jpg" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">Gold Award for The Castro System in e-REKA 2018 competition category ICT & Multimedia/Art,Design & Creativity at University Malaysia Perlis(UniMAP), Perlis.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>3.</strong> DECEMBER 2018 <span data-feather='award'></span></span>
                     <h4>e-REKA 2018</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/BGHU1329.JPG" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">Gold Award for e-FMs System in e-REKA 2018 competition category ICT & Multimedia/Art,Design & Creativity at University Malaysia Perlis(UniMAP), Perlis.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>4.</strong> OKTOBER 2018 <span data-feather='award'></span></span>
                     <h4>INNOVATE JOHOR 2018</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/BJVH8799.JPG" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">1st place for iKeyBoxs System in INATEX 2018 competition category IPT/Kolej Komuniti at University Technology Malaysia, Skudai.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>5.</strong> OKTOBER 2018</span>
                     <h4>LIGA ILMU SERANTAU 2018 (INDONESIA)</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/BGBM7181.JPG" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">Join Expo for eFMs System at Polytechnic Jambi, Indonesia under Polytechnic Mersing, Johor.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>6.</strong> AUGUST 2018 <span data-feather='award'></span></span>
                     <h4>SPIKK 2018</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/IMG_9750.JPG" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">Bronze medal for i‐Meet System in SPIKK 2018 competition under Kolej Komuniti at Kolej Komuniti Jelebu, Negeri Sembilan.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>7.</strong> JULY 2018 <span data-feather='award'></span></span>
                     <h4>PNiCC’18</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/MTEX8197.JPG" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">3rd place Best Project and Gold Medal for eFMs System in @PMJB National Innovation & Creativity Competition 2018 (PNiCC’18) competition at UTC Johor, GALLERIA@KOTARAYA.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>8.</strong> JULY 2018 <span data-feather='award'></span></span>
                     <h4>PNiCC’18</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/XGRK4395.JPG" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">Gold Medal for TheCastro System in @PMJB National Innovation & Creativity Competition 2018 (PNiCC’18) competition at UTC Johor, GALLERIA@KOTARAYA.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>9.</strong> MAY 2018 <span data-feather='award'></span></span>
                     <h4>11TH FIRA MALAYSIA CUP</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/LNXD3751.JPG" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">2nd runner for competition 11th FIRA MALAYSIA CUP category MyBOT(Bridge2.0) at Polytechnic Mersing, Johor</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>10.</strong> MARCH 2018 <span data-feather='award'></span></span>
                     <h4>SPEK 2018</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/spek.JPG" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">Gold Medal for competition Student’s Projects Exchibitions at Polytechnic Mersing, Johor.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>11.</strong> MARCH 2018 <span data-feather='award'></span></span>
                     <h4>PIEX 2018</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/WSKS7613.JPG" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">1st place Best Project & Gold Medal for competition Project Exhibition Version 3.0 (PIEX) under Department of Information Technology & Communication at Polytechnic Mersing, Johor.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>12.</strong> SEPTEMBER 2017 <span data-feather='award'></span></span>
                     <h4>POLYSKILLS 2017</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/IMG_4417.JPG" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">1st place for web design competition under Polytechnic Malaysia at Polytechnic Tuanku Syed Sirajuddin, Perlis.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInRight" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>13.</strong> AUGUST 2017 <span data-feather='award'></span></span>
                     <h4>CODE HUNT 2017</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/IMG_3609.JPG" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">2nd place for Code Hunt competition category Java & C++ under Polytechnic Malaysia at Polytechnic Balik Pulau, Pulau Pinang.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex pb-3 wow slideInLeft" data-wow-duration="2s">
               <div class="work-box bg-transparent">
                  <div class="work-content">
                     <span><strong>14.</strong> JUN 2015 <span data-feather='award'></span></span>
                     <h4>MYCCSKILLS 2015</h4>
                  </div>
                  <div class="work-img pop" style="height: 280px;">
                     <img src="images/IMG_5323.JPG" class="img-fluid " alt="...">
                  </div>
                  <div class="work-content">
                     <p class="lead">2nd place for MyCcSkills competition category web design under Kolej Komuniti at Kolej Komuniti Kuala Langat, Selangor.</p>
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