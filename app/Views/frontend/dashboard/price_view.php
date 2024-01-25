<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card tender_view">
        <div class="card ">
            <div class="card-body rounded">
                <h2 class="mb-3">Price Details</h2>
                <div class=" d-flex p-0 tender-show">
                    <div class="col-12 col-offset-2">                                        
                        <div class="card mt-3">
                            
                            <form method="post" action="<?= site_url('/UserDashboardController/price_approve') ?>">
                                <!-- <input type="hidden" name="id" id="id" value="<?//php echo $pri['id'];?>"> -->
                                <!-- <input type="hidden" name="id" id="id" value="<?//php echo $pri['id'];?>"> -->
                                <div class="card-body step p-0">                                 
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- <h4>Basic Details</h4> -->

                                          
                                              
                                                    <div class="col-sm-12">
                                                        <!-- <h4>Corrigendum</h4> -->
                                                        <table class="table table-hover table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <!-- <th scope="col">Document Type</th> -->
                                                                    <th scope="col">Tender ID</th>
                                                                    <th scope="col">Document</th>
                                                                </tr>                                                               
                                                            </thead>
                                                            <tbody>
                                                                <?php if(!empty($coria)): ?>
                                                                <?php foreach($coria as $nit): 
                                                                // print_r($nit);
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $nit['tender_id']; ?></td>
                                                                    <td><a href="<?php echo base_url().'/uploads/price_document/'.$nit['price']; ?>" download>Download Price Document</a></td>
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
                                    <input type="hidden" name="id" value="<?php echo $nit['id']; ?>">
                                    <input type="radio" name="price_status" value="Approved">&nbsp;Approved 
                                    <input type="radio" name="price_status" value="Rejected">&nbsp;Rejected 
                                </div>
                                
                            </form>
                            
                                
                            
                            <div class="bg-light p-2">                                                
                                
                            <input type="submit" name="submit" value="Submit" class="btn btn-sm btn-outline-secondary">
                            

                            </div>
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
