
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
            <h1 class="m-0">Request a Call back</h1>
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
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Status</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
         <?php if($callback_request){ foreach($callback_request as $callback_dataval){ ?>
          <tr>
            <th class="text-center"><?php echo $callback_dataval['id']; ?></th>
                
                <td><b><?php echo $callback_dataval['first_name'].' '.$callback_dataval['last_name']; ?></b></td>
                <td><b><?php echo $callback_dataval['email_id']; ?></b></td>
                <td><b><?php echo $callback_dataval['phone_number']; ?></b></td>
                <?php if($callback_dataval['status']=='Completed'){?>
                <td style="background:#1ec326bf;color:#fff"><?php echo $callback_dataval['status']; ?></td>
              <?php }else{?>
                <td style="background:#fe6508bd; color:#fff"><?php echo $callback_dataval['status']; ?></td>
              <?php }?>
                <td><b><?php echo $callback_dataval['submit_date']; ?></b></td>
                <td class="text-center">
                  <button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Action</button>
                  <div class="dropdown-menu" style="">
                      
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="<?php echo base_url('/admin/edit_calluser/'.$callback_dataval['id']);?>">Details</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item delete_user" href="<?php echo base_url('delete_user/'.$callback_dataval['id']);?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a>
                  </div>
                </td>
          </tr> 

        <?php }}?>
     
        </tbody>
      </table>

      <!-- Pagination -->
      <div class="d-flex justify-content-end">
        <?php
//echo "<pre>";print_r($pager);
//echo $pager->default->uri->pageCount;
         if ($pager) :?>
        <?php $pagi_path= '/projects/etp/admin/request_callback'; ?>
        <?php $pager->setPath($pagi_path); ?>
        <?= $pager->links(); ?>
        <?php endif ?>
      </div>
    </div>
     
   
 
   
 
        </div>
      </div>
    </section>


</div>

<?php //require_once 'admin_footer.php';?>
