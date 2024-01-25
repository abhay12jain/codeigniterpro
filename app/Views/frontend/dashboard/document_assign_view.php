<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card tender_view">
        <div class="card ">
            <div class="card-body rounded">
                <h2 class="mb-3">Tender Assign Document</h2>
                <div class=" d-flex p-0 tender-show">
                    <div class="col-12 col-offset-2">                                        
                        <div class="card mt-3">
                            <!-- <form method="post" id="update_tender" name="update_tender" action="<?//= site_url('/UserDashboardController/tender_view_show') ?>"> -->
                                <input type="hidden" name="id" id="id" value="<?php echo $pri['tender_id'];?>">
                                <div class="card-body step p-0">                                 
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>Basic Details</h4>

                                            <!-- <h4>vinit</h4> -->

                                          
                                              <table class="table table-hover table-bordered">
                                              <tbody>
                                                <tr>
                                                  <th scope="row">Organisation / Client Name :</th>
                                                  <td ><?php echo $pri['client_nme']; ?></td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">Tender Reference Number :</th>
                                                  <td ><?php echo $pri['tender_refer_number']; ?> </td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">Tender ID :</th>
                                                  <td ><?php echo $pri['tender_id']; ?></td>
                                                  
                                                </tr>
                                                
                                              </tbody>
                                              </table></div>                                                
                                                        

                                                    <div class="col-sm-12">
                                                        <h4>Assign Documents</h4>
                                                        <table class="table table-hover table-bordered">
                                                            <?php if(!empty($sum)): ?>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Document Type</th>
                                                                    <th scope="col">Document Name</th>
                                                                    <th scope="col">Document</th>
                                                                    <!-- <th scope="col">Description</th> -->
                                                                </tr>                                                               
                                                            </thead>
                                                            <tbody>
                                                                
                                                                <?php foreach($sum as $nit): 
                                                                    // print_r($nit);
                                                                    ?>
                                                                <tr>
                                                                    <td><?php echo $nit['document_type']; ?></td>
                                                                    <td><?php echo $nit['document_name']; ?></td>
                                                                    <td><a href="<?php echo base_url().'/uploads/nit_document/'.$nit['document']; ?>" download>Download Document</a></td> 
                                                                    
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>
                                                        <table class="table table-hover table-bordered">
                                                            <?php if(!empty($fin)): ?>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Document Type</th>
                                                                    <th scope="col">Document Name</th>
                                                                    <th scope="col">Document</th>
                                                                    <!-- <th scope="col">Description</th> -->
                                                                </tr>                                                               
                                                            </thead>
                                                            <tbody>
                                                                
                                                                <?php foreach($fin as $nit): 
                                                                    // print_r($nit);
                                                                    ?>
                                                                <tr>
                                                                    <td><?php echo $nit['document_type']; ?></td>
                                                                    <td><?php echo $nit['document_name']; ?></td>
                                                                    <td><a href="<?php echo base_url().'/uploads/nit_document/'.$nit['document']; ?>" download>Download Document</a></td> 
                                                                    
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>
                                                        <table class="table table-hover table-bordered">
                                                            <?php if(!empty($com)): ?>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Document Type</th>
                                                                    <th scope="col">Document Name</th>
                                                                    <th scope="col">Document</th>
                                                                    <!-- <th scope="col">Description</th> -->
                                                                </tr>                                                               
                                                            </thead>
                                                            <tbody>
                                                                
                                                                <?php foreach($com as $nit): 
                                                                    // print_r($nit);
                                                                    ?>
                                                                <tr>
                                                                    <td><?php echo $nit['document_type']; ?></td>
                                                                    <td><?php echo $nit['document_name']; ?></td>
                                                                    <td><a href="<?php echo base_url().'/uploads/nit_document/'.$nit['document']; ?>" download>Download Document</a></td> 
                                                                    
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>

                                                        <table class="table table-hover table-bordered">
                                                            <?php if(!empty($one)): ?>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Document Type</th>
                                                                    <th scope="col">Document Name</th>
                                                                    <th scope="col">Document</th>
                                                                    <!-- <th scope="col">Description</th> -->
                                                                </tr>                                                               
                                                            </thead>
                                                            <tbody>
                                                                
                                                                <?php foreach($one as $nit): 
                                                                    // print_r($nit);
                                                                    ?>
                                                                <tr>
                                                                    <td><?php echo $nit['document_type']; ?></td>
                                                                    <td><?php echo $nit['document_name']; ?></td>
                                                                    <td><a href="<?php echo base_url().'/uploads/nit_document/'.$nit['document']; ?>" download>Download Document</a></td> 
                                                                    
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>
                                                        

                                                  
                                                    <div class="col-sm-12">
                                                        <h4>Remarks</h4>
                                        
                                                        <table class="table table-hover table-bordered">
                                                            <tbody>
                                                                

                                                                <tr>
                                                                    
                                                                    
                                                                    <td colspan="3"><?php  echo $pr['remarks']; ?> </td>

                                                                    
                                                                </tr>                                                                                   
                                                            </tbody>
                                                        </table>
                                                    </div>
                                
                                
                                
                            <!-- </form> -->
                            
                            <!-- <div class="card-footer">                                                
                                <button class="btn-sm btn-outline-warning" href="<?php echo site_url('/admin/document_tender') ?>">Assign Document</button>
                            </div> -->
                            <div class="card-footer">                                                
                                <a class="btn-sm btn-outline-warning" href="<?php echo site_url('/admin/document_tender') ?>">Cancel</a>
                            </div>
                      
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function print.table(){
        window.print()
    }
</script>
<style>
@media print {
         .card-footer{display:none !important}
         nav{display:none}
         .navbar{display:none}
         header{display:none}

      }
      </style>
<!-- <style type="text/css">
    @media print {
         .card-footer{display:none !important}
         .header, .nav
         {
           display: none;
         }
</style> -->
           