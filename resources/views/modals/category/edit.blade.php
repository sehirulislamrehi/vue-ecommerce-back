<div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<div class="modal-body">
     <form action="{{ route('category.update', $category->id) }}" method="post" class="ajax-form" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
               <label>Category Name</label>
               <input type="text" class="form-control" name="name" value="{{ $category->name }}">
          </div>
          <div class="form-group">
               <label>Category Image</label> <br>
               <img src="{{ asset('images/category/'. $category->image) }}" id="image_preview_container" class="default-thhumbnail" width="100px" alt=""> <br> <br>
               <input type="file" class="form-control-file" name="image" id="image">
          </div>
          <div class="form-group">
               <button type="submit" class="btn btn-success">Update</button>
          </div>
     </form>
</div>
<div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>