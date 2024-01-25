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

          <div class="col-sm-6">

            <h1 class="m-0">One time Document</h1>

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

 

   

  <div class="col-md-9">





    <form method="post" id="add_create" name="add_create" action="<?= base_url('/DashboardController/one_upload') ?>" enctype="multipart/form-data">

          <!-- <div class="form-group">

                <label for="formGroupExampleInput">One time Document</label>

                <input type="text" name="category_name" class="form-control" placeholder="Enter Category Name">

          </div>  -->



          <table class="table table-bordered " id="dynamic_field">
            <tr>
              <td><h6>Document Type</h6>
                <select id="Select1" name="workitem_name[]" class="form-control" >
                  <option value="One time Document">One time Document</option>
                  <!-- <option value="Technical">Technical </option>
                  <option value="Financial">Financial </option>
                  <option value="Common Document">Common Document</option> -->
                </select>
              </td>
              <td><h6>Documents Name</h6>
                <select id="Select1" name="workitem_description[]" class="form-control" >
                  <option value="">Documents Name</option>
                  <?php foreach($nam as $row):?>
                    <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                  <?php endforeach;?> </td>
                </select>
              </td>
              <!-- <td><h6>Documents Name</h6><input autocomplete="off" class="form-control Modified-file" type="text" name="workitem_description[]" required></td> -->
              <td><h6>Documents</h6><input autocomplete="off" class="form-control Modified-file" type="file" name="document_file[]" required></td>
              <td><h6>&nbsp;</h6><button type="button" name="add" id="add" class="btn btn-success">+</button></td>  
            </tr>
          </table>
          <div class="card-footer">     
            <button class="btn btn-sm btn-outline-warning">Upload</button>                                         
            <a href="<?php echo base_url('DashboardController/show_document');?>" class="btn btn-sm btn-outline-secondary " >Cancel</a>
                                            
          </div>  
    </form>





      </div>

 

    </div>

  </div>

</section>

</div>

<script>
        $(document).ready(function () {
        var i=1;  


              ////////////////
     $('#add').click(function(){  
                   i++;  
                   $('#dynamic_field').append('<tr id="row_nit'+i+'" class="dynamic-added"><td><h6>Document Type</h6><select id="Select1" name="workitem_name[]" class="Modified-Select" ><option value="One time Document">One time Document</option><option value="Technical">Technical </option><option value="Financial">Financial </option><option value="Common Document">Common Document</option></select></td><td><h6>Documents Name</h6><input autocomplete="off" class="form-control Modified-file" type="text" name="workitem_description[]" required></td><td><h6>Documents</h6><input autocomplete="off" class="form-control Modified-file" type="file" name="document_file[]" required></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
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



