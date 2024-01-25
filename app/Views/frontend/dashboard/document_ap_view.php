<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card tender_view">
        <div class="card ">
            <div class="card-body rounded">
                <h4 class="mb-3">Document Details</h2>
                <div class=" d-flex p-0 tender-show">
                    <div class="col-12 col-offset-2">                                        
                        <div class="card mt-3">
                            <form method="post" id="update_user" action="<?= site_url('/UserDashboardController/doc_approve') ?>">
                                <!-- <input type="hidden" name="id" id="id" value="<?//php echo $pri['id'];?>"> -->
                                <input type="hidden" name="id" id="id" value="<?php echo $pri['id'];?>">
                                <div class="card-body step p-0">                                 
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- <h4>Basic Details</h4> -->

                                          
                                              
                                                    <div class="col-sm-12">
                                                        <!-- <h4>Corrigendum</h4> -->
                                                        <table class="table table-hover table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Document Type</th>
                                                                    <th scope="col">Document Name</th>
                                                                    <th scope="col">Document</th>
                                                                </tr>                                                               
                                                            </thead>
                                                            <tbody>
                                                                <?php if(!empty($doc)): ?>
                                                                <?php foreach($doc as $nit): 
                                                                // print_r($nit);
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $nit['document_type']; ?></td>
                                                                    <td><?php echo $nit['document_name']; ?></td> 
                                                                    
                                                                <?php if($nit['document_type']=='Technical'){?>
                                                                    <td> <a href="<?php echo base_url().'/uploads/technical_document/'.$nit['document_file']; ?>" download>Download Document</a></td>
                                                                <?php } else if($nit['document_type']=='Financial'){?>
                                                                    <td> <a href="<?php echo base_url().'/uploads/financial_document/'.$nit['document_file']; ?>" download>Download Document</a></td>

                                                                <?php } else if($nit['document_type']=='Common Document'){?>
                                                                    <td> <a href="<?php echo base_url().'/uploads/common_document/'.$nit['document_file']; ?>" download>Download Document</a></td>

                                                                <?php } else if($nit['document_type']=='One time Document'){?>
                                                                    <td> <a href="<?php echo base_url().'/uploads/one_time_document/'.$nit['document_file']; ?>" download>Download Document</a></td>

                                                                <?php } ?>                                         
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>                                                        
                                                    </div>

                                                    
                                
                                <div class="mb-3">
                                    <div class="col-sm-12">
                                        <h4>Remarks</h4>
                                    </div>
                                    <textarea autocomplete="off" class="form-control" name="remarks" rows="3"></textarea>
                                </div>
                                
                            </form>
                            
                                
                            <button href="<?php echo base_url('UserDashboardController/doc_approve/');?>" class="btn  btn-outline-primary" type="submit" name="status" value="Checked">Checked</button>


                            <button href="<?php echo base_url('UserDashboardController/doc_approve/');?>" name="status" value="Rejected" class="btn btn-outline-warning">Reject</button>

                          
                            </form>
                      
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
