<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card">
        <div class="card ">
            <div class="card-body rounded">
                <h4 class="mb-3">Upload Document</h4>
                <div class=" d-flex p-0">
                    <div class="col-12 col-offset-2">                                        
                        <div class="card mt-3">
                            
                            <?php foreach($coria as $nit): ?>
                            <?php $nit['tender_id'];?>
                        <?php endforeach; ?>
                            
                                <input type="hidden" name="tender_id" id="id" value="<?php echo $nit['tender_id'];?>">
                                <div class="card-body step p-0">                                 
                                    <div class="row">
                                        <div class="col-sm-12"><h4></h4></div>
                                        <?php if(!empty($technical)): ?>
                                        <h4 class="mb-3">Technical Document</h4>

                                        <div class="col-sm-12">
                                                        
                                            <table class="table table-hover table-bordered">
                                                
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Document Type</th>
                                                        <th scope="col">Document List</th>
                                                        <th scope="col">Document Name</th>
                                                        <th scope="col">Document</th>       
                                                        <th scope="col">Status</th>
                                                        <th scope="col" colspan="2" style="text-align: center;">Action</th>                                                             
                                                    </tr>                                                               
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php $i=1; foreach($technical as $nit): 
                                                        // print_r($nit);
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $nit['document_type']; ?></td>
                                                        <td><?php echo $nit['document_list']; ?></td>
                                                        <td><?php echo $nit['document_name']; ?></td>
                                                        <td><a href="<?php echo base_url().'/uploads/technical_document/'.$nit['document_file']; ?>" download>Download Document</a></td>
                                                        <td><?php 
                                                        if(empty($nit['final_status'])){
                                                        echo 'Pending'; 
                                                        }else{
                                                           echo $nit['final_status'];  
                                                        }
                                                        ?></td>
                                                        <td><a class="change_status" href="#" data-num ="<?php echo $nit['id']; ?>" data-stat="Approved">Approve</a></td>
                                                        <td><a class="change_status" href="#" data-stat="Rejected" data-num ="<?php echo $nit['id']; ?>">Reject</a></td>
                                                    </tr>
                                                    <?php $i++; endforeach; ?>
                                                    
                                                </tbody> 
                                                
                                            </table>
                                        </div>
                                          <?php endif; ?>

                                        <?php if(!empty($financial)): ?>
                                        <h4 class="mb-3">Financial Document</h4>
                                        <div class="col-sm-12">
                                                        
                                            <table class="table table-hover table-bordered">
                                                
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Document Type</th>
                                                        <th scope="col">Document List</th>
                                                        <th scope="col">Document Name</th>
                                                        <th scope="col">Document</th>       
                                                        <th scope="col">Status</th>
                                                        <th scope="col" colspan="2" style="text-align: center;">Action</th>                                                                    
                                                    </tr>                                                               
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php foreach($financial as $nit): ?>
                                                    <tr>
                                                       <td><?php echo $i; ?></td>
                                                        <td><?php echo $nit['document_type']; ?></td>
                                                        <td><?php echo $nit['document_list']; ?></td>
                                                        <td><?php echo $nit['document_name']; ?></td>
                                                        <td><a href="<?php echo base_url().'/uploads/financial_document/'.$nit['document_file']; ?>" download>Download Document</a></td>
                                                       <td><?php 
                                                        if(empty($nit['final_status'])){
                                                        echo 'Pending'; 
                                                        }else{
                                                           echo $nit['final_status'];  
                                                        }
                                                        ?></td>
                                                        <td><a class="change_status" href="#" data-num ="<?php echo $nit['id']; ?>" data-stat="Approved">Approve</a></td>
                                                        <td><a class="change_status" href="#" data-stat="Rejected" data-num ="<?php echo $nit['id']; ?>">Reject</a></td>
                                                       
                                                    </tr>
                                                    <?php endforeach; ?>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php endif; ?>

                                        <?php if(!empty($common)): ?>
                                        <h4 class="mb-3">Common Document</h4>
                                        <div class="col-sm-12">
                                            <table class="table table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Document Type</th>
                                                        <th scope="col">List Document</th>
                                                        <th scope="col">Document Name</th>
                                                        <th scope="col">Document</th>       
                                                        <th scope="col">Status</th>
                                                        <th scope="col" colspan="2" style="text-align: center;">Action</th>                                                                    
                                                    </tr>                                                               
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php foreach($common as $nit): 
                                                        // print_r($nit);
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $nit['document_type']; ?></td>
                                                        <td><?php echo $nit['document_list']; ?></td>
                                                        <td><?php echo $nit['document_name']; ?></td>
                                                        <td><a href="<?php echo base_url().'/uploads/common_document/'.$nit['document_file']; ?>" download>Download Document</a></td>
                                                        <td><?php 
                                                        if(empty($nit['final_status'])){
                                                        echo 'Pending'; 
                                                        }else{
                                                           echo $nit['final_status'];  
                                                        }
                                                        ?></td>
                                                        <td><a class="change_status" href="#" data-num ="<?php echo $nit['id']; ?>" data-stat="Approved">Approve</a></td>
                                                        <td><a class="change_status" href="#" data-stat="Rejected" data-num ="<?php echo $nit['id']; ?>">Reject</a></td>
                                                        
                                                    </tr>
                                                    <?php endforeach; ?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php endif; ?>

                                        <?php if(!empty($one)): ?>
                                        <h4 class="mb-3">One Time Document</h4>
                                        <div class="col-sm-12">
                                            <table class="table table-hover table-bordered">
                                                
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Document Type</th>
                                                        <th scope="col">List Document</th>
                                                        <th scope="col">Document Name</th>
                                                        <th scope="col">Document</th>       
                                                        <th scope="col">Status</th>
                                                        <th scope="col" colspan="2" style="text-align: center;">Action</th>                                                                    
                                                    </tr>                                                               
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php foreach($one as $nit): 
                                                        // print_r($nit);
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $nit['document_type']; ?></td>
                                                        <td><?php echo $nit['document_list']; ?></td>
                                                        <td><?php echo $nit['document_name']; ?></td>
                                                        <td><a href="<?php echo base_url().'/uploads/one_time_document/'.$nit['document_file']; ?>" download>Download Document</a></td>
                                                        <td><?php 
                                                        if(empty($nit['final_status'])){
                                                        echo 'Pending'; 
                                                        }else{
                                                           echo $nit['final_status'];  
                                                        }
                                                        ?></td>
                                                        <td><a class="change_status" href="#" data-num ="<?php echo $nit['id']; ?>" data-stat="Approved">Approve</a></td>
                                                        <td><a class="change_status" href="#" data-stat="Rejected" data-num ="<?php echo $nit['id']; ?>">Reject</a></td>
                                                        
                                                    </tr>
                                                    <?php endforeach; ?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                </div> 
                                      <?php endif; ?>          
                           
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    // function print.table(){
    //     window.print()
    // }

 $(document).on("click",'.change_status', function(e){
        e.preventDefault();
        var stat = $(this).data('stat');
        var num = $(this).data('num');
        
         $.ajax({
              type: 'POST',
              url: "<?php echo base_url();?>/UserDashboardController/document_status_update",
              data: {status:stat,num:num},
              success: function(resultData) { 
                location.reload();
              //$("#client_nme").html(resultData); 
               // window.location.reload();

              }
                    });

});   
</script>
