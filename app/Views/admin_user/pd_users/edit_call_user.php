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
            <h1 class="m-0">View User</h1>
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
          

    
     
    <?php if (session('msg')=='Data Not Updated.') { ?>
        <div class="alert alert-danger alert-dismissible" style="width:100%">
            <?= session('msg') ?>
            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
        </div>

      <?php }else{ ?>
<?php if(session('msg')){?>
<div class="alert alert-info alert-dismissible" style="width:100%">
            <?= session('msg') ?>
            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
        </div>

    <?php }} ?>
 
   
      <div class="col-md-9">
        <form method="post" action="<?php echo base_url();?>/AdminUserlist/callback_user_update">
        <table style="width:100%">
  <tr>
    <th>Name:</th>
    <td><?php echo $user_obj['first_name'].' '.$user_obj['last_name']; ?></td>
  </tr>

  <tr>
    <th>Email Id:</th>
    <td><?php echo $user_obj['email_id']; ?></td>
    <input type="hidden" name="post_id" value="<?php echo $user_obj['id']; ?>">
  </tr>

  <tr>
    <th>Phone Number:</th>
    <td><?php echo $user_obj['phone_number']; ?></td>
  </tr>

  <tr>
    <th>Message:</th>
    <td><?php echo $user_obj['message']; ?></td>
  </tr>



  <tr>
    <th>Submit date:</th>
    <td><?php echo $user_obj['submit_date']; ?></td>
  </tr>

  <tr>
    <th>Status:</th>
    <td><?php echo $user_obj['status']; ?>
     <input type="hidden" name="post_status" value="<?php echo $user_obj['status']; ?>" />
    <input type="submit" name="submit" value="Change status" class="btn btn-primary" style="float:right" /> </td>
  </tr>

</table>

</form>
        
      </div>
 
    </div>
  
</div>
       
      
    </section>
  
  
 
  
  </div>
<style type="text/css">
  table,tr,td,th{ border: 1px solid; padding: 5px; }
</style>
