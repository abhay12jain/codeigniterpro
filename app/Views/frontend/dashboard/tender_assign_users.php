<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card tender_view">
        <div class="card ">
            <div class="card-body rounded">
                <h2 class="mb-3">Tender Details</h2>
                <?php 
                 
                  
                ?>
                <div class=" d-flex p-0 tender-show">
                    <div class="col-12 col-offset-2">                                        
                        <div class="card mt-3">
                            <div class="d-flex justify-content-end mb-4">
                                
                                     
                                
                                
                            </div class="mt-3">
                            
                                <!-- <input type="hidden" name="id" id="id" value="<?//php echo $pri['id'];?>"> -->
                               
                                <div class="card-body step p-0">                                 
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>Basic Details</h4>

                                          
                                              <table class="table table-hover table-bordered">
                                              <tbody>
                                                <tr>
                                                  <th scope="row">Organisation / Client Name :</th>
                                                  <td colspan="3"><?php echo $pri['client_nme']; ?></td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">Tender Reference Number :</th>
                                                  <td colspan="3"><?php echo $pri['tender_refer_number']; ?> </td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">Tender ID :</th>
                                                  <td colspan="3"><?php echo $pri['tender_id']; ?></td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">Select Tender Type :</th>
                                                  <td><?php echo $pri['tender_types']; ?></td>
                                                  
                                               
                                                  <th scope="row">Select Tender Category :</th>
                                                  <td><?php echo $pri['tender_category']; ?></td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">General technical Evaluation Allowed :</th>
                                                  <td><?php echo $pri['general_technical_evaluation_allowed']; ?></td>
                                                
                                                  <th scope="row">No. of Covers :</th>
                                                  <td><?php echo $pri['no_covers']; ?></td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">Payment Mode :</th>
                                                  <td><?php echo $pri['payment_mode']; ?></td>
                                               
                                                  <th scope="row">Department :</th>
                                                  <td><?php echo $pri['deparment']; ?></td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">Allow two stage bidding? :</th>
                                                  <td><?php echo $pri['allow_two_stages_bidding']; ?></td>
                                                
                                                  <th scope="row">Division :</th>
                                                  <td><?php echo $pri['division']; ?></td>
                                                </tr>
                                              </tbody>
                                              </table></div>


                                                
                                                        <div class="col-sm-12">
                                                            <h4>Assigned Users</h4>
                                                        <table class="table table-hover table-bordered">
                                                            <tbody>
                                                                <?php if(!empty($technical_user)){?>
                                                                <tr>
                                                                    <th scope="row">Technical</th>
                                                                    <td colspan="3"><?php echo $technical_user['assing_user']; ?></td>                               
                                                                </tr>
                                                               <?php } ?>
                                                               <?php if(!empty($financial_user)){?>
                                                                <tr>
                                                                    <th scope="row">Financial</th>
                                                                    <td colspan="3"><?php echo $financial_user['assing_user']; ?> </td>
                                                                </tr>
                                                                <?php } ?>
                                                                <?php if(!empty($onetime_user)){?>
                                                                <tr>
                                                                    <th scope="row">One Time</th>
                                                                    <td colspan="3"><?php echo $onetime_user['assing_user']; ?></td>
                                                                </tr>
                                                                <?php } ?>
                                                                <?php if(!empty($common_user)){?>
                                                                <tr>
                                                                    <th scope="row">Common</th>
                                                                    <td><?php echo $common_user['assing_user']; ?></td>
                                                                </tr>
                                                                <?php } ?>
                                                                                                                     
                                                            </tbody>
                                                        </table>
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
           
