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
            <h1 class="m-0">Master Document List</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
            <hr class="border-primary">
      </div><!-- /.container-fluid -->
<div class="col-sm-12">
  
<!-- <form method="post" action="<?php //echo base_url('AdminUserlist/index');?>">
  <div class="row">
  <div class="col-sm-4">
 
  <input type="text" name="search_users" class="form-control" placeholder="Search Users">
</div>
<div class="col-sm-2">
  <input type="submit" name="submit" value="Submit" class="btn btn-primary">
</div>
</div>
</form> -->

</div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         <div class="row mb-2">
          <?php if (session('msg')) { ?>
        <div class="alert alert-success alert-dismissible" style="width:100%">
            <?= session('msg') ?>
            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
        </div>

      <?php }?>

    <div class="card-body">
      <table class="table tabe-hover table-bordered" id="testimonial-list">
        <thead>
          <tr>
            <th class="text-center">#</th>
            <th>Document </th>
            <th>Document file</th>
           
            <!-- <th>Date</th> -->
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
         <?php if($master_document){ foreach($master_document as $master_documentval){ ?>
          <tr>
            <th class="text-center"><?php echo $master_documentval['id']; ?></th>
                
                <td><b><?php echo $master_documentval['document_name']; ?></b></td>
                <td><b><?php echo $master_documentval['document_type']; ?></b></td>
                <!-- <td><b><?//php echo $master_documentval['submit_date']; ?></b></td> -->
                <td class="text-center">
                  <button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Action</button>
                  <div class="dropdown-menu" style="">
                      
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="<?php echo base_url('/admin_user/document_edit/'.$master_documentval['id']);?>">Edit</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item delete_user" href="<?php echo base_url('/admin_user/documents_delete/'.$master_documentval['id']);?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a>
                  </div>
                </td>
          </tr> 

        <?php }}?>
     
        </tbody>
      </table>

      <!-- Pagination -->
      <div class="d-flex justify-content-end">
        <?php

         if ($pager) :?>
        <?php $pagi_path= '/projects/pratap/admin_user/document_shows'; ?>
        <?php $pager->setPath($pagi_path); ?>
        <?php echo $pager->links(); ?>
        <?php endif ?>
      </div>
    </div>
     
   
 
   
 
        </div>
      </div>
    </section>


</div>

<?php //require_once 'admin_footer.php';?>
