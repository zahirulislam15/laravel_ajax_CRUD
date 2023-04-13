<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
  <form action="" method="post" id="updateData">
    @csrf

    <input type="hidden" name="up_id" id="up_id" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="updateModalLabel">Update Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="errMsgContainer">

          </div>
          <div class="form-group">
            <label for="Product Name">Product Name</label><br>
            <input type="text" name="name" id="up_name" class="form-control" placeholder="Name">
          </div>

          <div class="form-group py-3">
            <label for="Product Price">Product value</label>
            <input type="text" name="price" id="up_price" class="form-control" placeholder="Price">
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary update_product">Update</button>
        </div>
      </div>
    </div>
  </form>
</div>