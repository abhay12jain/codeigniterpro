<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card">
       <div class="card ">
           <div class="card-body rounded">
                <h4 class="mb-3">Add Division</h4>
                <div class=" d-flex justify-content-center">
                    <div class="col-12">                                        
                        <div class="mt-3">
                            <div class="step">
                                <form method="post" id="add_create" name="add_create" action="<?= site_url('/UserDashboardController/add_division') ?>">
                                  <div class="row">
                                    <div class="col-sm-12">
                                    <h4>Division</h4>
                                  </div>
                                    
                                        <div class="col-sm-6">
                                            <select id="zone" name="zone" class="Modified-Select">
                                                <option>Zone</option>
                                                <option value="East">East</option>
                                                <option value="West">West</option>
                                                <option value="North">North</option>
                                                <option value="South">South</option>
                                            
                                            </select>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <input id="client_nme" class="Modified-Input" name="organization_name" type="text" placeholder="Company / Client Name" />
                                            
                                        </div>
                                        <div class="col-sm-6">
                                            
                                           
                                            <?php if(!empty($state_data)): ?>
                                                <select id="state" name="state" class="Modified-Select">
                                                    <option>Select State</option>
                                                    <?php foreach($state_data as $division){?>
                                                    <option value="<?php echo $division['state']; ?>"><?php echo $division['state']; ?></option>
                                                    <?php } ?>
                                                
                                                </select>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-sm-6">
                                           <select  name="circle" class="Modified-Select" id="circle">
                                            <option>Select Circle</option>
                                            
                                            </select>
                                        </div>
                                        <!-- <div class="col-sm-6">
                                            
                                           
                                            <?//php if(!empty($circle_data)): ?>
                                                <select id="client_nme" name="circle" class="Modified-Select">
                                                    <option>Select Circle</option>
                                                    <?//php foreach($circle_data as $division){?>
                                                    <option value="<?//php echo $division['circle']; ?>"><?//php echo $division['circle']; ?></option>
                                                    <?//php } ?>
                                                
                                                </select>
                                            <?//php endif; ?>
                                        </div> -->
                                        
                                        <!-- <div class="col-sm-6">
                                            <input id="state" class="Modified-Input" name="state" type="text" placeholder="State" />
                                            
                                        </div>

                                        <div class="col-sm-6">
                                            <input id="circle" class="Modified-Input" name="circle" type="text" placeholder="Circle" />
                                            
                                        </div> -->
                                        <div class="col-sm-6">
                                            <input id="department" class="Modified-Input" name="department" type="text" placeholder="Department" />
                                            
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="division" class="Modified-Input" name="division" type="text" placeholder="Division" />
                                        </div>  

                                        <div class="col-sm-6">
                                        <button class="btn btn-outline-primary">Submit</button>
                                        </div>                                                      
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


    $(document).on("change",'#state', function(e){
        var getByzone = $(this).val();
//alert(getByzone);
         $.ajax({
              type: 'POST',
              url: "<?php echo base_url();?>/UserDashboardController/getcomp_info",
              data: {getByzone:getByzone},
              success: function(resultData) { 
              $("#circle").html(resultData); 
                
              }
                    });

});
  </script>

    


  