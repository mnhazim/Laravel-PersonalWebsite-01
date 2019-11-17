<!DOCTYPE html>
<html lang="en">
    <!-- head include -->
    @include('master_public.head')
    <!-- End head include -->
   <body>
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