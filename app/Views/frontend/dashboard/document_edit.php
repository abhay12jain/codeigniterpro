<div class="row mb-4">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card ">
      <div class="card-body rounded">
        <h4 class="mb-3">Edit Document</h4>
        <div class=" d-flex p-0">
          <div class="col-12 col-offset-2">
            <div class="card mt-3">
              <div class="step">
                <form method="post" id="update_tender" name="update_tender" action="<?= site_url('/UserDashboardController/document_update') ?>">
                  <input type="hidden" name="id" id="id" value="<?php echo $doc['id']; ?>">
                 
                    <!-- <div class="col-sm-12"><h4>Basic Details</h4></div> -->
                    
                    <table class="table table-bordered table-bordered" id="dynamic_field">
                      <tr>
                        <td><h6>Document Type</h6>
                          <select id="Select1" name="document_type[]" class="Modified-Select" >
                            <option value="Technical" <?php if($doc['document_type']=='Technical'){ echo"selected=selected";}?> >Technical </option>
                            <option value="Financial" <?php if($doc['document_type']=='Financial'){ echo"selected=selected";}?>>Financial </option>
                            <option value="Common Document" <?php if($doc['document_type']=='Common Document'){ echo"selected=selected";}?>>Common Document </option>
                            <option value="One time Document" <?php if($doc['document_type']=='One time Document'){ echo"selected=selected";}?>>One time Document </option>
                            
                          </select>
                        </td>
                        <td>
                          <h6>Documents Name</h6>
                          <input autocomplete="off" class="form-control Modified-file" type="text" name="document_name[]" value="<?php echo $doc['document_name']; ?>" required>
                        </td>

                        <td>
                          <h6>Documents</h6>
                          <input autocomplete="off" class="form-control Modified-file" type="file" name="document_file" value="<?php echo $doc['document_file']; ?>">
                        </td>

                        <td>
                          <h6>Documents</h6>
                          <a href="<?php echo base_url().'/uploads/tender_document/'.$doc['document_file']; ?>" download>Download Document</a>
                        </td>

                        <td>
                          <h6>&nbsp;</h6>
                            <a href="<?php echo base_url('UserDashboardController/rfp_document_edit_delete/'.$doc['id']);?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>

                        <td>
                          <h6>&nbsp;</h6>
                          <button type="button" name="add" id="add" class="btn btn-success">+</button>
                        </td>

                        <!-- <td><h6>&nbsp;</h6><button type="button" name="add" id="add" class="btn btn-success">+</button></td>   -->
                      </tr>

                      <!-- <tr>
                                                    <td><h6>Document Type</h6>
                                                        <select id="Select1" name="workitem_name[]" class="Modified-Select" >
                                                            <option>Documents Types </option>
                                                            <option value="Technical">Technical </option>
                                                            <option value="Financial">Financial </option>
                                                            <option value="Common Document">Common Document</option>
                                                            <option value="One time Document">One time Document</option>
                                                        </select>
                                                    </td>
                                                    <td><h6>Documents Name</h6><input autocomplete="off" class="form-control Modified-file" type="text" name="workitem_description[]" required></td>
                                                    <td><h6>Documents</h6><input autocomplete="off" class="form-control Modified-file" type="file" name="document_file[]" required></td>
                                                    <td><h6>&nbsp;</h6><button type="button" name="add" id="add" class="btn btn-success">+</button></td>  
                                                </tr> -->
                    </table>    
                                                                  
                      <button class="action submit btn btn-outline-success float-end">Update</button>
                    
                </form> 
              </div>                                    
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
           
<script>
        $(document).ready(function () {
        var i=1;  
              $('#add').click(function(){  
                   i++;  
                   $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><h6>Document Type</h6><select id="Select1" name="workitem_name[]" class="Modified-Select" ><option>Documents Types </option><option value="Technical">Technical </option><option value="Financial">Financial </option><option value="Common Document">Common Document</option><option value="One time Document">One time Document</option></select></td><td><h6>Documents Name</h6><input autocomplete="off" class="form-control Modified-file" type="text" name="workitem_description[]" required></td><td><h6>Documents</h6><input autocomplete="off" class="form-control Modified-file" type="file" name="workitem_file[]" required></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
              });
          
              $(document).on('click', '.btn_remove', function(){  
                   var button_id = $(this).attr("id");   
                   $('#row'+button_id+'').remove();  
              }); 

     ////////////////
     $('#add_work').click(function(){  
                   i++;  
                   $('#work_dynamic_field').append('<tr id="row_work'+i+'" class="dynamic-added"><td><h6>Document Type</h6><label>Work Item<br> Documents</label></td><td><h6>Upload Document</h6><input autocomplete="off" class="form-control Modified-file work_doc" type="file" name="workitem_document[]"><div>Document Name: <label class="work_filename"> </label></div><div>Document Size: <label class="work_filesize"> </label></div><td><h6>Document Name</h6><input  class="form-control Modified-file" name="workitem_name[]" required /></td></td><td><h6>Description</h6><textarea class="form-control Modified-file" name="workitem_description[]"></textarea></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
              });
          
              $(document).on('click', '.btn_remove', function(){  
                   var button_id = $(this).attr("id");   
                   $('#row_work'+button_id+'').remove();  
              }); 



              ////////////////
     $('#nit_add').click(function(){  
                   i++;  
                   $('#nit_dynamic_field').append('<tr id="row_nit'+i+'" class="dynamic-added"><td><h6>Document Type</h6><label>NIT Document</label></td><td><h6>Upload Document</h6><input autocomplete="off" class="form-control Modified-file nit_doc" type="file" name="nit_document[]"><div>Document Name: <label class="nit_filename"> </label></div><div>Document Size: <label class="nit_filesize"> </label></div></td><td><h6>Document Name</h6><input autocomplete="off"  class="form-control Modified-file" name="nit_name[]" required /></td><td><h6>Description</h6><textarea class="form-control Modified-file" name="nit_description[]"></textarea></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
              });
          
              $(document).on('click', '.btn_remove', function(){  
                   var button_id = $(this).attr("id");   
                   $('#row_nit'+button_id+'').remove();  
              });   


        });


    jQuery("#client_nme").on('change',function(e){
          //alert($(this).val());
          // var email_id = jQuery('#email_id').val();
          //             $.ajax({
          //                 type: 'POST',
          //                 url: "<?php echo base_url();?>/Usersignup/otp",
          //                 data: {email_id:email_id},
          //                 success: function(resultData) { 
                            
                           
          //                 }
          //           });

            });


    $(document).on("change",'.nit_doc', function(e){
        $(this).next().find('label').text(e.target.files[0].name);
           var iSize = (e.target.files[0].size / 1024); 
           iSize = (Math.round(iSize * 100) / 100);
        $(this).next().next().find('label').html( iSize  + "kb"); 
    });

    $(document).on("change",'.work_doc', function(e){
        $(".work_filename").text(e.target.files[0].name);
           var iSize = (e.target.files[0].size / 1024); 
           iSize = (Math.round(iSize * 100) / 100);
        $(".work_filesize").html( iSize  + "kb"); 
    });



     </script>
        </div>
    </div>