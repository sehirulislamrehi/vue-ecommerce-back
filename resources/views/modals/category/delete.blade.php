<div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel">Are you sure want to delete this Category</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<div class="modal-footer">
<form action="{{ route('category.do.delete', $category->id) }}" method="post" class="ajax-form" enctype="multipart/form-data">
          @csrf
          <button type="submit" class="btn btn-danger">Yes</button>
     </form>
     <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
</div>