<div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<div class="modal-body">
     <form action="{{ route('product.update', $product->id) }}" method="post" class="ajax-form" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
               <label>Name</label>
               <input type="text" class="form-control" name="name" value="{{ $product->name }}">
          </div>
          <div class="form-group">
               <label>Description</label>
               <textarea name="description" class="form-control" rows="3">{{ $product->description }}</textarea>
          </div>
          <div class="form-group">
               <label>Regular Price</label>
               <input type="text" class="form-control" name="regular_price" value="{{ $product->regular_price }}">
          </div>
          <div class="form-group">
               <label>Offer Price</label>
               <input type="text" class="form-control" name="offer_price" value="{{ $product->offer_price }}">
          </div>
          <div class="form-group">
               <label>Product Category</label>
               <select name="category_id" class="form-control">
                    @foreach( App\Models\Category::orderBy('id','desc')->get() as $category )
                    <option value="{{ $category->id }}" @if( $product->category_id == $category->id ) selected @endif >{{ $category->name }}</option>
                    @endforeach
               </select>
          </div>
          <div class="form-group">
               <label>Image</label> <br>
               <img src="{{ asset('images/product/'. $product->image) }}" id="image_preview_container" class="default-thhumbnail" width="100px" alt=""> <br> <br>
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