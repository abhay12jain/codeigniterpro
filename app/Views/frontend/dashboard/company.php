<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card">
       <div class="card ">
           <div class="card-body rounded">
                <h4 class="mb-3">Add Organization</h4>
                <div class=" d-flex justify-content-center">
                    <div class="col-12">                                        
                        <div class="mt-3">
                            <div class="step">
                                <form method="post" id="add_create" name="add_create" action="<?= site_url('/UserDashboardController/add_company') ?>">
                                  <div class="row">
                                    <div class="col-sm-12">
                                    <h4>Organization</h4>
                                  </div>
                                    
                                        <div class="col-sm-6">
                                            <select id="zone" name="zone" class="Modified-Select">
                                                <option>Select Zone</option>
                                                <option value="East">East</option>
                                                <option value="West">West</option>
                                                <option value="North">North</option>
                                                <option value="South">South</option>
                                                <option value="10">10</option>
                                            
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="client_nme" class="Modified-Input" name="company_name" type="text" placeholder="Organization Name" />
                                            
                                        </div>
                                        <div class="col-sm-6">
                                           <select  name="state" class="Modified-Select" id="State">
                                               <option>Select State</option>
                                                            
                                               <?php foreach($state_data as $row):?>
                                                   <option value="<?php echo $row['state'];?>"><?php echo $row['state']; ?></option>
                                               <?php endforeach;?>
                                                           
                                           </select>
                                       </div>
                                       <div class="col-sm-6">
                                           <select  name="circle" class="Modified-Select" id="sub_category">
                                            <option>Select Circle</option>
                                            
                                            </select>
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


    $(document).on("change",'#State', function(e){
        var getByzone = $(this).val();
// alert(getByzone);
         $.ajax({
              type: 'POST',
              url: "<?php echo base_url();?>/UserDashboardController/getcomp_info",
              data: {getByzone:getByzone},

              success: function(resultData) { 
                // alert(resultData);
              $("#sub_category").html(resultData); 
                
              }
                    });

});
  </script>

    


  