
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

            <h1 class="m-0">Assign Tender</h1>

          </div><!-- /.col -->



        </div><!-- /.row -->

            <hr class="border-primary">

      </div><!-- /.container-fluid -->

<div class="col-sm-12">

  

<form method="post" action="<?php echo base_url('AdminUserlist/index');?>">

  <div class="row">

  <div class="col-sm-4">

 

  <!-- <input type="text" name="search_users" class="form-control" placeholder="Search Users"> -->

</div>

<div class="col-sm-2">

  <!-- <input type="submit" name="submit" value="Submit" class="btn btn-primary"> -->

</div>

</div>

</form>



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

            <th colspan="1">Tender Id</th>

            <th colspan="1">Organization Name</th>

            <th colspan="1">Tender Refrence Number</th>

            

          </tr>

        </thead>

        <tbody>

          <?php if($pre): ?>
          <?php foreach($pre as $user): 

            ?>
          <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['tender_id']; ?></td>
            <td><?php echo $user['client_nme']; ?></td>
            <td><?php echo $user['tender_refer_number']; ?></td>                                                   
                                                    
          </tr>
          <?php endforeach; ?>
          <?php endif; ?>

        </tbody>

      </table>



      <!-- Pagination -->

      <div class="d-flex justify-content-end">

        <?//php

//echo "<pre>";print_r($pager);

//echo $pager->default->uri->pageCount;

         // if ($pager) :?>

        <?//php $pagi_path= '/projects/pratap/admin_user/view_user'; ?>

        <?//php $pager->setPath($pagi_path); ?>

        <?//= $pager->links(); ?>

        <?//php endif ?>

      </div>

    </div>

     

   

 

   

 

        </div>

      </div>

    </section>





</div>



<?php //require_once 'admin_footer.php';?>
