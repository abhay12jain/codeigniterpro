
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
            <h1 class="m-0">List Credits</h1>
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
            <th>Image</th>
            <th>Title</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
         <?php if($credits_data){ foreach($credits_data as $credits_dataval){ ?>
          <tr>
            <th class="text-center"><?php echo $credits_dataval['id']; ?></th>
                <td>
                <?php if($credits_dataval['image']){?>
                <img src="<?php echo base_url();?>/uploads/<?php echo $credits_dataval['image']; ?>" width="50" height="50">
                <?php }else{?>
                <img src="<?php echo base_url();?>/assets/public/images/no-user.jpg" width="50" height="50">
                <?php } ?>
                </td>
                    <td><b><?php echo $credits_dataval['title']; ?></b></td>
                    
                    <td><b><?php echo $credits_dataval['submit_date']; ?></b></td>
                <td class="text-center">
                  <button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Action</button>
                  <div class="dropdown-menu" style="">
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="<?php echo base_url('/admin/edit_credit/'.$credits_dataval['id']);?>">Edit</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item delete_user" href="<?php echo base_url('delete_credit/'.$credits_dataval['id']);?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a>
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
        <?php $pagi_path= '/projects/etp/admin/view_credit'; ?>
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
