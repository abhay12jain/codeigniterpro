 <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

     <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">

      <div class="toast-body text-white">

      </div>

    </div>

    <div id="toastsContainerTopRight" class="toasts-top-right fixed"></div>

    <!-- Content Header (Page header) -->

    <div class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6 mt-3">

            <h1 class="m-0">Upload Master Document</h1>

          </div><!-- /.col -->



        </div><!-- /.row -->

            <hr class="border-primary">

      </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->



    <!-- Main content -->

    <section class="content">

      <div class="container-fluid">

<div class="row mb-2">

          



    

     

    <?php if (session('msg')=='Data Not Added.') { ?>

        <div class="alert alert-danger alert-dismissible" style="width:100%">

            <?= session('msg') ?>

            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>

        </div>



      <?php }else{ 

       if(session('msg')){?>

        <div class="alert alert-info alert-dismissible" style="width:100%">

            <?= session('msg') ?>

            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>

        </div>

    <?php }} ?>

 

   

  <div class="col-md-12">



      <form method="post" action="<?= base_url('/DashboardController/document_master_upload') ?>" enctype="multipart/form-data">
                                
                                <div class="main-form step">
                                       <!-- <input type="hidden" name="tender_id" value="<?//php echo $id_val; ?>"> -->
                                <table class="table table-bordered" id="dynamic_field">
                                    <tr>
                                        <td><h6>Document Type </h6>
                            <select id="document_type1" name="document_type[]" class="Modified-Select form-control" required>
                                <option>Documents Types </option>
                                <option value="Technical">Technical </option>
                                <option value="Financial">Financial </option>
                                <option value="Common Document">Common Document</option>
                                <option value="One time Document">One time Document</option>
                            </select>
                                            <input type="hidden" name="document_type_val" id="document_type_val">
                                        </td>
                                        <td><h6>Documents List</h6>
                                        <select id="document_name1" name="document_name[]" class="Modified-Select form-control" required>
                                            <option value="">Select document</option>

                                        </select>
                                        </td>

                                       <td id="upl_document_list_dat">
                                     <div id="" class="selectpicker" > 
                                        <h6>Upload Documents</h6>
                                          <input autocomplete="off" class="form-control Modified-file" type="file" name="document_file[]"> 
                                     </div>
                                     </td>

                                        <div class="container mt-5">

                                        
                                       
                                        <td class="other_doc" style="display:none;"><h6 class="other_doc">Documents Name</h6>
                                            <input class="form-control Modified-file" type="text" name="document_name_other[]">
                                        </td>


                                        <td class="other_doc" style="display:none;"><h6 class="other_doc">Documents</h6><input autocomplete="off" class="form-control Modified-file" type="file" name="document_file_other[]"></td>
                                      </div>

                                        <td><h6>&nbsp;</h6><button type="button" name="add" id="add" class="btn btn-success">+</button></td>
                                        
                                    </tr>  
                                </table>
                            <button class="btn  btn-outline-primary" type="submit">Upload</button>               
                            
                                            
                                </div>
                            </form>

    <!-- <form method="post" id="add_create" name="add_create" action="<?//= base_url('/DashboardController/document_master_upload') ?>" enctype="multipart/form-data">

          !-- <div class="form-group">

                <label for="formGroupExampleInput">Technical Document</label>

                <input type="text" name="category_name" class="form-control" placeholder="Enter Category Name">

          </div>  --


          <table class="table table-bordered " id="dynamic_field">
            <tr>
              <td><h6>Document Type</h6>
                <select  name="document_type[]" class="form-control" >
                  <option>Documents Types </option>
                  <option value="Technical">Technical </option>
                  <option value="Financial">Financial </option>
                  <option value="Common Document">Common Document</option>
                  <option value="One time Document">One time Document</option>
                </select>
              </td>
              <td><h6>Documents Name</h6>
                <input type="text" name="document_name[]" class="form-control">
              </td>
              <td><h6>Documents</h6><input autocomplete="off" class="form-control Modified-file" type="file" name="document_file[]" ></td>
              <td><h6>&nbsp;</h6><button type="button" name="add" id="add" class="btn btn-success">+</button></td>
            </tr>
          </table>
          <div class="card-footer">     
            <button type="submit" class="btn btn-sm btn-outline-warning">Upload</button>
          </div>  
    </form> -->





      </div>

 

    </div>

  </div>

</section>

</div>
<script type="text/javascript">
    


// <?//php if($role!='admin'){?>
// $("#document_type_val").val('<?//php echo $role; ?>');
// $('#document_type').val('<?//php echo $role; ?>').trigger('change').attr('disabled','disabled');
// <?//php } ?>

</script>

<script>
        $(document).ready(function () {
        var i=1;  


              ////////////////
     $('#add').click(function(){ 
                   i++;  
                   $('#dynamic_field').append('<tr id="row_nit'+i+'" class="dynamic-added"><td><h6>Document Type </h6><select id="document_type'+i+'" name="document_type[]" class="Modified-Select form-control" required><option>Documents Types </option><option value="Technical">Technical </option><option value="Financial">Financial </option><option value="Common Document">Common Document</option><option value="One time Document">One time Document</option></select><input type="hidden" name="document_type_val" id="document_type_val"></td><td><h6>Documents List</h6><select id="document_name'+i+'" name="document_name[]" class="Modified-Select form-control" required><option value="">Select document</option></select></td><td id="upl_document_list'+i+'"><h6>Upload Documents</h6><div id="" class="selectpicker upl_document_list"><input autocomplete="off" class="form-control Modified-file" type="file" name="document_file[]"></div><div class="container mt-5"></td><td class="other_doc" style="display:none;"><h6 class="other_doc">Documents Name</h6><input class="form-control Modified-file" type="text" name="document_name_other[]"></td><td class="other_doc" style="display:none;"><h6 class="other_doc">Documents</h6><input autocomplete="off" class="form-control Modified-file form-control" type="file" name="document_file_other[]"></td></div><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');

$(document).on("change",'#document_type'+i+'', function(e){
        var get_document_info = $(this).val();
        //alert(get_document_info);
         $.ajax({
              type: 'POST',
              url: "<?php echo base_url(); ?>/DashboardController/get_document_info",
              data: {docinfo:get_document_info},
              success: function(resultData) { 
                //alert(resultData);
                  $('#document_name'+i+'').html(resultData); 
                 }
             });
});

$(document).on("change",'#document_name'+i+'', function(e){
    if($(this).val()=='other'){
      $(".other_doc").show();
      $('#upl_document_list'+i+'').hide();
      //$('.upl_document_list').hide();
        
    }else{
       $(".other_doc").hide(); 
        //$('.upl_document_list').show(); 
    }
        
});


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
          //                 url: "<?//php echo base_url();?>/Usersignup/otp",
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


    

$(document).on("change",'#document_type1', function(e){
        var get_document_info = $(this).val();
       
         $.ajax({
              type: 'POST',
              url: "<?php echo base_url(); ?>/DashboardController/get_document_info",
              data: {docinfo:get_document_info},
              success: function(resultData) { 
                //alert(resultData);
                  $('#document_name1').html(resultData); 
                 }
             });
});

$(document).on("change",'#document_name1', function(e){
    if($(this).val()=='other'){
      $(".other_doc").show();
      $("#upl_document_list_dat").hide();
      //$(".upl_document_list").hide();
      
        
    }else{
       $(".other_doc").hide(); 
        $("#upl_document_list_dat").show();
        //$(".upl_document_list").hide();
    }
        
});


     </script>

