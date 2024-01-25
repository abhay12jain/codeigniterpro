<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card">
       <div class="card step">
           <div class="card-body rounded">
            <div class="row">
                <form method="post" id="update_user" name="update_user" 
                action="<?= site_url('/UserDashboardController/circle_update') ?>">
                  <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">
                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-6">
                      <h4>Zone</h4>
                      <select id="zone" name="zone" class="Modified-Select"  required>
                          <option value="">Zone</option>
                          <option value="East" <?php if($user_obj['zone']=='East'){ echo"selected=selected";}?>>East</option>
                          <option value="West" <?php if($user_obj['zone']=='West'){ echo"selected=selected";}?>>West</option>
                          <option value="North" <?php if($user_obj['zone']=='North'){ echo"selected=selected";}?>>North</option>
                          <option value="South" <?php if($user_obj['zone']=='South'){ echo"selected=selected";}?>>South</option>
                          <option value="10" <?php if($user_obj['zone']=='10'){ echo"selected=selected";}?>>10</option>
                                                        
                      </select>
                  </div>
                    
                  
                  <div class="col-sm-6">
                    <h4>State</h4>
                      <input id="Text1" class="Modified-Input" name="state" type="text" placeholder="State" value="<?php echo $user_obj['state']; ?>" />
                  </div>
                  <div class="col-sm-6">
                    <h4>Circle</h4>
                      <input id="Text1" class="Modified-Input" name="circle" type="text" placeholder="Circle" value="<?php echo $user_obj['circle']; ?>" />
                  </div>
                          
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                  </div>
                </div>
                </form>
              </div>
 </div>
</div>
</div>
</div>
 <script>
   $(document).on("change",'#zone', function(e){
        var getByzone = $(this).val();
//alert(getByzone);
         $.ajax({
              type: 'POST',
              url: "<?php echo base_url();?>/UserDashboardController/getzone_info",
              data: {getByzone:getByzone},
              success: function(resultData) { 
              $("#client_nme").html(resultData); 
                
              }
                    });

});
 </script>   
