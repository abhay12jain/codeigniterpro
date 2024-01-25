<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card">
       <div class="card ">
           <div class="card-body rounded">
                <!-- <h4 class="mb-3">Add Division</h4> -->
                <h4 class="mb-3">Price Checker</h4>
                <div class=" d-flex justify-content-center">
                    <div class="col-12">                                        
                        <div class="card mt-3">
                            <div class="p-2 step">

                                <!-- Button trigger modal -->
<!-- <a class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Filter
</a>

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> --
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary ">
        <h5 class="modal-title text-white" id="exampleModalLabel">Filter</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form class="p-0" action="<?//php echo base_url('UserDashboardController/price_check_filter'); ?>" method="post">
                                                            <div class="mb-3">
                                                             <input class="form-control" type="text" placeholder="Search" name="search_data"></div>
                                                        
                                                        <div class="mb-3">
                                                            <label>Tender Publish Date</label>
                                                            <input type="date" name="tpd" placeholder="Tender Publish Date" class="form-control">
                                                       </div>
                                                        <div class="mb-3">
                                                        
                                                            <label>Bid Submission end date</label>
                                                            <input type="date" name="bsd"  class="form-control">
                                                       </div>
                                                      
                                        <div class="mb-3">
                                        <select name="status_filter" class="form-control">
                                                <option>Filter By Status</option>
                                                <option value="Approved">Approved</option>
                                                <option value="Rejected">Rejected</option>
                                                <option value="Pending">Pending</option>
                                        </select> 
                                        </div>                       
                                                       

                                         <input name="submit" class="btn btn-outline-primary" type="submit">
                                          
                                                    
                                        </form>
      </div>
    </div>
  </div>
</div>
 -->



                                <!-- <div class="row"> -->
                                    
                                    
                                    <!-- <form method="post" id="update_user" action="<?//= site_url('/UserDashboardController/price_approve') ?>"> -->
                                        <!-- <input type="hidden" name="tender_id" value="<?//php echo $tend['id']; ?>" /> -->
                                              
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tender ID</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                  //print_r($price_data);


                                                 if($tend): ?>
                                                <?php foreach($tend as $user): ?>
                                                <tr>
                                                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                                    <td><?php echo $user['id']; ?></td>
                                                    <td><?php echo $user['tender_id']; ?></td>
                                                    <td><?php echo $user['status']; ?></td> 
                                                    <td>
                                                         <a href="<?php echo site_url('/admin/price_views/'.$user['tender_id']); ?>" class="btn btn-sm btn-outline-secondary ">View</a>
                                                        
                                                        <!-- <button href="<?//php echo base_url('UserDashboardController/price_approve');?>" class="btn btn-sm btn-outline-secondary" type="submit" name="status" value="Aproved">Aprove</button>


                                                        <button href="<?//php echo base_url('UserDashboardController/price_approve');?>" class="btn btn-sm btn-outline-warning" type="submit" name="status" value="Deny">Deny </button>  -->        
                                                        
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    <!-- </form> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
   </div>
</div>