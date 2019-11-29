<!DOCTYPE html>
<html lang="en">
    <!-- head include -->
    @include('master_public.head')
    <!-- End head include -->
   <body style="position:relative;overflow-x: hidden;-webkit-overflow-scrolling: touch;">
      <!-- Top Header -->
      <!-- End Top Header -->
      @yield('content')
      <!-- Footer -->
      @include('master_public.footer')
      <!-- End Footer -->
      <!-- End Portfolio -->
      <!-- JavaScript Libraries -->
      @include('master_public.jscript')
   </body>
</html>