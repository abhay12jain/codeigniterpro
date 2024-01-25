<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card tender_view">
        <div class="card ">
            <div class="card-body rounded">
                <h4 class="mb-3">Document Details</h2>
                <div class=" d-flex p-0 tender-show">
                    <div class="col-12 col-offset-2">                                        
                        <div class="card mt-3">
                            <!-- <form method="post" id="update_tender" name="update_tender" action="<?//= site_url('/UserDashboardController/tender_view_show') ?>"> -->
                                <!-- <input type="hidden" name="id" id="id" value="<?//php echo $pri['id'];?>"> -->
                                <div class="step">                                 
                                    <div class="row">
                                                                             
                                              

                                                    <div class="col-sm-12">
                                                        <h4>Documents</h4>
                                                        <table class="table table-hover table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Document Type</th>
                                                                    <th scope="col">Document Name</th>
                                                                    <th scope="col">Document</th>
                                                                    <th scope="col">Remarks</th>
                                                                    <th scope="col">status</th>
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
                                                                    <td><a href="<?php echo base_url().'/uploads/tender_document/'.$nit['document_file']; ?>" download>Download Document</a></td>
                                                                    <td><?php echo $nit['remarks']; ?> </td>
                                                                    <td><?php echo $nit['status']; ?> </td> 
                                                                    
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>
                                                        
                                
                                
                                
                            <!-- </form> -->
                            <!-- <div class="bg-light p-2">                                                
                                <button  class="action submit btn btn-sm btn-outline-primary float-end" onclick="window.print()">Print</button>
                            </div> -->
                            <!-- <div class="card-footer">                                                 -->
                                <!-- <button class="btn-sm btn-outline-warning">Cancel</button> -->
                            <!-- </div> -->
                      
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
           
