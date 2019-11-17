<!DOCTYPE html>
<html lang="en">
   @include('master_private.head')
   <body>
      @include('master_private.topnavbar')
      <div class="container-fluid">
         <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
               @include('master_private.menu')
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
               @yield('private_content')
            </main>
         </div>
      </div>
      @include('master_private.jscript')
   </body>
</html>