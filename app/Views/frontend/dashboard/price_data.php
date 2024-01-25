<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card">
       <div class="card ">
           <div class="card-body rounded">
                <h4 class="mb-3">Add Price</h4>
                <div class=" d-flex justify-content-center">
                    <div class="col-11 col-offset-2">                                        
                        <div class="card mt-3">
                            <div class="card-body p-5 step">
                                <div class="row">
                                    <?//php echo $get_id  ?>

                                    <?//php echo $hjd['tender_id']; ?>

                                    


                                    <form method="post" id="dynamic_field"  action="<?= site_url('/UserDashboardController/add_price' ) ?>" enctype="multipart/form-data" >
                                        <input type="hidden" name="tender_id" value="<?php echo $tend['tender_id']; ?>" />

                                        <div class="col-sm-6">
                                            <input id="" class="Modified-Input" name="price_file" type="file" placeholder="" />
                                        </div>
                                        
                                        <div class="card-footer">     
                                        <button type="submit" class="btn btn-sm btn-outline-secondary float-end">Submit</button>
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
          product_category: {
            required: true,
          },
          sub_category: {
            required: true,
          },
          
        },
        messages: {
          product_category: {
            required: "Product Category is required.",
          },
          sub_category: {
            required: "Sub Category is required.",
          },
          
        },
      })
    }
  </script>
