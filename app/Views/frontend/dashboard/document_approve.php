<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card">
       <div class="card ">
           <div class="card-body rounded">
                <!-- <h4 class="mb-3">Add Division</h4> -->
                <h4 class="mb-3">Document Checker</h4>
                <div class=" d-flex justify-content-center">
                    <div class="col-12">                                        
                        <div class="card mt-3">
                            <div class="step">
                                    <form method="post" id="update_user" action="<?= site_url('/UserDashboardController/doc_approve') ?>">
                                              
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="1">#</th>                                                    
                                                    <th colspan="1">Document Type</th>
                                                    <th colspan="1">Document List Name</th>                                            
                                                    <th colspan="1">Document Name</th>                                                    
                                                    <th colspan="1">Document</th>                                                    
                                                    <th colspan="1">Status</th>
                                                    <th colspan="1">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($doc): ?>
                                                <?php foreach($doc as $user): ?>
                                                <tr>
                                                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                                    
                                                    <td><?php echo $user['id']; ?></td>                                               
                                                    <td><?php echo $user['document_type']; ?></td>
                                                    <td><?php echo $user['document_list']; ?></td>
                                                    <td><?php echo $user['document_name']; ?></td>
                                                    <?php if($user['document_type']=='One time Document'){?>
                                                    <td><a href="<?php echo base_url().'/uploads/one_time_document/'.$user['document_file']; ?>" download>View Document</a></td>
                                                    
                                                <?php } else if($user['document_type']=='Common Document'){?>
                                                    <td><a href="<?php echo base_url().'/uploads/common_document/'.$user['document_file']; ?>" download>View Document</a></td>
                                                   

                                                <?php } else if($user['document_type']=='Technical'){?>
                                                    <td><a href="<?php echo base_url().'/uploads/technical_document/'.$user['document_file']; ?>" download>View Document</a></td>
                                                   

                                                <?php } else if($user['document_type']=='Financial'){?>
                                                    <td><a href="<?php echo base_url().'/uploads/financial_document/'.$user['document_file']; ?>" download>View Document</a></td>
                                                    

                                                <?php } ?>
                                                    
                                                    <td><?php echo $user['status']; ?></td>
                                                    <td>
                                                         <a href="<?php echo base_url('/UserDashboardController/document_ap_views/'.$user['id']);?>" class="text-dark pe-2" >View</a>       
                                                        
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
   </div>
</div>