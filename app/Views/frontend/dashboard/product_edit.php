<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card">
       <div class="card step">
           <div class="card-body rounded">
  <h4 class="mb-3">Product Edit</h4>
    <form method="post" id="update_user" name="update_user" 
    action="<?= site_url('/UserDashboardController/p_update') ?>">
    <div class="row">
      <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>"> 
      <div class="col-sm-6">
        <h4>Product Category</h4>
          <input id="Text1" class="Modified-Input" type="text" name="product_category" placeholder=" Product Category" value="<?php echo $user_obj['product_category']; ?>" />
      </div>
      <div class="col-sm-6">
        <h4>Sub Category</h4>
          <input id="Text1" class="Modified-Input" name="sub_category" type="text" placeholder="Sub Category" value="<?php echo $user_obj['sub_category']; ?>" />
      </div>
              
      <div class="form-group">
        <button type="submit" class="btn btn-outline-primary">Update</button>
      </div>
    </div>
    </form>
  </div>
</div>
</div>
</div>
    
