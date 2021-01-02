<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Twitter -->
     <meta name="twitter:site" content="@themepixels">
     <meta name="twitter:creator" content="@themepixels">
     <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:title" content="Bracket Plus">
     <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
     <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

     <!-- Facebook -->
     <meta property="og:url" content="http://themepixels.me/bracketplus">
     <meta property="og:title" content="Bracket Plus">
     <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

     <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
     <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
     <meta property="og:image:type" content="image/png">
     <meta property="og:image:width" content="1200">
     <meta property="og:image:height" content="600">

     <!-- Meta -->
     <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
     <meta name="author" content="ThemePixels">

     <title>Vue Js Ecommerce Admin Panel</title>

     <!-- vendor css -->
     <link href="{{  asset('lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
     <link href="{{  asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
     <link href="{{  asset('lib/select2/css/select2.min.css') }}" rel="stylesheet">

     <!-- Bracket CSS -->
     <link rel="stylesheet" href="{{ asset('css/bracket.css') }}">
     <link rel="stylesheet" href="{{ asset('css/bracket.simple-white.css') }}">
</head>

<body>

     <div class="d-flex align-items-center justify-content-center bg-gray-200 ht-100v">

          <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
               <div class="signin-logo tx-center tx-28 tx-bold tx-inverse mg-b-60"><span class="tx-normal">[</span> Register <span class="tx-info">Here</span> <span class="tx-normal">]</span></div>

               @if ($errors->any())
               <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                         @endforeach
                    </ul>
               </div>
               @endif

               @if(session()->has('success'))
               <div class="alert alert-success">
                    {{ session()->get('success') }}
               </div>
               @endif

               <form action="{{ route('do.register') }}" method="post">
                    @csrf
                    <div class="form-group">
                         <input type="text" class="form-control" name="name" placeholder="Enter your name">
                    </div><!-- form-group -->
                    <div class="form-group">
                         <input type="email" class="form-control" name="email" placeholder="Enter your email">
                    </div><!-- form-group -->
                    <div class="form-group">
                         <input type="password" class="form-control" name="password" placeholder="Enter your password">
                    </div><!-- form-group -->
                    <div class="form-group">
                         <input type="password" class="form-control" name="password_confirmation" placeholder="Enter your password again">
                    </div><!-- form-group -->

                    <button type="submit" class="btn btn-info btn-block">Sign Up</button>
               </form>

               <div class="mg-t-40 tx-center">Already a member? <a href="{{ route('login') }}" class="tx-info">Sign In</a></div>
          </div><!-- login-wrapper -->
     </div><!-- d-flex -->

     <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
     <script src="{{ asset('lib/jquery-ui/ui/widgets/datepicker.js') }}"></script>
     <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{ asset('lib/select2/js/select2.min.js') }}"></script>
     <script>
          $(function() {
               'use strict';

               $('.select2').select2({
                    minimumResultsForSearch: Infinity
               });
          });
     </script>

</body>

</html>