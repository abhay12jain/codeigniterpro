<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card tender_view">
        <div class="card ">
            <div class="card-body rounded">
                <h2 class="mb-3">Tender Details</h2>
                <div class=" d-flex p-0 tender-show">
                    <div class="col-12 col-offset-2">                                        
                        <div class="card mt-3">
                            <div class="d-flex justify-content-end mb-4">
                                
                                <!-- <a href="<?php //echo base_url('/UserDashboardController/tender_assign/'.$pri['tender_id']);?>" class="btn btn-sm btn-outline-primary ">Assign Users</a> -->
                                
                                
                            </div class="mt-3">
                            <form method="post" id="update_user" action="<?= site_url('/UserDashboardController/approve') ?>">
                                <!-- <input type="hidden" name="id" id="id" value="<?//php echo $pri['id'];?>"> -->
                                <input type="hidden" name="id" id="id" value="<?php echo $pri['id'];?>">
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
                                                            <h4>Tender Fee Details</h4>
                                                        <table class="table table-hover table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">Tender Fee in ₹ :</th>
                                                                    <td colspan="3"><?php echo $pri['tender_fee_in']; ?></td>                               
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Tender Fee Type :</th>
                                                                    <td colspan="3"><?php echo $pri['tender_fee_type']; ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Tender Fee Exemption Allowed :</th>
                                                                    <td colspan="3"><?php echo $pri['tender_fee_exception_allowed']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Tender Fee Exemption Allowed for :</th>
                                                                    <td><?php echo $pri['tender_fee_exception_allowed_for']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Tender Document Number :</th>
                                                                    <td><?php echo $pri['tender_document_number']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Tender Fee Payable To :</th>
                                                                    <td><?php echo $pri['fee_payable_to']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Tender Fee Payable At :</th>
                                                                    <td><?php echo $pri['fee_payable_at']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Tender Payment Mode :</th>
                                                                    <td><?php echo $pri['tender_payment_mode']; ?></td>
                                                                </tr>                                                            
                                                            </tbody>
                                                        </table>
                                                        </div>
                                                  
                                              
                                                        <div class="col-sm-12">
                                                            <h4>EMD Fee Details</h4>
                                                        
                                                        <table class="table table-hover table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">EMD Amount in ₹ :</th>
                                                                    <td colspan="3"><?php echo $pri['emd_amount_in']; ?></td>                               
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">EMD Fee Type :</th>
                                                                    <td colspan="3"><?php echo $pri['emd_fee_type']; ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">If Exemption Allowed :</th>
                                                                    <td colspan="3"><?php echo $pri['if_exemption_allowed']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">EMD Exemption Allowed For :</th>
                                                                    <td><?php echo $pri['emd_exemption_allowed_for']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">EMD Document Number :</th>
                                                                    <td><?php echo $pri['emd_document_number']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">EMD Payable To :</th>
                                                                    <td><?php echo $pri['emd_payable_to']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">EMD Payable At :</th>
                                                                    <td><?php echo $pri['emd_payable_at']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">EMD Payment Mode :</th>
                                                                    <td><?php echo $pri['emd_payment_mode']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">EMD Percentage (%) :</th>
                                                                    <td><?php echo $pri['emd_percentage']; ?></td>
                                                                </tr>                                                            
                                                            </tbody>
                                                        </table>
                                                </div> 

                                            
                                                        <div class="col-sm-12">
                                                            <h4>Work/Items Detail</h4>
                                                        
                                                        <table class="table table-hover table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">Title :</th>
                                                                    <td colspan="3"><?php echo $pri['title']; ?></td>                               
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Product Category :</th>
                                                                    <td colspan="3"><?php echo $pri['product_category']; ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Work Description :</th>
                                                                    <td colspan="3"><?php echo $pri['work_description']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Bid Validity(Days) :</th>
                                                                    <td><?php echo $pri['bid_validity_days']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Pre Qualification Details :</th>
                                                                    <td><?php echo $pri['pre_qulifiction_details']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Pincode :</th>
                                                                    <td><?php echo $pri['pincode']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Pre Bid Meeting Date :</th>
                                                                    <td><?php echo $pri['pre_bid_meeting_date']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Independent External Monitor/Remarks :</th>
                                                                    <td><?php echo $pri['remarks']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Allow Preferential Bidder :</th>
                                                                    <td><?php echo $pri['allow_preferential_bidder']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Tender value in :</th>
                                                                    <td><?php echo $pri['tender_value_in']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Sub Category :</th>
                                                                    <td><?php echo $pri['sub_category']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Contract Type :</th>
                                                                    <td><?php echo $pri['contract_type']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Period of :</th>
                                                                    <td><?php echo $pri['period_of']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Location :</th>
                                                                    <td><?php echo $pri['location']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Pre Bid Meeting :</th>
                                                                    <td><?php echo $pri['pre_bid_meeting']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Pre Bid Meeting Address :</th>
                                                                    <td><?php echo $pri['pre_bid_meeting_address']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Bid Opening Place :</th>
                                                                    <td><?php echo $pri['bid_opening_place']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Should Allow NDA Tender :</th>
                                                                    <td><?php echo $pri['should_allowed_nda_tender']; ?></td>
                                                                </tr>                                                            
                                                            </tbody>
                                                        </table>
                                                  </div>
                                                
                                                        <div class="col-sm-12">
                                                            <h4>Critical Dates</h4>
                                                       
                                                        <table class="table table-hover table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">Tender Publish Date :</th>
                                                                    <td colspan="3"><?php echo $pri['tender_publish_date']; ?></td>                               
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Pre Bid Date :</th>
                                                                    <td colspan="3"><?php echo $pri['pre_bid_date']; ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Document Start Date :</th>
                                                                    <td colspan="3"><?php echo $pri['document_start_date']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Document Submit Date :</th>
                                                                    <td><?php echo $pri['document_submit_date']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Bid Submission Start Date :</th>
                                                                    <td><?php echo $pri['bid_submission_start_date']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Bid Opening Date :</th>
                                                                    <td><?php echo $pri['bid_opening_date']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Bid Submission End Date :</th>
                                                                    <td><?php echo $pri['bid_submission_end_date']; ?></td>
                                                                </tr>
                                                                                                                            
                                                            </tbody>
                                                        </table>
                                                 
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <h4>Tender Documents</h4>
                                                        <table class="table table-hover table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Document Type</th>
                                                                    <th scope="col">Document Name</th>
                                                                    <th scope="col">Document</th>
                                                                    <th scope="col">Description</th>
                                                                </tr>                                                               
                                                            </thead>
                                                            <tbody>
                                                                <?php if(!empty($pri_nit)): ?>
                                                                <?php foreach($pri_nit as $nit): 
                                                                    // print_r($nit);
                                                                    ?>
                                                                <tr>
                                                                    <td><?php echo $nit['document_type']; ?></td>
                                                                    <td><?php echo $nit['document_name_val']; ?></td>
                                                                    <td><a href="<?php echo base_url().'/uploads/nit_document/'.$nit['document_name']; ?>" download>Download Document</a></td> 
                                                                    <td><?php echo $nit['document_description']; ?></td>
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Document Type</th>
                                                                    <th scope="col">Document Name</th>
                                                                    <th scope="col">Document</th>
                                                                    <th scope="col">Description</th>
                                                                </tr>                                                               
                                                            </thead>
                                                            <tbody>
                                                                <?php if(!empty($pri_work)):
                                                                foreach($pri_work as $wk): 
                                                                    
                                                                    ?>
                                                                <tr>
                                                                    <td><?php echo $wk['document_type']; ?></td>
                                                                    <td><?php echo $wk['document_name_val']; ?></td>
                                                                    <td><a href="<?php echo base_url().'/uploads/workitem_document/'.$wk['document_name']; ?>" download>Download Document</a></td>
                                                                    <td><?php echo $wk['document_description']; ?></td>
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <h4>Corrigendum</h4>
                                                        <table class="table table-hover table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Upload Document</th>
                                                                    <th scope="col">Add Description</th>
                                                                </tr>                                                               
                                                            </thead>
                                                            <tbody>
                                                                <?php if(!empty($coria)): ?>
                                                                <?php foreach($coria as $nit): 
                                                                // print_r($nit);
                                                                ?>
                                                                <tr>
                                                                    <!-- <td><//?php echo $nit['upload_document']; ?></td> -->
                                                                    <td> <a href="<?php echo base_url().'/uploads/corrigendum/'.$nit['upload_document']; ?>" download>Download Document</a></td>
                                                                    <td><?php echo $nit['add_description']; ?></td>                                          
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>                                                        
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <h4>Offline Tender Submission Authority</h4>
                                        
                                                        <table class="table table-hover table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">Name :</th>
                                                                    <td colspan="3"><?php echo $pri['tname']; ?></td>                               
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Address :</th>
                                                                    <td colspan="3"><?php echo $pri['address']; ?> </td>
                                                                </tr>                                                                                   
                                                            </tbody>
                                                        </table>
                                                    </div>
                                
                                <div class="mb-3">
                                    <div class="col-sm-12">
                                        <h4>Remarks</h4>
                                    </div>
                                    <textarea autocomplete="off" class="form-control" name="approve_remarks" rows="3" required></textarea>
                                </div>
                                
                            </form>

                            
                                
                            <form method="post" action="<?php echo base_url('UserDashboardController/approve');?>">
                            <div class="bg-light p-2">
                                <input type="hidden" name="id" id="id" value="<?php echo $pri['id'];?>">
                            <input type="radio" name="tender_status" value="Approve">&nbsp; Approve
                            <input type="radio" name="tender_status" value="Reject">&nbsp; Reject 
                            <br>
                            <div>
                            <br>
                            <button value="submit" class="btn btn-sm btn-outline-warning">Submit</button>
                            </div>

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
           
