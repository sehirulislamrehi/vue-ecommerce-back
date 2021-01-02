<!DOCTYPE html>
<html lang="en">

<head>
     @yield('meta')

     <title>Bracket Plus Responsive Bootstrap 4 Admin Template</title>

     @include('includes.css')
</head>

<body>

     @include('includes.left')

     @include('includes.topbar')

     @yield('body')

     @include('includes.script')

</body>

</html>