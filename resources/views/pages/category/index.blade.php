@extends('template')

@section('meta')
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
@endsection

@section('body')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
     <div class="br-pagetitle">
          <i class="icon ion-ios-home-outline"></i>
          <div>
               <h4>All Category</h4>
          </div>
     </div><!-- d-flex -->

     <div class="br-pagebody">
          <div class="br-section-wrapper">

               <!-- add category row start -->
               <div class="row" style="margin-bottom: 30px;">
                    <div class="col-md-12">
                         <!-- Button trigger modal -->
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Add
                         </button>

                         <!-- Modal -->
                         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                        <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Category</h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                             </button>
                                        </div>
                                        <div class="modal-body">
                                             <form action="{{ route('category.create') }}" method="post" class="ajax-form" enctype="multipart/form-data">
                                                  @csrf
                                                  <div class="form-group">
                                                       <label>Category Name</label>
                                                       <input type="text" class="form-control" name="name">
                                                  </div>
                                                  <div class="form-group">
                                                       <label>Category Image</label> <br>
                                                       <img src="{{ asset('images/default.jpg') }}" id="image_preview_container" class="default-thhumbnail" width="100px" alt=""> <br> <br>
                                                       <input type="file" class="form-control-file" name="image" id="image">
                                                  </div>
                                                  <div class="form-group">
                                                       <button type="submit" class="btn btn-success">Add</button>
                                                  </div>
                                             </form>
                                        </div>
                                        <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <!-- Modal -->
                    </div>
               </div>
               <!-- add category row end -->

               <!-- category list table start -->
               <div class="row">
                    <div class="col-md-12 table-responsive">
                         <table class="table table-bordered ajax-datatable" id="datatable">
                              <thead>
                                   <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                   </tr>
                              </thead>
                              <tbody>
                              </tbody>
                         </table>
                    </div>
               </div>
               <!-- category list table end -->

          </div>
     </div>

     <!-- ########## END: MAIN PANEL ########## -->
     @endsection

     @section('datatables')
     <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
     <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
     <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

     <script type="text/javascript">
          $(function() {
               $('.ajax-datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('category.data') }}",
                    columns: [{
                              data: 'name',
                              name: 'name'
                         },
                         {
                              data: 'image',
                              name: 'image'
                         },
                         {
                              data: 'action',
                              name: 'action',
                         },
                    ]
               });
          });
     </script>
     @endsection