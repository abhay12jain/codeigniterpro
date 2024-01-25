<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card">
        <div class="card ">
            <div class="card-body rounded">
                <h4 class="mb-3">Tender Price information</h4>
                <div class=" d-flex p-0">
                    <div class="col-12 col-offset-2">                                        
                        <div class="card mt-3">
                            <!-- <form method="post" id="update_tender" name="update_tender" action="<?//= site_url('/UserDashboardController/tender_price_show') ?>"> -->
                                <!-- <input type="hidden" name="id" id="id" value="<?//php echo $pri['id'];?>"> -->
                                <div class="card-body step p-0">                                 
                                    <div class="row">
                                        
                                        
                                        <table class="table table-hover table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Tender ID</th>
                                                                    <th scope="col">Tender Price Document</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Remarks</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>                                                               
                                                            </thead>
                                                            <tbody>
                                                                <?php if(!empty($coria)): ?>
                                                                <?php foreach($coria as $nit): 
                                                                    // print_r($nit);
                                                                    ?>
                                                                <tr>
                                                                    <td><?php echo $nit['id']; ?></td>
                                                                    <td><?php echo $nit['tender_id']; ?></td>
                                                                    
                                                                    <td><a href="<?php echo base_url().'/uploads/price_document/'.$nit['price']; ?>" download>Download Document</a></td>
                                                                    <td><?php echo $nit['status']; ?></td>
                                                                    <td><?php echo $nit['remarks']; ?></td>
                    
                                                                    <td><a href="<?php echo base_url('UserDashboardController/price_delete/'.$nit['id']);?>" class="text-dark" >Delete</a></td>
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>
                                        
                                    </div>
                                </div> 

                                
                                
                                
                           </form>
                            
                        </div>
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
           
