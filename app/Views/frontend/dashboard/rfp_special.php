<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card">
       <div class="card ">
           <div class="card-body rounded">                
                <div class="col-sm-12">
                    <h4>Special Document Upload</h4>
                </div>
                <div class=" d-flex justify-content-center">
                    <div class="col-12 col-offset-2">                                        
                        <div class="card mt-3">
                            <form method="post" id="add_create" name="add_create" action="<?= base_url('/UserDashboardController/rfp_document_upload') ?>" enctype="multipart/form-data">
                                <h4>
                                    <!-- <a href="javascript:void(0)" class="add-more-form float-end btn btn-sm btn-outline-secondary">+</a> -->
                                    <!-- <td><h6>&nbsp;</h6><button type="button" name="add" id="add" class="btn btn-success">+</button></td> -->
                                </h4>
                                        <!-- <div class="card-body step p-0"> -->
                                            <!-- <div class="col-sm-12"> -->
                                                <!-- <h4 class="mb-3">Corrigendum</h4> -->
                                            <!-- </div> -->
                                            <table class="table table-bordered " id="dynamic_field">
                                                <tr>
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
                                                </tr>  
                                            </table>
                                                                               
                                    
                                        

                                          
                                            <button class="btn btn-outline-warning">Upload</button>                                         
                                            <!-- <button class="btn btn-sm btn-outline-secondary ">Cancel</button> -->
                                            <a href="<?php echo base_url('DashboardController/show_document');?>" class="btn btn-outline-primary " >Cancel</a>
                                            
                                        
                            </form>
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


              ////////////////
     $('#add').click(function(){  
                   i++;  
                   $('#dynamic_field').append('<tr id="row_nit'+i+'" class="dynamic-added"><td><h6>Document Type</h6><select id="Select1" name="workitem_name[]" class="Modified-Select" ><option value="Technical">Technical </option><option value="Financial">Financial </option><option value="Common Document">Common Document</option><option value="One time Document">One time Document</option></select></td><td><h6>Documents Name</h6><input autocomplete="off" class="form-control Modified-file" type="text" name="workitem_description[]" required></td><td><h6>Documents</h6><input autocomplete="off" class="form-control Modified-file" type="file" name="document_file[]" required></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
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


  