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

     <!-- MY MODAL -->
     <div class="modal fade" id="myModal" role="dialog" aria-labelledby="modal-default-header">
          <div class="modal-dialog" role="document">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>
               <div class="modal-content">

               </div>
          </div>
     </div>
     <!-- MY MODAL END -->

     @include('includes.footer')

     @include('includes.script')

</body>

</html>