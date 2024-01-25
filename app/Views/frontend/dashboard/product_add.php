<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card">
       <div class="card ">
           <div class="card-body rounded">
                <h4 class="mb-3">Add Product</h4>
                <div class="container d-flex justify-content-center">
                    <div class="col-11 col-offset-2">                                        
                        <div class="card mt-3">
                            <div class="card-body p-5 step">
                                <div class="row">
                                    <!-- <div class="col-sm-12"><h4></h4></div> -->
                                    <form method="post" id="add_create" name="add_create" action="<?= site_url('/UserDashboardController/add_product') ?>">
                                        
                                        <div class="col-sm-6">
                                            <input id="organization_name" class="Modified-Input" type="text" name="product_category" placeholder="Product Category" />
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="department" class="Modified-Input" name="sub_category" type="text" placeholder="Sub Category" />
                                        </div>
                                        
                                        <div class="card-footer">     
                                            <button class="btn btn-sm btn-outline-warning">Submit</button>                                         
                                            
                                            
                                        </div>
                                    </form>                                                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
   </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          zone: {
            required: true,
          },
          organization_name: {
            required: true,
          },
          department: {
            required: true,
          },
          division: {
            required: true,
            
          },
        },
        messages: {
          zone: {
            required: "Zone is required.",
          },
          organization_name: {
            required: "Organization Name is required.",
          },
          department: {
            required: "Department is required.",
          },
          division: {
            required: "Division is required.",
            
          },
        },
      })
    }
  </script>
