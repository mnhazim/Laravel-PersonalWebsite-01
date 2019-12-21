<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>MNHAZIM</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">
      <!-- Favicons -->
      <link href="{{ asset('images/icon/i_logoH.png') }}" rel="icon">
      <!-- Bootstrap CSS File -->
      <!-- MNhazim Stylesheet File -->
      <!-- =======================================================
         Theme Name: mnhazim
         Theme URL: http://mnhazim.com
         Author: mnhazim
         License: -
         ======================================================= -->
      <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/hazimstyle.css') }}" rel="stylesheet">
      <style type="text/css">
         html,
         body {
           height: 100%;
         }

         body {
           display: -ms-flexbox;
           display: flex;
           -ms-flex-align: center;
           align-items: center;
           padding-top: 40px;
           padding-bottom: 40px;
           background-color: #f5f5f5;
         }
      </style>
   </head>
   <body class="text-center" style="background-image: url({{ asset('images/bg-login.png') }});background-repeat: no-repeat;background-size: cover;background-position: 0% 100%;">
        
      <form class="form-signin" method="post" action="{{ route('login') }}">
        @if ($errors->any())
          <div class="alert alert-danger" role="alert">
            <span data-feather="alert-circle"></span><strong>&nbsp;Opps!</strong>, Serious bro?. Any Problem?
          </div>
        @endif
        @csrf
         <img class="mb-4" src="{{ asset('images/icon/i_logoH.png') }}" alt="" width="72" height="72">
         <h3 class="h3 mb-3 font-weight-normal">Whats up Bro. <br><small>Any good news ?</small></h3>
         <label class="sr-only">Email address</label>
         <input type="email" class="form-control" placeholder="Email address" required autocomplete="off" name="username">
         <label class="sr-only">Password</label>
         <input type="password" class="form-control" placeholder="Password" required autocomplete="off" name="password">
         <button class="btn btn-sm btn-danger btn-block" type="submit">Sign in</button>
         <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
      </form>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
      <script src="{{ asset('js/dashboard.js') }}"></script>
   </body>
</html>