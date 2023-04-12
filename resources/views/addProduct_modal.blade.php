<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <form action="" method="post" id="removeData">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addModalLabel">Add Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="errMsgContainer">

          </div>
          <div class="form-group">
            <label for="Product Name">Product Name</label><br>
            <input type="text" name="name" id="name" class="form-control" placeholder="Name">
          </div>

          <div class="form-group py-3">
            <label for="Product Price">Product value</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Price">
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary add_product">Save Product</button>
        </div>
      </div>
    </div>
  </form>
</div>