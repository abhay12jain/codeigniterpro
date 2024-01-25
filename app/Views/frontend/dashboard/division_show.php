<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card">
       <div class="card ">
           <div class="card-body rounded">
                <!-- <h4 class="mb-3">Add Division</h4> -->
                <div class="col-sm-12"><h4>Division</h4></div>
                <div class=" d-flex justify-content-center">
                    <div class="col-12">                                        
                        <div class="card mt-3">
                            <div class="p-2 step">
                                <div class="row">
                                    
                                    <div class="d-flex justify-content-end mb-4">
                                        <a href="<?php echo site_url('/admin/add_division') ?>" class="btn btn-sm btn-outline-secondary">Add Division</a>
                                    </div class="mt-3">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Zone</th>
                                                    <th scope="col">Company Name</th>
                                                    <th scope="col">State</th>
                                                    <th scope="col">Circle</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">Division</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($users): ?>
                                                <?php foreach($users as $user): ?>
                                                <tr>
                                                    <td><?php echo $user['id']; ?></td>
                                                    <td><?php echo $user['zone']; ?></td>
                                                    <td><?php echo $user['organization_name']; ?></td>
                                                    <td><?php echo $user['state']; ?></td>
                                                    <td><?php echo $user['circle']; ?></td>
                                                    <td><?php echo $user['department']; ?></td>
                                                    <td><?php echo $user['division']; ?></td>
                                                    <td>
                                                    <a href="<?php echo base_url('/UserDashboardController/division_edit/'.$user['id']);?>" class="btn btn-sm btn-outline-primary">Edit</a>
                                                    <a href="<?php echo base_url('UserDashboardController/delete/'.$user['id']);?>" class="btn btn-sm btn-outline-warning">Delete</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>                                                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
   </div>
</div>
