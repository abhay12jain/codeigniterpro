


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

            <h1 class="m-0">Update Master Document</h1>

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





    <form method="post" id="add_create" name="add_create" action="<?= base_url('/DashboardController/document_master_update') ?>" enctype="multipart/form-data">
      <input type="hidden" name="id" id="id" value="<?php echo $doc['id']; ?>">

          <!-- <div class="form-group">

                <label for="formGroupExampleInput">Technical Document</label>

                <input type="text" name="category_name" class="form-control" placeholder="Enter Category Name">

          </div>  -->


          <table class="table table-bordered " id="dynamic_field">
            <tr>
              <td><h6>Document Type</h6>
                <select  name="document_type" class="form-control" required>
                  <option>Documents Types </option>
                  <option value="Technical" <?php if($doc['document_type']=='Technical'){ echo"selected=selected";}?> >Technical </option>
                  <option value="Financial" <?php if($doc['document_type']=='Financial'){ echo"selected=selected";}?> >Financial </option>
                  <option value="Common Document" <?php if($doc['document_type']=='Common Document'){ echo"selected=selected";}?> >Common Document </option>
                  <option value="One time Document" <?php if($doc['document_type']=='One time Document'){ echo"selected=selected";}?> >One time Document </option>
                  
                </select>
              </td>
              <td><h6>Documents Name</h6>
                <input type="text" name="document_name" class="form-control" value="<?php echo $doc['name']; ?>" required>
              </td>
              <td><h6>Documents</h6>  

                <input autocomplete="off" class="form-control Modified-file" type="file" name="document_file" required>
                <!-- <a href="<?//php echo base_url().'/uploads/technical_document/'.$doc['document_file']; ?>" download>Download Document</a> -->
                <?php if($doc['document_type']=='One time Document'){?>
                  <a href="<?php echo base_url().'/uploads/one_time_document/'.$doc['document_file']; ?>" download>View Document</a></td>
                <?php } else if($doc['document_type']=='Common Document'){?>
                  <a href="<?php echo base_url().'/uploads/common_document/'.$doc['document_file']; ?>" download>View Document</a>
                <?php } else if($doc['document_type']=='Technical'){?>
                  <a href="<?php echo base_url().'/uploads/technical_document/'.$doc['document_file']; ?>" download>View Document</a>
                <?php } else if($doc['document_type']=='Financial'){?>
                  <a href="<?php echo base_url().'/uploads/financial_document/'.$doc['document_file']; ?>" download>View Document</a>
                <?php } ?>
              </td>
               
            </tr>
          </table>
          <div class="card-footer">     
            <button type="submit" class="btn btn-sm btn-outline-warning">Update</button>
          </div>  
    </form>





      </div>

 

    </div>

  </div>

</section>

</div>



