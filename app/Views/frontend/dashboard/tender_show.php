<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card tender_view">
        <div class="card ">
            <div class="card-body rounded">
               
                <div class="d-flex p-0 tender-show">
                    <div class="col-12 col-offset-2"> 
                        <div class="d-flex justify-content-end mb-4">
                            <a href="<?php echo base_url('/UserDashboardController/tender_approve_show/'.$pri['id']);?>" class="btn  btn-outline-secondary ">Tender Approve</a>
                            <button  class="ms-4 action submit btn btn-outline-primary float-end" onclick="window.print()">Print</button>
                            </div>                                       
                        <div class="card mt-3">
                             <h2 class="mb-3">Tender Details</h2>
                            <!-- <form method="post" id="update_tender" name="update_tender" action="<?//= site_url('/UserDashboardController/tender_view_show') ?>"> -->
                                <input type="hidden" name="id" id="id" value="<?php echo $pri['id'];?>">
                                <div class="card-body step p-0">                                 
                                    <div class="row">
                                        <div class="p-logo">
                                                <img src="<?php echo base_url();?>/assets/public/dashboard/images/logo.png" class="pratap-logo"/>
                                            </div>
                                        <div class="col-sm-12">
                                            
                                            <h4>Basic Details</h4>

                                          
                                              <div class="row">
                                                  <div class="col-sm-12">
                                                <table class="table table-hover table-bordered">
                                                 <tbody>
                                                    <tr>
                                                      <th class="col-sm-3">Organisation / Client Name :</th>
                                                      <td class="col-sm-9"><?php echo $pri['client_nme']; ?></td>
                                                    </tr>

                                                    <tr>
                                                      <th>Tender Reference Number :</th>
                                                      <td><?php echo $pri['tender_refer_number']; ?> </td>
                                                    </tr>

                                                    <tr>
                                                      <th>Tender ID :</th>
                                                      <td><?php echo $pri['tender_id']; ?></td>
                                                    </tr>

                                                    <tr>
                                                      <th>Tender Status :</th>
                                                      <td><?php echo $pri['tender_status']; ?></td>
                                                    </tr>
                                                    <tr>
                                                      <th>Zone :</th>
                                                      <td><?php echo $pri['zone']; ?></td>
                                                    </tr>
                                                    
                                                  </tbody>
                                                </table>
                                               </div>
                                               
                                            <div class="col-sm-6 pe-0">
                                                 <table class="table table-hover table-bordered">
                                                 <tbody>
                                                    <tr>
                                                      <th class="col-sm-6">Select Tender Type :</th>
                                                      <td class="col-sm-6"><?php echo $pri['tender_types']; ?></td>
                                                    </tr>
                                                    <tr>
                                                      <th>Select Tender Category :</th>
                                                      <td><?php echo $pri['tender_category']; ?></td>
                                                    </tr> 
                                                    <tr>
                                                      <th>General technical Evaluation Allowed :</th>
                                                      <td><?php echo $pri['general_technical_evaluation_allowed']; ?></td>
                                                     </tr>
                                                    <tr>
                                                      <th >No. of Covers :</th>
                                                      <td ><?php echo $pri['no_covers']; ?></td>
                                                    </tr>
                                                 </tbody>
                                                </table>
                                               </div>

                                            <div class="col-sm-6 ps-0">
                                                <table class="table table-hover table-bordered">
                                                     <tbody>
                                                    <tr>
                                                      <th class="col-sm-6">Payment Mode :</th>
                                                      <td class="col-sm-6"><?php echo $pri['payment_mode']; ?></td>
                                                    </tr>

                                                    <tr>
                                                      <th>Department :</th>
                                                      <td><?php echo $pri['deparment']; ?></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                      <th>Allow two stage bidding? :</th>
                                                      <td><?php echo $pri['allow_two_stages_bidding']; ?></td>
                                                    </tr>

                                                    <tr>
                                                      <th>Division :</th>
                                                      <td><?php echo $pri['division']; ?></td>
                                                    </tr>
                                                
                                                        </tbody>
                                                    </table>
                                               </div>


                                              </div>
                                 


                                        


                                      
                                               
                                                


                                             
                                          </div>


                                                
                                                        <div class="col-sm-6 pe-0">
                                                            <h4 class="marg-top">Tender Fee Details</h4>
                                                        <table class="table table-hover table-bordered">
                                                            <tbody> 
                                                                <tr>
                                                                    <th class="col-sm-6">Tender Fee in ₹ :</th>
                                                                    <td class="col-sm-6"><?php echo number_format($pri['tender_fee_in'],2,'.', ','); ?></td>                               
                                                                </tr>
                                                                <tr>
                                                                    <th>Tender Fee Type :</th>
                                                                    <td><?php echo $pri['tender_fee_type']; ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tender Fee Exemption Allowed :</th>
                                                                    <td><?php echo $pri['tender_fee_exception_allowed']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tender Fee Exemption Allowed for :</th>
                                                                    <td><?php echo $pri['tender_fee_exception_allowed_for']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tender Document Number :</th>
                                                                    <td><?php echo $pri['tender_document_number']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tender Fee Payable To :</th>
                                                                    <td><?php echo $pri['fee_payable_to']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tender Fee Payable At :</th>
                                                                    <td><?php echo $pri['fee_payable_at']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tender Payment Mode :</th>
                                                                    <td><?php echo $pri['tender_payment_mode']; ?></td>
                                                                </tr>                                                            
                                                            </tbody>
                                                        </table>
                                                        </div>
                                                  
                                              
                                                        <div class="col-sm-6 ps-0">
                                                            <h4 class="marg-top">EMD Fee Details</h4>
                                                        
                                                        <table class="table table-hover table-bordered">
                                                            <tbody>
                                                                <?//php if(!empty($pri)): ?>
                                                                <tr>
                                                                    <th class="col-sm-6">EMD Amount in ₹ :</th>
                                                                    <td class="col-sm-6"><?php echo number_format($pri['emd_amount_in']); ?></td>                               
                                                                </tr>
                                                                <?//php endif; ?>
                                                                <tr>
                                                                    <th>EMD Fee Type :</th>
                                                                    <td><?php echo $pri['emd_fee_type']; ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>If Exemption Allowed :</th>
                                                                    <td><?php echo $pri['if_exemption_allowed']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>EMD Exemption Allowed For :</th>
                                                                    <td><?php echo $pri['emd_exemption_allowed_for']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>EMD Document Number :</th>
                                                                    <td><?php echo $pri['emd_document_number']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>EMD Payable To :</th>
                                                                    <td><?php echo $pri['emd_payable_to']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>EMD Payable At :</th>
                                                                    <td><?php echo $pri['emd_payable_at']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>EMD Payment Mode :</th>
                                                                    <td><?php echo $pri['emd_payment_mode']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>EMD Percentage (%) :</th>
                                                                    <td><?php echo $pri['emd_percentage']; ?></td>
                                                                </tr>                                                            
                                                            </tbody>
                                                        </table>
                                                </div> 
                                                      
                                                      
                                                        <div class="col-sm-12">
                                                            <h4 class="marg-top">Work/Items Detail</h4>
                                                           <table class="table table-hover table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th class="col-sm-3">Title :</th>
                                                                    <td class="col-sm-9"><?php echo $pri['title']; ?></td>                               
                                                                </tr>
                                                                <tr>
                                                                    <th>Product Category :</th>
                                                                    <td><?php echo $pri['product_category']; ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Work Description :</th>
                                                                    <td><?php echo $pri['work_description']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Bid Validity(Days) :</th>
                                                                    <td><?php echo $pri['bid_validity_days']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                     <th>Independent External Monitor/Remarks :</th>
                                                                    <td><?php echo $pri['remarks']; ?></td>
                                                                   
                                                                </tr>
                                                                <tr>
                                                                    <th>Pincode :</th>
                                                                    <td><?php echo $pri['pincode']; ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                         








                                                   
                                                        <div class="col-sm-6 pe-0">
                                                           <table class="table table-hover table-bordered">
                                                            <tbody>

                                                                <tr>
                                                                  <th class="col-sm-6">Pre Bid Meeting Date :</th>
                                                                   <td class="col-sm-6"><?php echo $newDate = date("d-m-Y", strtotime($pri['pre_bid_meeting_date']));  ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Pre Qualification Details :</th>
                                                                    <td><?php echo $pri['pre_qulifiction_details']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Allow Preferential Bidder :</th>
                                                                    <td><?php echo $pri['allow_preferential_bidder']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tender value in :</th>
                                                                    <td><?php echo $pri['tender_value_in']; ?></td>
                                                               </tr>
                                                                <tr>
                                                                    <th>Sub Category :</th>
                                                                    <td><?php echo $pri['sub_category']; ?></td>
                                                                </tr>
                                                                 <tr>
                                                                    <th>Contract Type :</th>
                                                                    <td><?php echo $pri['contract_type']; ?></td>
                                                                </tr>


                                                            </tbody>
                                                           </table>
                                                        </div>
                                                      

                                                        <div class="col-sm-6 ps-0">
                                                           <table class="table table-hover table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Period of :</th>
                                                                    <td><?php echo $pri['period_of']; ?></td>
                                                                </tr>
                                                                 <tr>
                                                                    <th>Location :</th>
                                                                    <td><?php echo $pri['location']; ?></td>
                                                               </tr>
                                                                <tr>
                                                                    <th>Pre Bid Meeting :</th>
                                                                    <td><?php echo $pri['pre_bid_meeting']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Pre Bid Meeting Address :</th>
                                                                    <td><?php echo $pri['pre_bid_meeting_address']; ?></td>
                                                               </tr>
                                                                <tr>
                                                                    <th>Bid Opening Place :</th>
                                                                    <td><?php echo $pri['bid_opening_place']; ?></td>
                                                                </tr>
                                                                 <tr>
                                                                    <th>Should Allow NDA Tender :</th>
                                                                    <td><?php echo $pri['should_allowed_nda_tender']; ?></td>
                                                                </tr> 

                                                            </tbody>
                                                          </table>
                                                        </div>
                                                
                                                
                                                        <div class="col-sm-12">
                                                            <h4 class="marg-top critical-dates">Critical Dates</h4>
                                                       
                                                        <table class="table table-hover table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th class="col-sm-3">Tender Publish Date :</th>
                                                                    <td class="col-sm-9"><?php echo $newDate = date("d-m-Y", strtotime($pri['tender_publish_date'])); ?></td>   
                                                                    </tr>                            
                                                             <tr>
                                                                    <th>Pre Bid Date :</th>
                                                                    <td><?php echo $newDate = date("d-m-Y", strtotime($pri['pre_bid_date']));?> </td>
                                                                </tr>
                                                                    <th>Document Start Date :</th>
                                                                    <td><?php echo $newDate = date("d-m-Y", strtotime($pri['document_start_date']));?></td>
                                                                 <tr>
                                                                    <th>Document Submit Date :</th>
                                                                    <td><?php echo $newDate = date("d-m-Y", strtotime($pri['document_submit_date'])); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Bid Submission Start Date :</th>
                                                                    <td><?php echo $newDate = date("d-m-Y", strtotime($pri['bid_submission_start_date'])); ?></td>
                                                               </tr>
                                                                    <th>Bid Opening Date :</th>
                                                                    <td><?php echo $newDate = date("d-m-Y", strtotime($pri['bid_opening_date']));?></td>
                                                               </tr>
                                                                    <th>Bid Submission End Date :</th>
                                                                    <td><?php echo $newDate = date("d-m-Y", strtotime($pri['bid_submission_end_date']));?></td>
                                                                </tr>
                                                                                                                            
                                                            </tbody>
                                                        </table>
                                                 
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <h4 class="marg-top">Tender Documents</h4>
                                                        <table class="table table-hover table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th class="col-sm-3">Document Type</th>
                                                                    <th>Document Name</th>
                                                                    <th>Document</th>
                                                                    <th>Description</th>
                                                                </tr>                                                               
                                                            </thead>
                                                            <tbody>
                                                                <?php if(!empty($pri_nit)): ?>
                                                                <?php foreach($pri_nit as $nit): 
                                                                    // print_r($nit);
                                                                    ?>
                                                                <tr>
                                                                    <td class="col-sm-3"><?php echo $nit['document_type']; ?></td>
                                                                    <td><?php echo $nit['document_name_val']; ?></td>
                                                                    <td><a href="<?php echo base_url().'/uploads/nit_document/'.$nit['document_name']; ?>" download>Download Document</a></td> 
                                                                    <td><?php echo $nit['document_description']; ?></td>
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>
                                                        <table class="table table-hover table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th class="col-sm-3">Document Type</th>
                                                                    <th>Document Name</th>
                                                                    <th>Document</th>
                                                                    <th>Description</th>
                                                                </tr>                                                               
                                                            </thead>
                                                            <tbody>
                                                                <?php if(!empty($pri_work)):
                                                                foreach($pri_work as $wk): 
                                                                    
                                                                    ?>
                                                                <tr>
                                                                    <td class="col-sm-3"><?php echo $wk['document_type']; ?></td>
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
                                                        <h4 class="marg-top">Corrigendum</h4>
                                                        <table class="table table-hover table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th class="col-sm-6">Upload Document</th>
                                                                    <th>Add Description</th>
                                                                </tr>                                                               
                                                            </thead>
                                                            <tbody>
                                                                <?php if(!empty($coria)): ?>
                                                                <?php foreach($coria as $nit): 
                                                                // print_r($nit);
                                                                ?>
                                                                <tr>
                                                                    <!-- <td><//?php echo $nit['upload_document']; ?></td> -->
                                                                    <td class="col-sm-6"> <a href="<?php echo base_url().'/uploads/corrigendum/'.$nit['upload_document']; ?>" download>Download Document</a></td>
                                                                    <td><?php echo $nit['add_description']; ?></td>                                          
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>                                                        
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <h4 class="marg-top">Offline Tender Submission Authority</h4>
                                        
                                                        <table class="table table-hover table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th class="col-sm-6">Name :</th>
                                                                    <td><?php echo $pri['tname']; ?></td>                               
                                                                </tr>
                                                                <tr>
                                                                    <th class="col-sm-6">Address :</th>
                                                                    <td><?php echo $pri['address']; ?> </td>
                                                                </tr>

                                                                                                                                                  
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <h4 class="marg-top">Remarks</h4>

                                                        <!-- <input type="" name="" value="<?//php echo $pri['approve_remarks']; ?>"> -->
                                        
                                                        <table class="table table-hover table-bordered">
                                                            <tbody>
                                                                

                                                                <tr>
                                                                    <!-- -- <th scope="row">Remarks :</th> -- -->
                                                                    <td><?php echo $pri['approve_remarks']; ?> </td>
                                                                </tr>                                                                                   
                                                            </tbody>
                                                        </table>
                                                    </div>
                                
                                
                                
                            <!-- </form> -->
                          
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

.marg-top{margin-top: 40px;}
.p-logo{display: none; position: relative;}

@media print {
.navbar.fixed-top + .page-body-wrapper {
    padding-top: 0;
}

.navbar {display: none!important;}

.btn{display: none;}

nav {display: none!important;}

h2 {text-align: center;}

.step {color: #009aca;font-size: 18px; margin-bottom: 23px;}
.pratap-logo{    width: 10%;
    position: absolute;
    top: -78px;}
.p-logo{display: block;}
.tender-show table {border: 1px solid #dee2e6; margin-bottom: 40px;}

tbody, td, tfoot, th, thead, tr {
    font-size: 12px;
    padding: 8px 6px!important;}

.tender-show table {
    border: 1px solid #707070;
    margin-bottom: 10px;}

.pe-0{    padding-right: 0px !important;}

.ps-0{    padding-left: 0px !important;}

.marg-top{    margin-top: 10px;
    font-size: 16px;
    margin-bottom: 8px;}

.card{ width:100%!important;
    padding:0!important;
    margin:0!important;}

tbody, td, tfoot, th, thead, tr {
    font-size: 10px;
    padding: 6px 4px!important;}

    .critical-dates{margin-top: 40px;}

 .page {
    margin: 0;
    border: initial;
    border-radius: initial;
    width: initial;
    min-height: initial;
    box-shadow: initial;
    background: initial;
    page-break-after: always;
  }

}

@page {size: A4; margin: 0;}


      </style>

           

