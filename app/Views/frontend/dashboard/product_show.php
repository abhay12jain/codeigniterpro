<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card">
       <div class="card ">
           <div class="card-body rounded">
                <!-- <h4 class="mb-3">Add Division</h4> -->
                <div class="col-sm-12"><h4>Add Product Category</h4></div>
                <div class=" d-flex justify-content-center">
                    <div class="col-12">                                        
                        <div class="card">
                            <div class="step">
                                    
                                    <div class="d-flex justify-content-end mb-4">
                                        <a href="<?php echo site_url('/admin/add_product') ?>" class="btn btn-sm btn-outline-primary">Add Category</a>
                                    </div class="mt-3">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Sub Category</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($pro): ?>
                                                <?php foreach($pro as $user): ?>
                                                <tr>
                                                    <td><?php echo $user['id']; ?></td>
                                                    <td><?php echo $user['product_category']; ?></td>
                                                    <td><?php echo $user['sub_category']; ?></td>
                                                    
                                                    <td>
                                                    <a href="<?php echo base_url('/UserDashboardController/product_edit/'.$user['id']);?>" class="btn btn-sm btn-outline-primary">Edit</a>
                                                    <a href="<?php echo base_url('UserDashboardController/p_delete/'.$user['id']);?>" class="btn btn-sm btn-outline-danger">Delete</a>
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
