<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card">
       <div class="card ">
           <div class="card-body rounded">
                <!-- <h4 class="mb-3">Add Division</h4> -->
                <h4 class="mb-3">RFP Extractor</h4>
                <div class=" d-flex justify-content-center">
                    <div class="col-12">                                        
                        <div class="card">
                            <div class=" step">
                                <div class="row">
                                    <!-- <div class="col-sm-12 mb-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select Document Type</option>
                                            <option value="Technical">Technical</option>
                                            <option value="Financial">Financial</option>
                                            <option value="Common Document">Common Document</option>
                                            <option value="One time Document">One time Document</option>
                                        </select>
                                    </div> -->

                                    <!-- <div class="col-sm-12 mb-3">
                                        <a href="<?php //echo site_url('/admin/special_document') ?>" class="btn btn-sm btn-outline-primary">Special Document</a>
                                   
                                        <a href="<?php //echo site_url('/admin/add_rfp') ?>" class="btn btn-sm btn-outline-primary">Upload Document</a>
                                    </div>
 -->
                                </div>
                                    
                                    <!-- <form method="post" id="update_user" action="<?//= site_url('/UserDashboardController/') ?>"> -->
                                              
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="1">#</th>                                                    
                                                    <th colspan="1">Document Type</th>                                            
                                                    <th colspan="1">Document Name</th>
                                                    <th colspan="1">Document</th>
                                                    <th colspan="1">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                

                                                if($doc): ?>
                                                <?php foreach($doc as $user): ?>
                                                <tr>
                                                    <td><?php echo $user['id']; ?></td>
                                                    <td><?php echo $user['document_type']; ?></td>
                                                    <td><?php echo $user['document_name']; ?></td>

                                                    <?php if($user['document_type']=='Common Document'){
                                                        $doc_file = explode(',',$user['document_file']);?>
                                                        <td>
                                                    <?php foreach( $doc_file as $doc_file_val){
                                                    ?>

                                                        <a style="display: block;" href="<?php echo base_url();?>/uploads/common_document/<?php echo $doc_file_val; ?>"><?php echo $doc_file_val; ?>
                                                        <?php }  ?>
                                                    </td>

                                                    <?php }else if($user['document_type']=='Technical'){
                                                          $doc_file = explode(',',$user['document_file']);?>
                                                          <td>
                                                    <?php foreach( $doc_file as $doc_file_val){
                                                        ?>
                                                        <a style="display: block;" href="<?php echo base_url();?>/uploads/technical_document/<?php echo $doc_file_val; ?>"><?php echo $doc_file_val; ?>
                                                        <?php } ?>
                                                        </td>
                                                    <?php }else if($user['document_type']=='Financial'){
                                                          $doc_file = explode(',',$user['document_file']);?>
                                                          <td>
                                                          <?php foreach( $doc_file as $doc_file_val){
                                                        ?>
                                                        <a style="display: block;" href="<?php echo base_url();?>/uploads/financial_document/<?php echo $doc_file_val; ?>"><?php echo $doc_file_val; ?>
                                                       <?php } ?>
                                                    </td>

                                                   <?php }else if($user['document_type']=='One time Document'){
                                                 $doc_file = explode(',',$user['document_file']);?>
                                                 <td>
                                                         <?php foreach( $doc_file as $doc_file_val){
                                                    ?>
                                                        <a style="display: block;" href="<?php echo base_url();?>/uploads/one_time_document/<?php echo $doc_file_val; ?>"><?php echo $doc_file_val; ?>
                                                   <?php }?>
                                               </td>
                                              <?php  } ?>    
                                                    
                                                    <td><?php echo $user['status']; ?></td>
                                                    
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>

                                            


                                        <h4 class="mb-3 mt-5">Price Bid Document</h4>

                                       <!--  <form class="d-flex mb-4 p-0" action="<?php echo base_url('UserDashboardController/rfp_search_show'); ?>" method="post">
                                                <input class="form-control w-25  me-2" type="text" placeholder="Search" name="search_data">
                                                <input name="submit" class="btn btn-sm btn-outline-primary" type="submit">
                                        </form> -->

                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="1">#</th>
                                                    <th colspan="1">Document Name</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($bid): ?>
                                                <?php foreach($bid as $user): ?>
                                                <tr>
                                                    
                                                    <td><?php echo $user['tender_id']; ?></td>
                                                    <td><a href="<?php echo base_url();?>/uploads/price_document/<?php echo $user['price']; ?>">Price Bid Document</td>
                                                    
                                                    <!-- <td><?//php echo $user['document_name']; ?></td> -->
                                                    <!-- <td><?//php echo $user['document_file']; ?></td> -->
                                                    <!-- <td><?//php echo $user['status']; ?></td> -->
                                                    
                                                    
                                                    <!--<td>
                                                         

                                                         <a href="<?php //echo base_url('/admin/rfp_price_view/'.$user['tender_id']);?>" class="text-dark pe-2" ><i class="fas fa-eye"></i></a> -->
                                                        
                                                        <!-- <a href="<?//php echo base_url('/UserDashboardController/rfp_document_edit/'.$user['id']);?>" class="text-dark pe-2" ><i class="fas fa-edit"></i></a> -->
                                                        
                                                        <!-- <a href="<?php //echo base_url('UserDashboardController/rfp_price_delete/'.$user['id']);?>" class="text-dark" onclick="return confirm('Are you sure you want to delete?');"><i class="fas fa-trash"></i></a>        
                                                        
                                                    </td>-->
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                                                                       
                                            <!-- <button class="action submit btn btn-outline-primary float-end">Submit</button> -->
                                        
                                    <!-- </form> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
   </div>
</div>
