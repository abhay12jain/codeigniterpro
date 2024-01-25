<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/1.1.2/js/bootstrap-multiselect.min.js"></script>
<div class="row">
   <div class="col-md-12 grid-margin stretch-card">
       <div class="card ">
           <div class="card-body rounded">                
                <div class="col-sm-12"><h4>Document Upload</h4></div>
                <?php 
                    $session = session();
                    $role = $session->get('role'); 
                ?>
                <div class=" d-flex justify-content-center">
                    <div class="col-12">                                        
                        <div class="card mt-3">
                            <form method="post" action="<?= base_url('/UserDashboardController/document_upload') ?>" enctype="multipart/form-data">
                                
                                <div class="main-form step">
                                       <input type="hidden" name="tender_id" value="<?php echo $id_val; ?>">
                                <table class="table table-bordered" id="dynamic_field">
                                    <tr>
                                        <td><h6>Document Type </h6>
                            <select id="document_type" name="document_type" class="Modified-Select" id="document_type" required>
                                <option>Documents Types </option>
                                <option value="Technical">Technical </option>
                                <option value="Financial">Financial </option>
                                <option value="Common Document">Common Document</option>
                                <option value="One time Document">One time Document</option>
                            </select>
                            <input type="hidden" name="document_type_val" id="document_type_val">
                            </td>

                            <td><h6>Documents List</h6>

                            <select id="document_name" name="document_list" class="Modified-Select" required>
                                <option value="">Select document</option>
                            </select>
                            </td>

                                    <td class="upl_document_list"><h6>Upload Documents</h6>
                                    <a href="#" class="custom_dropdown form-control">Select Organization <i class="fas fa-chevron-down"></i></a>
                                      <ul>
                                        <div id="upl_document_list" class="selectpicker drop_name upl_document_list"></div>
                                      </ul>
                                     </td>

                                        <div class="container mt-5">

                                        
                                       
                                    <td class="other_doc" style="display:none;"><h6 class="other_doc">Documents Name</h6>
                                            <input class="form-control Modified-file" type="text" name="document_name">
                                        </td>


                                        <td class="other_doc" style="display:none;"><h6 class="other_doc">Documents</h6><input autocomplete="off" class="form-control Modified-file" type="file" name="document_file"></td>
                                        
                                    </tr>  
                                </table>
                            <button class="btn  btn-outline-primary" type="submit">Upload</button>               
                            
                                            
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
       </div>
   </div>
</div>

<style>
.check-list a {text-decoration: none; color: #495057; border: 1px solid #ced4da; padding: 5px 17px; margin-bottom: 10px; display: inline-block;}
.check-list i { float:right; padding-top:5px }
.custom_dropdown + ul{margin: 0;padding: 0;}
.check-list ul {margin: 0;padding: 0;}
.check-list ul li {list-style: none;}
.drop_name{ background:#fff; padding:10px; display:none; height:180px; overflow:auto; }
</style>

<script type="text/javascript">
    $(".custom_dropdown").on('click', function(e){
       e.preventDefault();
       $(this).next().find('div.drop_name').slideToggle();

  });
$(document).on("change",'#document_type', function(e){
        var get_document_info = $(this).val();
       // alert(get_document_info);
         $.ajax({
              type: 'POST',
              url: "<?php echo base_url(); ?>/UserDashboardController/get_document_info",
              data: {docinfo:get_document_info},
              success: function(resultData) { //alert(resultData);
                  $("#document_name").html(resultData); 
                 }
             });
});

$(document).on("change",'#document_name', function(e){
    if($(this).val()=='other'){
      $(".other_doc").show();
      $(".upl_document_list").hide();
        
    }else{
       $(".other_doc").hide(); 
        $(".upl_document_list").show();
    }
        var get_document_type = $("#document_type").val();
        var get_document_list = $(this).val();

         $.ajax({
              type: 'POST',
              url: "<?php echo base_url(); ?>/UserDashboardController/get_document_list_data",
              data: {docinfo:get_document_list, document_type: get_document_type},
              success: function(resultData) { 
                //alert(resultData);
                  $("#upl_document_list").html(resultData); 
                 }
             });
});

<?php if($role!='admin'){?>
$("#document_type_val").val('<?php echo $role; ?>');
$('#document_type').val('<?php echo $role; ?>').trigger('change').attr('disabled','disabled');
<?php } ?>

</script>

