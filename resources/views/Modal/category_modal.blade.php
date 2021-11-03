<!-- Button trigger modal -->

<!-- Modal -->
@foreach($category as $cat)
<div class="modal fade" id="exampleModal{{ @$cat->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="updateform">
           @csrf
          <input type="hidden" id="id" name="id" />
         <div class="form-group">
              <label for="inputName">Category-Name</label>
              <input type="text" id="category_name" name="category_name" value="{{$cat->category_name}}" class="form-control ">
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="update_data" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
      </script>
    </div>
  </div>
</div>
@endforeach
