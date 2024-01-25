 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/1.1.2/js/bootstrap-multiselect.min.js"></script>
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



      <form method="post" action="<?= base_url('/DashboardController/document_upload') ?>" enctype="multipart/form-data">
                                
                                <div class="main-form step">
                                       <!-- <input type="hidden" name="tender_id" value="<?//php echo $id_val; ?>"> -->
                                <table class="table table-bordered" id="dynamic_field">
                                    <tr>
                                        <td><h6>Document Type </h6>
                            <select id="document_type" name="document_type" class="Modified-Select form-control" id="document_type" required>
                                <option>Documents Types </option>
                                <option value="Technical">Technical </option>
                                <option value="Financial">Financial </option>
                                <option value="Common Document">Common Document</option>
                                <option value="One time Document">One time Document</option>
                            </select>
                                            <input type="hidden" name="document_type_val" id="document_type_val">
                                        </td>
                                        <td><h6>Documents List</h6>
                                        <select id="document_name" name="document_list" class="Modified-Select form-control" required>
                                            <option value="">Select document</option>

                                        </select>
                                        </td>
                                        <td class="other_doc_nm" style="display:none;"><h6 class="other_doc_nm">Documents Name</h6>
                                            <input class="form-control Modified-file" type="text" name="document_names">
                                        </td>

                                       <td class="upl_document_list"><h6>Upload Documents</h6>
                                     <input autocomplete="off" class="form-control Modified-file" type="file" name="document_file" required>
                                           
                                     </div>

                                        <div class="container mt-5">

                                        </td>
                                       
                                        


                                        <!-- <td class="other_doc" style="display:none;"><h6 class="other_doc">Documents</h6><input autocomplete="off" class="form-control Modified-file" type="file" name="document_file"></td> -->
                                        
                                    </tr>  
                                </table>
                            <button class="btn  btn-outline-primary" type="submit">Upload</button>               
                            
                                            
                                </div>
                            </form>

    
      </div>

 

    </div>

  </div>

</section>

</div>
<script type="text/javascript">
    

$(document).on("change",'#document_type', function(e){
        var get_document_info = $(this).val();
         $.ajax({
              type: 'POST',
              url: "<?php echo base_url(); ?>/DashboardController/get_document_info",
              data: {docinfo:get_document_info},
              success: function(resultData) { 
                  $("#document_name").html(resultData); 
                 }
             });
});

$(document).on("change",'#document_name', function(e){
    if($(this).val()=='other'){
      $(".other_doc_nm").show();
      $(".upl_document_list").show();
        
    }else{
       $(".other_doc").hide(); 
        $(".upl_document_list").show();
    }
        // var get_document_type = $("#document_type").val();
        // var get_document_list = $(this).val();

        //  $.ajax({
        //       type: 'POST',
        //       url: "<?//php echo base_url(); ?>/DashboardController/get_document_list_data",
        //       data: {docinfo:get_document_list, document_type: get_document_type},
        //       success: function(resultData) { 
        //           $("#upl_document_list").html(resultData); 
        //          }
        //      });
});



     </script>


