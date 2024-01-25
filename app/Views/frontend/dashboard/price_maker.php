<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card">
       <div class="card ">
           <div class="card-body rounded">
                <!-- <h4 class="mb-3">Add Division</h4> -->
                <h4 class="mb-3">Tender Price</h4>
                <div class=" d-flex justify-content-center">
                    <div class="col-12">                                        
                        <div class="card mt-3">
                            <div class="p-2 step">
                                <!-- <div class="row"> -->

                                    <!-- Button trigger modal -->
<a class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Filter
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary ">
        <h5 class="modal-title text-white" id="exampleModalLabel">Filter</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form class="p-0" action="<?php echo base_url('UserDashboardController/price_filter'); ?>" method="post">
                                                            <div class="mb-3">
                                                             <input class="form-control" type="text" placeholder="Search" name="search_data"></div>
                                                        
                                                        <!-- <div class="mb-3">
                                                            <label>Tender Publish Date</label>
                                                            <input type="date" name="tpd" placeholder="Tender Publish Date" class="form-control">
                                                       </div> -->
                                                        <!-- <div class="mb-3">
                                                        
                                                            <label>Bid Submission end date</label>
                                                            <input type="date" name="bsd"  class="form-control">
                                                       </div> -->
                                                      
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



                                    <!-- <form method="post" id="update_user" action="<//?= site_url('/UserDashboardController/approve') ?>"> -->
                                       
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="1">#</th>
                                                    <th colspan="1">Tender ID</th>
                                                    <th colspan="1">Company Name</th>                                           
                                                    <th colspan="1">Status</th>
                                                    <th colspan="1">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($tend): ?>
                                                <?php foreach($tend as $user): ?>
                                                <tr>
                                                    
                                                    <td><?php echo $user['id']; ?></td>
                                                    <td><?php echo $user['tender_id']; ?></td>
                                                    <td><?php echo $user['client_nme']; ?></td>                                                    
                                                    <!-- <td><?//php echo $user['tname']; ?></td> -->
                                                    
                                                    <td><?php echo $user['tender_status']; ?></td>
                                                    
                                                    <td>
                                                        
                                                        <a href="<?php echo site_url('/admin/price_id/'.$user['tender_id']); ?>" class="btn btn-sm btn-outline-primary ">Add Price</a>

                                                        <a href="<?php echo site_url('/admin/tender_price_view/'.$user['tender_id']); ?>" class="btn btn-sm btn-outline-primary ">View</a>  
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