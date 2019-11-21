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
<section class="py-0">
   <div class="container animatedParent" data-sequence='500' id="home" style="padding-top: 4.5rem;padding-bottom: 4.5rem;">
      <div class="row align-items-center">
         <div class="col-lg-12 mx-auto text-center m-4">
            <a href="" class="btn btn-outline-dark btn-sm">Home Page</a>
         </div>
      </div>
      <div class="row align-items-center "  id="vantabird">
         <div class="col-sm-8 col-lg-10 col-xl-4 text-xl-right mt-5 mt-xl-0 order-lg-1 order-2 pr-xl-4 animated fadeInLeftShort slowest" data-id='1'>
            <div class="overflow-hidden ">
               <p class="font-italic lead" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">Currently Im Programmer at one of private sector in Seri Kembangan, Selangor. Mostly develop applications and maintenance for previous project, setup and configure server, attend meeting and present to deal with client. 
               </p>
               <div class="py-2 mx-auto">
                  <a href="https://github.com/mnhazim" class="" target="_blank"><img src="images/icon/i-git.png" height="50"></a>
                  <a href="#" class=""><img src="images/icon/i-in.png" height="50"></a>
                  <a href="https://instagram.com/mnhazim__" class="" target="_blank"><img src="images/icon/i_ig.png" height="50"></a>
               </div>
            </div>
         </div>
         <div class="col-sm-8 col-lg-5 col-xl-4 mt-4 mt-xl-0 px-xl-4 order-lg-2 animated fadeInUpShort slowest" data-id='2'>
            <img class="w-100 radius-primary" src="images/model6.png" alt="" style="filter: blur(0px); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
         </div>
         <div class="col-sm-8 col-lg-5 col-xl-4 mt-5 mt-xl-0 order-3 align-self-lg-start align-self-xl-center pl-xl-4 animated fadeInRightShort slowest" data-id='3'>
            <div class="overflow-hidden">
               <h5 class="mb-3" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">Muhamad Noor Hazim Bin Mohamed Esa</h5>
            </div>
            <div class="overflow-hidden">
               <p style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">noorhazimesa@gmail.com <br>(+60)16 783 2383</p>
               <p style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">No 98, Perjiranan 10/14 Taman Bakti 2 81700 Pasir Gudang, Johor.</p>
               <p class="intro-subtitle"><span class="text-slider-items" style="display: none;">Programmer</span><strong class="text-slider"></strong></p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="" id="default-process">
   <div class="container">
      <div class="row justify-content-center text-center mb-6">
         <div class="col-lg-6">
            <h1 class="display-4 ">TECHNOLOGY</h1>
            <hr class="short mt-4 border-secondary">
         </div>
      </div>
      <div class="row py-2">
         <div class="col-12">
            <div class="row align-items-center">
               <div class="col-lg-6 pb-lg-8 mt-4 mt-lg-0 mb-8 mb-lg-0">
                  <div class="py-2">
                     <h5>PROGRAMMING/LANGUAGES:</h5>
                     <div class="d-inline p-2">
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                     </div>
                  </div>
                  <div class="py-2">
                     <h5>DATABASE MANAGEMENT:</h5>
                     <div class="d-inline p-2">
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                     </div>
                  </div>
                  <div class="py-2">
                     <h5>SYSTEMS:</h5>
                     <div class="d-inline p-2">
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                     </div>
                  </div>
                  <div class="py-2">
                     <h5>IDE TOOLS:</h5>
                     <div class="d-inline p-2">
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                     </div>
                  </div>
                  <div class="py-2">
                     <h5>EXTRA SKILLS:</h5>
                     <div class="d-inline p-2">
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
                        </a>
                        <a href="#"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="...">
                        <img src="images/1573400675.png" class="rounded mb-2" alt="..." height="40">
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
         <div class="col-lg-6">
            <h1 class="display-4 ">EDUCATION</h1>
            <hr class="short mt-4 border-secondary">
         </div>
      </div>
      <div class="row py-2">
         <div class="col-12">
            <div class="row align-items-center">
               <div class="col-lg-6 order-lg-2 text-center">
                  <img src="images/21427.png" alt="" width="100%">
               </div>
               <div class="col-lg-6 pb-lg-8 mt-4 mt-lg-0 mb-8 mb-lg-0">
                  <div class="py-2">
                     <span>2014 - 2015 <strong>Politeknik Mersing, Johor</strong></span>
                     <h4>Diploma Information Technology and Communication (Programming)</h4>
                     <h6 class="lead">3.48 CGPA. In Polytechnic Mersing Johor, basically courses about hardware and software, database, Java, C++, HTML and CSS. For final year project must develop one system and fully function.</h6>
                     <ul class="lead">
                        <li>Head of Department Award Semester 5 (3.64 GPA)</li>
                        <li>Head of Department Award Semester 3 (3.50 GPA)</li>
                     </ul>
                  </div>
                  <div class="py-2">
                     <span>2014 - 2015 <strong>Kolej Komuniti Bandar Penawar</strong></span>
                     <h4>Certificate of Computer Software Application(Programming)</h4>
                     <h6 class="lead">3.76 CGPA. In Kolej Komunitii, basically courses about software and hardware, Microsoft Office, Java, database, HTML and CSS. Develop the simple system for the last semester in kolej komuniti.</h6>
                     <ul class="lead">
                        <li>Head of Department Award Semester 3 (3.90 GPA)</li>
                        <li>Head of Department Award Semester 2 (3.91 GPA)</li>
                        <li>Head of Department Award Semester 1 (3.92 GPA)</li>
                     </ul>
                  </div>
                  <div class="py-2">
                     <span>2012 - 2014 | <strong>Sekolah Menengah Bandar Penawar</strong></span>
                     <h4>Malaysian Certificate of Education(SPM)</h4>
                     <h6 class="lead">Science's class from 2012 and mostly study about pure science like Physics, chemistry, Biology and etc.</h6>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row justify-content-center text-center mb-6">
         <div class="col-lg-6">
            <h1 class="display-4 ">EXPERIENCE</h1>
            <hr class="short mt-4 border-secondary">
         </div>
      </div>
      <div class="row align-items-middle">
               <div class="col-lg-6 text-center">
                  <!-- <h1 class="display-4 ">EXPERIENCE</h1> -->
                  <img src="images/2668180.png" alt="" width="100%">
               </div>
               <div class="col-lg-6 mt-4 mt-lg-0 mb-8 mb-lg-0 my-lg-8">
                  <div class="py-2">
                     <span>01 FEB 2018 – NOW | <strong>PROGRAMMER</strong></span>
                     <h4>MYNET TECHNOLOGIES SDN BHD</h4>
                     <p class="lead">Develop applications and maintenance for previous project, setup and configure server, attend meeting and present to deal with client.</p>
                  </div>
                  <div class="py-2">
                     <span>2018(02 JULAI 2018 – 16 NOVEMBER 2018) | <strong>INTERNSHIP(POLYTECHNIC)</strong></span>
                     <h4>KOLEJ KOMUNITI PASIR GUDANG</h4>
                     <p class="lead">System development, design poster, develop arduino project, design data flow for system, Manage Small Event.</p>
                  </div>
                  <div class="py-2">
                     <span>2015(THREE MONTH) | <strong>INTERNSHIP(KOLEJ KOMUNITI)</strong></span>
                     <h4>PC MAXIMA KOTA TINGGI</h4>
                     <p class="lead">Repair personal computer, repair printer, format computer, seller and promoter.</p>
                  </div>
               </div>
            </div>
            <div class="row justify-content-center text-center mb-6">
         <div class="col-lg-10">
            <h1 class="display-4 ">RECOGNITION & PARTICIPANT</h1>
            <hr class="short mt-4 border-secondary">
         </div>
      </div>
      <div class="row py-2">
         <div class="col-12">
            <div class="row align-items-end">
               <div class="col-lg-6 mx-auto order-lg-2 text-center">
                  <img src="images/participant.png" alt="" width="100%">
               </div>
               <!-- Jangan lupa letak PWTC comp -->
                  <div class="py-1 col-lg-6 col-md-6 col-sm-12 mt-4">
                     <span><strong>1.</strong> JANUARY 2019 </span>
                     <h4>Advance Web Hacking & Defense</h4>
                     <p class="lead">Join the program Advance Web Hacking & Defense to becoming a web pentester in Politeknik Mersing Johor under the program Cyber Range Politeknik Mersing, Johor.</p>
                  </div>
                  <div class="py-1 col-lg-6 col-md-6 col-sm-12 mt-4">
                     <span><strong>2.</strong> DECEMBER 2018 <span data-feather='award'></span></span>
                     <h4>e-REKA 2018</h4>
                     <p class="lead">Gold Award for The Castro System in e-REKA 2018 competition category ICT & Multimedia/Art,Design & Creativity at University Malaysia Perlis(UniMAP), Perlis.</p>
                  </div>
                  <div class="py-1 col-lg-6 col-md-6 col-sm-12 mt-4">
                     <span><strong>3.</strong> DECEMBER 2018 <span data-feather='award'></span></span>
                     <h4>e-REKA 2018</h4>
                     <p class="lead">Gold Award for e-FMs System in e-REKA 2018 competition category ICT & Multimedia/Art,Design & Creativity at University Malaysia Perlis(UniMAP), Perlis.</p>
                  </div>
                  <div class="py-1 col-lg-6 col-md-6 col-sm-12 mt-4">
                     <span><strong>4.</strong> OKTOBER 2018 <span data-feather='award'></span></span>
                     <h4>INNOVATE JOHOR 2018</h4>
                     <p class="lead">1st place for iKeyBoxs System in INATEX 2018 competition category IPT/Kolej Komuniti at University Technology Malaysia, Skudai.</p>
                  </div>

                  <div class="py-1 col-lg-6 col-md-6 col-sm-12 mt-4">
                     <span><strong>5.</strong> OKTOBER 2018</span>
                     <h4>LIGA ILMU SERANTAU 2018 (INDONESIA)</h4>
                     <p class="lead">Join Expo for eFMs System at Polytechnic Jambi, Indonesia under Polytechnic Mersing, Johor.</p>
                  </div>
                  <div class="py-1 col-lg-6 col-md-6 col-sm-12 mt-4">
                     <span><strong>6.</strong> AUGUST 2018 <span data-feather='award'></span></span>
                     <h4>SPIKK 2018</h4>
                     <p class="lead">Bronze medal for i‐Meet System in SPIKK 2018 competition under Kolej Komuniti at Kolej Komuniti Jelebu, Negeri Sembilan.</p>
                  </div>
                  <div class="py-1 col-lg-6 col-md-6 col-sm-12 mt-4">
                     <span><strong>7.</strong> JULY 2018 <span data-feather='award'></span></span>
                     <h4>PNiCC’18</h4>
                     <p class="lead">3rd place Best Project and Gold Medal for eFMs System in @PMJB National Innovation & Creativity Competition 2018 (PNiCC’18) competition at UTC Johor, GALLERIA@KOTARAYA.</p>
                  </div>
                  <div class="py-1 col-lg-6 col-md-6 col-sm-12 mt-4">
                     <span><strong>8.</strong> JULY 2018 <span data-feather='award'></span></span>
                     <h4>PNiCC’18</h4>
                     <p class="lead">Gold Medal for TheCastro System in @PMJB National Innovation & Creativity Competition 2018 (PNiCC’18) competition at UTC Johor, GALLERIA@KOTARAYA.</p>
                  </div>
                  <div class="py-1 col-lg-6 col-md-6 col-sm-12 mt-4">
                     <span><strong>9.</strong> MAY 2018 <span data-feather='award'></span></span>
                     <h4>11TH FIRA MALAYSIA CUP</h4>
                     <p class="lead">2nd runner for competition 11th FIRA MALAYSIA CUP category MyBOT(Bridge2.0) at Polytechnic Mersing, Johor</p>
                  </div>
                  <div class="py-1 col-lg-6 col-md-6 col-sm-12 mt-4">
                     <span><strong>10.</strong> MARCH 2018 <span data-feather='award'></span></span>
                     <h4>SPEK 2018</h4>
                     <p class="lead">Gold Medal for competition Student’s Projects Exchibitions at Polytechnic Mersing, Johor.</p>
                  </div>
                  <div class="py-1 col-lg-6 col-md-6 col-sm-12 mt-4">
                     <span><strong>11.</strong> MARCH 2018 <span data-feather='award'></span></span>
                     <h4>PIEX 2018</h4>
                     <p class="lead">1st place Best Project & Gold Medal for competition Project Exhibition Version 3.0 (PIEX) under Department of Information Technology & Communication at Polytechnic Mersing, Johor.</p>
                  </div>
                  <div class="py-1 col-lg-6 col-md-6 col-sm-12 mt-4">
                     <span><strong>12.</strong> SEPTEMBER 2017 <span data-feather='award'></span></span>
                     <h4>POLYSKILLS 2017</h4>
                     <p class="lead">1st place for web design competition under Polytechnic Malaysia at Polytechnic Tuanku Syed Sirajuddin, Perlis.</p>
                  </div>
                  <div class="py-1 col-lg-6 col-md-6 col-sm-12 mt-4">
                     <span><strong>13.</strong> AUGUST 2017 <span data-feather='award'></span></span>
                     <h4>CODE HUNT 2017</h4>
                     <p class="lead">2nd place for Code Hunt competition category Java & C++ under Polytechnic Malaysia at Polytechnic Balik Pulau, Pulau Pinang.</p>
                  </div>
                  <div class="py-1 col-lg-6 col-md-6 col-sm-12 mt-4">
                     <span><strong>14.</strong> JUN 2015 <span data-feather='award'></span></span>
                     <h4>MYCCSKILLS 2015</h4>
                     <p class="lead">2nd place for MyCcSkills competition category web design under Kolej Komuniti at Kolej Komuniti Kuala Langat, Selangor.</p>
                  </div>
            </div>
         </div>
      </div>
      <!--/.row-->
   </div>
   <!--/.container-->
</section>
@stop