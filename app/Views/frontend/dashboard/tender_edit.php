<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card">
                        <div class="card ">
                            <div class="card-body rounded">
                                <h4 class="mb-3">Edit Tender information</h4>
                                <div class="d-flex p-0">
                                    <div class="col-12 col-offset-2">                                        
                                        <div class="card mt-3">
                                            <div class="card-body step p-0">
                                                <form method="post" id="update_tender"  action="<?= site_url('/UserDashboardController/tender_update') ?>" enctype="multipart/form-data">
                                                    <input type="hidden" name="id" id="id" value="<?php echo $tend['id']; ?>">
                                                <div class="row">
                                                    <div class="col-sm-12"><h4>Basic Details</h4></div>

                                                    <div class="col-sm-6">
                                                        <select  name="zone" class="Modified-Select" id="zone">
                                                            <option>Select Zone</option>
                                                                                                                        
                                                        <?php foreach($zone as $row):?>
                                                                <option value="<?php echo $row['zone'];?>"<?php if($tend['zone']==$row['zone']){echo 'selected=selected'; } ?>><?php echo $row['zone'];?></option>
                                                            <?php endforeach;?>
                                                            
                                                            
                                                            

                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <select  name="client_nme" class="Modified-Select" id="client_nme">
                                                            <option>Select Company / Client Name</option>
                                                            <?php foreach($category as $row):?>
                                                                <option value="<?php echo $row['organization_name'];?>"<?php if($tend['client_nme']==$row['organization_name']){echo 'selected=selected'; } ?>><?php echo $row['organization_name'];?></option>
                                                            <?php endforeach;?>
                                                            
                                                        
                                                        </select>
                                                    </div>

                                                    <!-- <div class="col-sm-6">
                                                        <select  name="zone" class="Modified-Select" id="zone">
                                                            <option>zone</option>
                                                            
                                                            <?//php foreach($zone as $row):?>
                                                                <option value="<?//php echo $row['zone'];?>"><?//php echo $row['zone'];?></option>
                                                            <?//php endforeach;?>
                                                           
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <select  name="client_nme" class="Modified-Select">
                                                            <option>Organisation / Client Name</option>
                                                            
                                                            <?//php foreach($category as $row):?>
                                                                <option value="<?//php echo $row['organization_name'];?>"><?//php echo $row['organization_name']; ?></option>
                                                            <?//php endforeach;?>
                                                           
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="client_nme" class="Modified-Select" id="client_nme">
                                                            <option>Select Company / Client Name</option>
                                                        
                                                        </select>
                                                    </div> -->
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="tender_refer_number" class="Modified-Input" type="text" placeholder="Tender Reference Number" value="<?php echo $tend['tender_refer_number']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="tender_id" class="Modified-Input" type="text" placeholder="Tender ID" value="<?php echo $tend['tender_id']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="tender_types" class="Modified-Select">
                                                            <option>Select Tender Type</option>
                                                            <option value="Open Tender" <?php if(trim($tend['tender_types'])=='Open Tender'){ echo "selected=selected";}?>>Open Tender </option>
                                                            <option value="Close Tender" <?php if(trim($tend['tender_types'])=='Close Tender'){ echo "selected=selected";}?>>Close Tender </option>

                                                          </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="tender_category" class="Modified-Select">
                                                            <option>Select Tender Category</option>
                                                            <option value="Work " <?php if(trim($tend['tender_category'])=='Work'){ echo"selected=selected";}?>>Work </option>
                                                            <option value="Services" <?php if(trim($tend['tender_category'])=='Services'){ echo"selected=selected";}?>>Services</option>
                                                            <option value="Goods Suppy" <?php if(trim($tend['tender_category'])=='Goods Suppy'){ echo"selected=selected";}?>>Goods Suppy</option>
                                                            <option value="Supply & Services" <?php if(trim($tend['tender_category'])=='Supply & Services'){ echo"selected=selected";}?>>Supply & Services</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select   name="general_technical_evaluation_allowed" class="Modified-Select">
                                                            <option>General technical Evaluation Allowed</option>
                                                            <option value="Yes" <?php if($tend['general_technical_evaluation_allowed']=='Yes'){ echo"selected=selected";}?>>Yes</option>
                                                            <option value="No" <?php if($tend['general_technical_evaluation_allowed']=='No'){ echo"selected=selected";}?>>No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="is_multi_currency" class="Modified-Select">
                                                            <option>Is Multi Currency Allowed for fee</option>
                                                            <option value="Yes" <?php if($tend['is_multi_currency']=='Yes'){ echo"selected=selected";}?>>Yes</option>
                                                            <option value="No" <?php if($tend['is_multi_currency']=='No'){ echo"selected=selected";}?>>No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="no_covers" class="Modified-Input" type="text" placeholder="No. of Covers" value="<?php echo $tend['no_covers']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="payment_mode" class="Modified-Select">
                                                            <option>Payment Mode</option>
                                                            <option value="Offline " <?php if(trim($tend['payment_mode'])=='Offline'){ echo"selected=selected";}?>>Offline </option>
                                                            <option value="Online " <?php if(trim($tend['payment_mode'])=='Online'){ echo"selected=selected";}?>>Online </option>
                                                            <option value="Online/Offline (Both) " <?php if(trim($tend['payment_mode'])=='Online/Offline (Both)'){ echo"selected=selected";}?>>Online/Offline (Both) </option>
                                                            <option value="Not Aplicable  " <?php if(trim($tend['payment_mode'])=='Not Aplicable'){ echo"selected=selected";}?>>Not Aplicable  </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="deparment" class="Modified-Select" id="deparment">
                                                            <option>Select Department</option>
                                                                                                                        
                                                        <?php foreach($category as $row):?>
                                                                <option value="<?php echo $row['department'];?>" <?php if($tend['deparment']==$row['department']){echo 'selected=selected'; }  ?>><?php echo $row['department'];?></option>
                                                            <?php endforeach;?>
                                                            
                                                            
                                                            

                                                        </select>
                                                    </div>
                                                    <!-- <div class="col-sm-6">
                                                        <select  name="deparment"  class="Modified-Select">
                                                            <option>Department</option>
                                                            -- <option value="Haryana Telecom Circle" <?//php if(trim($tend['deparment'])=='Haryana Telecom Circle'){ echo"selected=selected";}?>>Haryana Telecom Circle </option>
                                                            <option value="Haryana Telecom Circle" <?//php if(trim($tend['deparment'])=='Haryana Telecom Circle'){ echo"selected=selected";}?>>Haryana Telecom Circle </option> --

                                                            <?//php foreach($category as $row):?>
                                                                <option value="<?//php echo $row['department'];?>"><?//php echo $row['department'];?></option>
                                                            <?//php endforeach;?>


                                                        </select>
                                                    </div> -->
                                                    <div class="col-sm-6">
                                                        <select  name="allow_two_stages_bidding" class="Modified-Select">
                                                            <option>Allow two stage bidding?</option>
                                                            <option value="Yes" <?php if($tend['allow_two_stages_bidding']=='Yes'){ echo"selected=selected";}?>>Yes</option>
                                                            <option value="No" <?php if($tend['allow_two_stages_bidding']=='No'){ echo"selected=selected";}?>>No</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="division" class="Modified-Select" id="division">
                                                            <option>Select Division</option>
                                                            <?php foreach($category as $row):?>
                                                                <option value="<?php echo $row['division'];?>" <?php if($tend['division']==$row['division']){echo 'selected=selected'; }  ?>><?php echo $row['division'];?></option>
                                                            <?php endforeach;?>
                                                        
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                             <div class="card-body step p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4>Tender Fee Details</h4>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="tender_fee_in" class="Modified-Input" type="text" placeholder="Tender Fee in ₹" value="<?php echo $tend['tender_fee_in']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="tender_fee_type" class="Modified-Select">
                                                            <option>Tender Fee Type</option>
                                                            <option value="Offline " <?php if(trim($tend['tender_fee_type'])=='Offline'){ echo"selected=selected";}?>>Offline </option>
                                                            <option value="Online " <?php if(trim($tend['tender_fee_type'])=='Online'){ echo"selected=selected";}?>>Online </option>
                                                            <option value="Online/Offline (Both) " <?php if(trim($tend['tender_fee_type'])=='Online/Offline (Both)'){ echo"selected=selected";}?>>Online/Offline (Both) </option>
                                                            <option value="Not Aplicable  " <?php if(trim($tend['tender_fee_type'])=='Not Aplicable'){ echo"selected=selected";}?>>Not Aplicable  </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="tender_fee_exception_allowed" id="tender_fee_exception_allowed" class="Modified-Select">
                                                            <option>Tender Fee Exemption Allowed</option>
                                                            <option value="Yes" <?php if($tend['tender_fee_exception_allowed']=='Yes'){ echo"selected=selected";}?>>Yes</option>
                                                            <option value="No" <?php if($tend['tender_fee_exception_allowed']=='No'){ echo"selected=selected";}?>>No</option>
                                                        </select>
                                                    </div>


                                                <div class="col-sm-6" id="tender_fee_exception_allowed_for" style="display:none">
                                                        <select  name="tender_fee_exception_allowed_for" class="Modified-Select">
                                                            <option>Tender Fee Exemption Allowed for</option>
                                                            <option value="MSME" <?php if($tend['tender_fee_exception_allowed_for']=='MSME'){ echo"selected=selected";}?>>MSME</option>
                                                            <option value="Startup" <?php if($tend['tender_fee_exception_allowed_for']=='Startup'){ echo"selected=selected";}?>>Startup</option>
                                                            <option value="MSME / Startup" <?php if($tend['tender_fee_exception_allowed_for']=='MSME / Startup'){ echo"selected=selected";}?>>MSME / Startup</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="col-sm-6" id="tender_document_number">
                                                        <input autocomplete="off" name="tender_document_number" class="Modified-Input" type="text" placeholder="Tender Document Number" value="<?php echo $tend['tender_document_number']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6" id="fee_payable_to">
                                                        <input autocomplete="off" name="fee_payable_to" class="Modified-Input" type="text" placeholder="Tender Fee Payable To" value="<?php echo $tend['fee_payable_to']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6" id="fee_payable_at">
                                                        <input autocomplete="off" name="fee_payable_at" class="Modified-Input" type="text" placeholder="Tender Fee Payable At" value="<?php echo $tend['fee_payable_at']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6" id="tender_payment_mode">
                                                        <select  name="tender_payment_mode" class="Modified-Select">
                                                            <option>Tender Payment Mode</option>
                                                            
                                                            <option value="DD " <?php if(trim($tend['tender_payment_mode'])=='DD'){ echo"selected=selected";}?>>DD </option>
                                                            <option value="Cheque " <?php if(trim($tend['tender_payment_mode'])=='Cheque'){ echo"selected=selected";}?>>Cheque </option>
                                                            <option value="RGTS " <?php if(trim($tend['tender_payment_mode'])=='RGTS'){ echo"selected=selected";}?>>RGTS</option>
                                                            <option value="BG" <?php if(trim($tend['tender_payment_mode'])=='BG'){ echo"selected=selected";}?>>BG </option>
                                                            <option value="NEFT" <?php if(trim($tend['tender_payment_mode'])=='NEFT'){ echo"selected=selected";}?>>NEFT </option>
                                                            <option value="OTHER" <?php if(trim($tend['tender_payment_mode'])=='OTHER'){ echo"selected=selected";}?>>OTHER </option>
                                                        </select>
                                                    </div> 



                                                </div>
                                            </div>
                                            <div class="card-body step p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4>EMD Fee Details</h4>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="emd_amount_in" class="Modified-Input" type="text" placeholder="EMD Amount in ₹" value="<?php echo $tend['emd_amount_in']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="emd_fee_type" class="Modified-Select">
                                                            <option>EMD Fee Type</option>
                                                            <option value="Offline " <?php if(trim($tend['emd_fee_type'])=='Offline'){ echo"selected=selected";}?>>Offline </option>
                                                            <option value="Online " <?php if(trim($tend['emd_fee_type'])=='Online'){ echo"selected=selected";}?>>Online </option>
                                                            <option value="Online/Offline (Both) " <?php if(trim($tend['emd_fee_type'])=='Online/Offline (Both)'){ echo"selected=selected";}?>>Online/Offline (Both) </option>
                                                            <option value="Not Aplicable  " <?php if(trim($tend['emd_fee_type'])=='Not Aplicable'){ echo"selected=selected";}?>>Not Aplicable  </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="if_exemption_allowed" id="if_exemption_allowed" class="Modified-Select">
                                                            <option>If Exemption Allowed</option>
                                                            <option value="Yes" <?php if(trim($tend['if_exemption_allowed'])=='Yes'){ echo "selected=selected";}?>>Yes</option>
                                                            <option value="No" <?php if(trim($tend['if_exemption_allowed'])=='No'){ echo "selected=selected";}?>>No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6" id="emd_exemption_allowed_for" style="display:none">
                                                        <select  name="emd_exemption_allowed_for" class="Modified-Select">
                                                            <option>EMD Exemption Allowed For</option>
                                                            <option value="MSME" <?php if(trim($tend['emd_exemption_allowed_for'])=='MSME'){ echo"selected=selected";}?>>MSME</option>
                                                            <option value="Startup" <?php if(trim($tend['emd_exemption_allowed_for'])=='Startup'){ echo"selected=selected";}?>>Startup</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-sm-6" id="emd_document_number">
                                                        <input autocomplete="off" name="emd_document_number" class="Modified-Input" type="text" placeholder="EMD Document Number" value="<?php echo $tend['emd_document_number']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6" id="emd_payable_to">
                                                        <input autocomplete="off"  name="emd_payable_to" class="Modified-Input" type="text" placeholder="EMD Payable To" value="<?php echo $tend['emd_payable_to']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6" id="emd_payable_at">
                                                        <input autocomplete="off" name="emd_payable_at" class="Modified-Input" type="text" placeholder="EMD Payable At" value="<?php echo $tend['emd_payable_at']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6" id="emd_payment_mode">
                                                        <select  name="emd_payment_mode" class="Modified-Select">
                                                            <option>EMD Payment Mode</option>
                                                            <option value="DD " <?php if(trim($tend['emd_payment_mode'])=='DD'){ echo"selected=selected";}?>>DD </option>
                                                            <option value="Cheque " <?php if(trim($tend['emd_payment_mode'])=='Cheque'){ echo"selected=selected";}?>>Cheque </option>
                                                            <option value="RGTS " <?php if(trim($tend['emd_payment_mode'])=='RGTS'){ echo"selected=selected";}?>>RGTS</option>
                                                            <option value="BG" <?php if(trim($tend['emd_payment_mode'])=='BG'){ echo"selected=selected";}?>>BG </option>
                                                            <option value="NEFT" <?php if(trim($tend['emd_payment_mode'])=='NEFT'){ echo"selected=selected";}?>>NEFT </option>
                                                            <option value="OTHER" <?php if(trim($tend['emd_payment_mode'])=='OTHER'){ echo"selected=selected";}?>>OTHER </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6" id="emd_percentage">
                                                        <input autocomplete="off" name="emd_percentage" class="Modified-Input" type="text" placeholder="EMD Percentage (%)" value="<?php echo $tend['emd_percentage']; ?>" />
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="card-body step p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4>Work/Items Detail</h4>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="title" class="Modified-Input" type="text" placeholder="Title" value="<?php echo $tend['title']; ?>" />
                                                    </div>
                                                <div class="col-sm-6">
                                                        <select  name="product_category" class="Modified-Select" id="category">
                                                            <option>Select Product Category</option>
                                                                                                                        
                                                        <?php foreach($p_category as $row):?>
                                                                <option value="<?php echo $row['product_category'];?>"<?php if($tend['product_category']==$row['product_category']){echo 'selected=selected'; }  ?>><?php echo $row['product_category'];?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="work_description" class="Modified-Input" type="text" placeholder=" Work Description" value="<?php echo $tend['work_description']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="bid_validity_days" class="Modified-Input" type="text" placeholder="Bid Validity(Days)" value="<?php echo $tend['bid_validity_days']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="pre_qulifiction_details" class="Modified-Input" type="text" placeholder="Pre Qualification Details" value="<?php echo $tend['pre_qulifiction_details']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="pincode" class="Modified-Input" type="text" placeholder="Pincode" value="<?php echo $tend['pincode']; ?>" />
                                                    </div>
                                                    
                                                    <div class="col-sm-6">
                                                        <label class="text-dark">Pre Bid Meeting Date</label>
                                                        <input autocomplete="off"  name="pre_bid_meeting_date" type="date" placeholder="dd/mm/yyyy" class="Modified-Input" placeholder="Tender Publish Date" value="<?php echo $tend['pre_bid_meeting_date']; ?>" />
                                                    </div>
                                                    
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="remarks" class="Modified-Input" type="text" placeholder="Independent External Monitor/Remarks" value="<?php echo $tend['remarks']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off"  name="allow_preferential_bidder" class="Modified-Input" type="text" placeholder="Allow Preferential Bidder" value="<?php echo $tend['allow_preferential_bidder']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="tender_value_in" class="Modified-Input" type="text" placeholder="Tender value in" value="<?php echo $tend['tender_value_in']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="sub_category" class="Modified-Select" id="sub_category">
                                                            <option>Select Sub Category</option>
                                                            <?php foreach($p_category as $row):?>
                                                                <option value="<?php echo $row['sub_category'];?>"<?php if($tend['sub_category']==$row['sub_category']){echo 'selected=selected'; }  ?>><?php echo $row['sub_category'];?></option>
                                                            <?php endforeach;?>
                                                        
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="col-sm-6">
                                                        <select  name="contract_type" class="Modified-Select">
                                                            <option>Contract Type</option>
                                                            <option value="Tender Singh Stage" <?php if(trim($tend['contract_type'])=='Tender Singh Stage'){ echo"selected=selected";}?>>Tender Singh Stage</option>
                                                            <option value="Tender 2 Stage" <?php if(trim($tend['contract_type'])=='Tender 2 Stage'){ echo"selected=selected";}?>>Tender 2 Stage</option>
                                                            <option value="Reverse Auction" <?php if(trim($tend['contract_type'])=='Reverse Auction'){ echo"selected=selected";}?>>Reverse Auction</option>
                                                        </select>
                                                    </div>
                                                    <!-- <div class="col-sm-6">
                                                        <input  class="Modified-Input" type="text" placeholder="Contact Type" />
                                                    </div> -->
                                                   <div class="col-sm-6">
                                                        <input autocomplete="off" name="period_of" class="Modified-Input" type="text" placeholder="Period of" value="<?php echo $tend['period_of']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="location" class="Modified-Input" type="text" placeholder="Location" value="<?php echo $tend['location']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="pre_bid_meeting" class="Modified-Input" type="text" placeholder="Pre Bid Meeting" value="<?php echo $tend['pre_bid_meeting']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="pre_bid_meeting_address" class="Modified-Input" type="text" placeholder="Pre Bid Meeting Address" value="<?php echo $tend['pre_bid_meeting_address']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="bid_opening_place" class="Modified-Input" type="text" placeholder="Bid Opening Place" value="<?php echo $tend['bid_opening_place']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="should_allowed_nda_tender" class="Modified-Select">
                                                            <option>Should Allow NDA Tender</option>
                                                            <option value="Yes" <?php if(trim($tend['should_allowed_nda_tender'])=='Yes'){ echo"selected=selected";}?>>Yes</option>
                                                            <option value="No" <?php if(trim($tend['should_allowed_nda_tender'])=='No'){ echo"selected=selected";}?>>No</option>
                                                        </select>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            <div class="card-body step p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4>Critical Dates</h4>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="text-dark">Tender Publish Date</label>
                                                        <input autocomplete="off"  name="tender_publish_date" type="date" placeholder="dd/mm/yyyy" class="Modified-Input" placeholder="Tender Publish Date" value="<?php echo $tend['tender_publish_date']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="text-dark">Pre Bid Date</label>
                                                        <input autocomplete="off"  name="pre_bid_date" type="date" class="Modified-Input" placeholder="Pre Bid Date" value="<?php echo $tend['pre_bid_date']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="text-dark">Document Start Date</label>
                                                        <input autocomplete="off" name="document_start_date" type="date" class="Modified-Input" placeholder="Document Start Date" value="<?php echo $tend['document_start_date']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="text-dark">Document Submit Date"</label>
                                                        <input autocomplete="off" name="document_submit_date" type="date" class="Modified-Input" placeholder="Document Submit Date" value="<?php echo $tend['document_submit_date']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="text-dark">Bid Submission Start Date</label>
                                                        <input autocomplete="off"  name="bid_submission_start_date" type="date" class="Modified-Input" placeholder="Bid Submission Start Date" value="<?php echo $tend['bid_submission_start_date']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="text-dark">Bid Opening Date</label>
                                                        <input autocomplete="off"  name="bid_opening_date" type="date" class="Modified-Input" placeholder="Bid Opening Date" value="<?php echo $tend['bid_opening_date']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="text-dark">Bid Submission End Date</label>
                                                        <input autocomplete="off" name="bid_submission_end_date" type="date" class="Modified-Input" placeholder="Bid Submission End Date" value="<?php echo $tend['bid_submission_end_date']; ?>" />
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="card-body step p-0">
                                                <div class="row">
                                                    -- <div class="col-sm-12">
                                                        <h4>Tender Documents</h4>
                                                    </div> --
                                                                                                     
                                                    <div class="col-sm-12">
                                                       <table class="table table-bordered" id="company_field">
                                                       <tr>  
                        
                    <td><h6>Organization Name</h6><div class="col-sm-6">
                                                        <select  name="company_nam[]" class="Modified-Select">
                                                            <option value="">Select Organization</option>
                                                            <?//php foreach($company as $row):?>
                                                                <option value="<?//php echo $row['company_name'];?>"<?//php if($tend['organization_nam']==$row['company_name']){echo 'selected=selected'; } ?>><?//php echo $row['company_name'];?></option>
                                                            <?//php endforeach;?>
                                                        </select>
                                                    </div></td>
                    <td><h6>Organization Circle</h6>
                        <div class="col-sm-6">
                                                        <select  name="circle[]" class="Modified-Select">
                                                            <option value="">Select Organization Circle</option>
                                                            <?//php foreach($circl as $row):?>
                                                                <option value="<?//php echo $row['circle'];?>"<?//php if($tend['circle']==$row['circle']){echo 'selected=selected'; } ?>><?//php echo $row['circle'];?></option>
                                                            <?//php endforeach;?>
                                                        </select>
                                                    </div></td>
                    <td><h6>&nbsp;</h6><button type="button"  id="com_add" class="btn btn-success">+</button></td>  
                    </tr>  
                </table> -->
                                            <div class="card-body step p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4>Tender Documents</h4>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <table class="table table-striped table-bordered" id="nit_dynamic_field">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Organization Name</th>
                                                                    <th scope="col">Organization Circle</th>
                                                                </tr>   
                                                                
                                                            </thead>
                                                            <tbody>
                                                                <?php if(!empty($organization)): ?>
                                                                <?php foreach($organization as $org): 
                                                                     // print_r($org);
                                                                    ?>
                                                                <tr>
                                                                    <td ><?php echo $org['organization_nam']; ?></td>
                                                                    <td><?php echo $org['circle']; ?></td>
                                                                    
                                                                                                                                        
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>

                                                                <!-- <tr>
                                                                    <td><h6>Organization Name</h6>
                                                                        <input autocomplete="off" class="form-control Modified-file" name="nit_name"  />
                                                                    </td>
                                                                    <td><h6>Organization Circle</h6>
                                                                        <input class="form-control Modified-file nit_doc" name="nit_document">
                                                                    </td>
                                                                </tr> -->
                                                                <tr>

                        
                    <td><h6>Organization Name</h6><div class="col-sm-6">
                                                        <select  name="company_nam[]" class="Modified-Select">
                                                            <option value="">Select Organization</option>
                                                            <?php foreach($company as $row):?>
                                                                <option value="<?php echo $row['company_name'];?>"><?php echo $row['company_name'];?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div></td>
                    <td><h6>Organization Circle</h6>
                        <div class="col-sm-6">
                                                        <select  name="circle[]" class="Modified-Select">
                                                            <option value="">Select Organization Circle</option>
                                                            <?php foreach($circl as $row):?>
                                                                <option value="<?php echo $row['circle'];?>"><?php echo $row['circle'];?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div></td>
                      
                    </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>







                                            <div class="card-body step p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4>Tender Documents</h4>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <table class="table table-striped table-bordered" id="nit_dynamic_field">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Document Type</th>
                                                                    <th scope="col">Document Name</th>
                                                                    <th scope="col">Document</th>
                                                                    <th scope="col">Description</th>
                                                                    <!-- <th scope="col" class="text-center"><h6>&nbsp;</h6><button type="button"  id="nit_add" class="btn btn-success">+</button></th> -->
                                                                </tr>   
                                                                
                                                            </thead>
                                                            <tbody>
                                                                <?php if(!empty($tend_nit)): ?>
                                                                <?php foreach($tend_nit as $nit): 
                                                                    // print_r($nit);
                                                                    ?>
                                                                <tr>
                                                                    <td><?php echo $nit['document_type']; ?></td>
                                                                    <td><?php echo $nit['document_name_val']; ?></td>
                                                                    <td><a href="<?php echo base_url().'/uploads/nit_document/'.$nit['document_name']; ?>" download>Download Document</a></td> 
                                                        <td><?php echo $nit['document_description']; ?></td>
                                                                    <td>
                                                                        <a href="<?php echo base_url('UserDashboardController/cor_delete/'.$nit['id']);?>" class="btn btn-danger btn-sm">Delete</a>

                                                                    </td>
                                                                    
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>

                                                                                                       <tr>  
                        <td><h6>Document Type</h6>
                        <label>NIT Document</label></td>
                        <td><h6>Document Name</h6><input autocomplete="off" class="form-control Modified-file" name="nit_name"  /></td>
                        <td><h6>Upload Document</h6>
                        <input class="form-control Modified-file nit_doc" type="file" name="nit_document">
                        
                        
                        
                        <div>Document Name: <label class="nit_filename"> </label></div>
                        <div>Document Size: <label class="nit_filesize"> </label></div></td>  

                    
                    <td><h6>Description</h6><textarea autocomplete="off" class="form-control Modified-file" name="nit_description" ></textarea></td>
                    <!-- <td><h6>&nbsp;</h6><button type="button"  id="nit_add" class="btn btn-success">+</button></td>   -->
                    </tr>

                         
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <table class="table table-striped table-bordered" id="work_dynamic_field">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Document Type</th>
                                                                <th scope="col">Document Name</th>
                                                                <th scope="col">Document</th>                                                          
                                                                <th scope="col">Description</th>
                                                                <!-- <th scope="col" class="text-center"><h6>&nbsp;</h6><button type="button"  id="add_work" class="btn btn-success">+</button></th> -->
                                                            </tr> 
                                                            <!-- <tr>
                                                                <th scope="col">Work Item Documents</th>
                                                                <th scope="col"><input class="form-control Modified-file" type="file"  name="work_upload_document" value="<?//php echo $tend['work_upload_document']; ?>"></th>
                                                                <th scope="col"><input class="form-control Modified-file" type="text"  name="nit_document_name" placeholder="Document Name" value="<?//php echo $tend['nit_document_name']; ?>"></th>
                                                                <th scope="col"><input class="form-control Modified-file" placeholder="Description" type="text"  name="work_add_escription" value="<?//php echo $tend['work_add_escription']; ?>"></th>
                                                                <th scope="col"><label>218.53kb</label></th>
                                                            </tr> -->

                                                            <tbody>
                                                                <?php if(!empty($tend_work)):
                                                                foreach($tend_work as $wk): 
                                                                    
                                                                    ?>
                                                                <tr>
                                                                    <td><?php echo $wk['document_type']; ?></td>
                                                                    <td><?php echo $wk['document_name_val']; ?></td>
                                                                     <td><a href="<?php echo base_url().'/uploads/workitem_document/'.$wk['document_name']; ?>" download>Download Document</a></td> 
                                                                    
                                                                    
                                                                    <td><?php echo $wk['document_description']; ?></td>
                                                                    <td>
                                                                        <a href="<?php echo base_url('UserDashboardController/cor_delete/'.$wk['id']);?>" class="btn btn-danger btn-sm">Delete</a>
                                                                    </td>
                                                                    

                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>

                                                                <tr>  
                        <td><h6>Document Type</h6>
                        <label>Work Item <br>Documents</label></td>

                        <td><h6>Document Name</h6><input autocomplete="off"  class="form-control Modified-file" name="workitem_name"  /></td>
                        <td><h6>Upload Document</h6>
                        <input class="form-control Modified-file work_doc" type="file" name="workitem_document" >
                        <div>Document Name: <label class="work_filename"> </label></div>
                        <div>Document Size: <label class="work_filesize"> </label></div></td> 

                        
                        <td><h6>Description</h6>
                             <textarea  class="form-control Modified-file" name="workitem_description" ></textarea>
                        </td>
                        
                        <!-- <td><h6>&nbsp;</h6><button type="button"  id="add_work" class="btn btn-success">+</button></td>   -->
                    </tr>
                                                            </tbody>
                                                        </thead>
                                                    </table>
                                                    <!-- </div> -->                                       
                                                </div>
                                            </div>
                                            <div class="card-body step p-0">
                                                <div class="col-sm-12">
                                                    <h4 class="mb-3">Corrigendum</h4>
                                                </div>
                                                <!-- <h4>
                                                    <a href="javascript:void(0)" class="add-more-form float-end btn btn-sm btn-outline-secondary">+</a>
                                                </h4>
                                                <div id="group2" class="fvrduplicate">
                                                    <div class="row entry">                                                        
                                                        <div class="col-sm-6">
                                                            <label>Upload Document</label>
                                                            <input class="form-control Modified-file"  type="file"  name="upload_uocument" value="<?//php echo $tend['upload_uocument']; ?>">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label>Add Description</label>
                                                            <input  name="add_description" type="text" class="Modified-Input" placeholder="Add Description" value="<?//php echo $tend['add_description']; ?>" />
                                                        </div>                                                        
                                                        <div class="paste-new-forms"></div>
                                                    </div>
                                                </div> -->
                                                <table class="table table-striped table-bordered" id="dynamic_field">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Upload Document</th>
                                                                <th scope="col">Add Description</th>                                          
                                                                <!-- <th scope="col" ><h6>&nbsp;</h6><button type="button" name="add" id="add" class="btn btn-success">+</button></th> -->
                                                            </tr>
                                                            <tbody>
                                                                <?php if($tend_coringdum):
                                                                 foreach($tend_coringdum as $tend_coringdumval): ?>
                                                                <tr>
                                                                    
                                                                    <td> <a href="<?php echo base_url().'/uploads/corrigendum/'.$tend_coringdumval['upload_document']; ?>" download>Download Document</a></td>                                   
                                                                    <td><?php echo $tend_coringdumval['add_description']; ?></td>
                                                                    
                                                                    <td>
                                                                        <a href="<?php echo base_url('UserDashboardController/cor_delete/'.$tend_coringdumval['id']);?>" class="btn btn-danger btn-sm">Delete</a>
                                                                    </td>
                                                                    
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>

                                                                 <tr>  
                        <td><h6>Upload Document</h6><input autocomplete="off" class="form-control Modified-file" type="file" name="cor_upload_document" ></td>  

                        <td><h6>Description</h6>
                            <textarea autocomplete="off" class="form-control Modified-file" name="cor_description" ></textarea>
                        </td>  
                        <!-- <td><h6>&nbsp;</h6><button type="button" name="add" id="add" class="btn btn-success">+</button></td>   -->
                    </tr>  
                                                            </tbody>
                                                        </thead>
                                                    </table>                                                
                                            </div>
                                            <div class="card-body step p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4>Offline Tender Submission Authority</h4>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="tname" type="text" class="Modified-Input" placeholder="Name" value="<?php echo $tend['tname']; ?>" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="address" type="text" class="Modified-Input" placeholder="address" value="<?php echo $tend['address']; ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body step p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4>Tags</h4>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off"  name="tags" type="text" class="Modified-Input" placeholder="Add Tags" value="<?php echo $tend['tags']; ?>" />
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                            <div class="card-footer">                                                
                                                <button class="action submit btn btn-sm btn-outline-success float-end">Update</button>
                                            </div>
                                        </form> 
                                    </div>                                    
                                </div>
                            </div>
</div>

<script>
        $(document).ready(function () {
        var i=1;  
              $('#add').click(function(){  
                   i++;  
                   $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input autocomplete="off" type="file" name="cor_upload_document[]" class="form-control Modified-file" required /></td><td><textarea class="form-control Modified-file" name="cor_description[]"></textarea></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
              });
          
              $(document).on('click', '.btn_remove', function(){  
                   var button_id = $(this).attr("id");   
                   $('#row'+button_id+'').remove();  
              }); 

     ////////////////
     $('#add_work').click(function(){  
                   i++;  
                   $('#work_dynamic_field').append('<tr id="row_work'+i+'" class="dynamic-added"><td><h6>Document Type</h6><label>Work Item<br> Documents</label></td><td><h6>Upload Document</h6><input autocomplete="off" class="form-control Modified-file work_doc" type="file" name="workitem_document[]"><div>Document Name: <label class="work_filename"> </label></div><div>Document Size: <label class="work_filesize"> </label></div><td><h6>Document Name</h6><input  class="form-control Modified-file" name="workitem_name[]" required /></td></td><td><h6>Description</h6><textarea class="form-control Modified-file" name="workitem_description[]"></textarea></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
              });
          
              $(document).on('click', '.btn_remove', function(){  
                   var button_id = $(this).attr("id");   
                   $('#row_work'+button_id+'').remove();  
              }); 

    $('#com_add').click(function(){  
                   i++;  
                   $('#company_field').append('<tr id="com_work'+i+'" class="dynamic-added"><td><h6>Organization Name</h6><div class="col-sm-6"><select  name="company_nam[]" class="Modified-Select"><option value="">Select Organization </option><?php foreach($company as $row):?><option value="<?php echo $row['company_name'];?>"><?php echo $row['company_name'];?></option><?php endforeach;?></select></div></td><td><h6>Organization Circle</h6><div class="col-sm-6"><select  name="circle[]" class="Modified-Select"><option value="">Select Organization Circle</option><?php foreach($circl as $row):?><option value="<?php echo $row['circle'];?>"><?php echo $row['circle'];?></option><?php endforeach;?></select></div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
              });
          
              $(document).on('click', '.btn_remove', function(){  
                   var button_id = $(this).attr("id");   
                   $('#com_work'+button_id+'').remove();  
              }); 



              ////////////////
     $('#nit_add').click(function(){  
                   i++;  
                   $('#nit_dynamic_field').append('<tr id="row_nit'+i+'" class="dynamic-added"><td><h6>Document Type</h6><label>NIT Document</label></td><td><h6>Upload Document</h6><input autocomplete="off" class="form-control Modified-file nit_doc" type="file" name="nit_document[]"><div>Document Name: <label class="nit_filename"> </label></div><div>Document Size: <label class="nit_filesize"> </label></div></td><td><h6>Document Name</h6><input autocomplete="off"  class="form-control Modified-file" name="nit_name[]" required /></td><td><h6>Description</h6><textarea class="form-control Modified-file" name="nit_description[]"></textarea></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
              });
          
              $(document).on('click', '.btn_remove', function(){  
                   var button_id = $(this).attr("id");   
                   $('#row_nit'+button_id+'').remove();  
              });   


        });


    jQuery("#client_nme").on('change',function(e){
          //alert($(this).val());
          // var email_id = jQuery('#email_id').val();
          //             $.ajax({
          //                 type: 'POST',
          //                 url: "<?php echo base_url();?>/Usersignup/otp",
          //                 data: {email_id:email_id},
          //                 success: function(resultData) { 
                            
                           
          //                 }
          //           });

            });


    $(document).on("change",'.nit_doc', function(e){
        $(this).next().find('label').text(e.target.files[0].name);
           var iSize = (e.target.files[0].size / 1024); 
           iSize = (Math.round(iSize * 100) / 100);
        $(this).next().next().find('label').html( iSize  + "kb"); 
    });

    $(document).on("change",'.work_doc', function(e){
        $(".work_filename").text(e.target.files[0].name);
           var iSize = (e.target.files[0].size / 1024); 
           iSize = (Math.round(iSize * 100) / 100);
        $(".work_filesize").html( iSize  + "kb"); 
    });



     </script>
           
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        $(document).on('click', '.remove-btn', function () {
            $(this).closest('.main-form').remove();
        });
            
        $(document).on('click', '.add-more-form', function () {
            $('.paste-new-forms').append('<div class=" main-form step">\
                            <div class="row">\
                                <div class="col-sm-6">\
                                    <label>Upload Document</label>\
                                        <input class="form-control Modified-file"  type="file"  name="upload_uocument">\
                                    </div>\
                                <div class="col-sm-6">\
                                    <label>Add Description</label>\
                                        <input  name="add_description" type="text" class="Modified-Input" placeholder="Add Description" />\
                                    </div>\
                                <div class="col-md-6">\
                                    <div class="form-group mb-2">\
                                        <br>\
                                        <button type="button" class="remove-btn btn btn-sm btn-outline-warning">-</button>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>');
            });
    });

    $(document).on("change",'#tender_fee_exception_allowed', function(e){
        $tender_fee_exception = $(this).val();
        if($tender_fee_exception=='Yes'){
            $("#tender_fee_exception_allowed_for").show();
            $("#tender_document_number").hide();
            $("#fee_payable_to").hide();
            $("#fee_payable_at").hide();
            $("#tender_payment_mode").hide();
        }else{
            $("#tender_fee_exception_allowed_for").hide();
            $("#tender_document_number").show();
            $("#fee_payable_to").show();
            $("#fee_payable_at").show();
            $("#tender_payment_mode").show();
        }
    });

    $(document).on("change",'#if_exemption_allowed', function(e){
        $tender_fee_exception = $(this).val();
        if($tender_fee_exception=='Yes'){
            $("#emd_exemption_allowed_for").show();
            $("#emd_document_number").hide();
            $("#emd_payable_to").hide();
            $("#emd_payable_at").hide();
            $("#emd_payment_mode").hide();
            $("#emd_percentage").hide();
        }else{
            $("#emd_exemption_allowed_for").hide();
            $("#emd_document_number").show();
            $("#emd_payable_to").show();
            $("#emd_payable_at").show();
            $("#emd_payment_mode").show();
            $("#emd_percentage").show();
        }
    });

    $(document).on("change",'#zone', function(e){
        var getByzone = $(this).val();
//alert(getByzone);
         $.ajax({
              type: 'POST',
              url: "<?php echo base_url();?>/UserDashboardController/get_division_org_Edit",
              data: {getByzone:getByzone},
              success: function(resultData) { 
              $("#client_nme").html(resultData); 
                
              }
                    });

});

    $(document).on("change",'#deparment', function(e){
        var getByzone = $(this).val();
// alert(getByzone);
         $.ajax({
              type: 'POST',
              url: "<?php echo base_url();?>/UserDashboardController/get_division_info",
              data: {getByzone:getByzone},
              success: function(resultData) { 
                // alert(resultData);
              $("#division").html(resultData); 
                
              }
                    });

});

$(document).on("change",'#category', function(e){
        var getByzone = $(this).val();
// alert(getByzone);
         $.ajax({
              type: 'POST',
              url: "<?php echo base_url();?>/UserDashboardController/get_category_info",
              data: {getByzone:getByzone},
              success: function(resultData) { 
                // alert(resultData);
              $("#sub_category").html(resultData); 
                
              }
                    });

});

</script>
                   <!-- <script type="text/javascript">  
            
                var step = 1;
                $(document).ready(function () { stepProgress(step); });

                $(".next").on("click", function () {
                    var nextstep = true;
                    if (nextstep == true) {
                        if (step < $(".step").length) {
                            $(".step").show();
                            $(".step")
                                .not(":eq(" + step++ + ")")
                                .hide();
                            stepProgress(step);
                        }
                        hideButtons(step);
                    }
                });

                // ON CLICK BACK BUTTON
                $(".back").on("click", function () {
                    if (step > 1) {
                        step = step - 2;
                        $(".next").trigger("click");
                    }
                    hideButtons(step);
                });

                // CALCULATE PROGRESS BAR
                stepProgress = function (currstep) {
                    var percent = parseFloat(100 / $(".step").length) * currstep;
                    percent = percent.toFixed();
                    $(".progress-bar")
                        .css("width", percent + "%")
                        .html(percent + "%");
                };

                // DISPLAY AND HIDE "NEXT", "BACK" AND "SUMBIT" BUTTONS
                hideButtons = function (step) {
                    var limit = parseInt($(".step").length);
                    $(".action").hide();
                    if (step < limit) {
                        $(".next").show();
                    }
                    if (step > 1) {
                        $(".back").show();
                    }
                    if (step == limit) {
                        $(".next").hide();
                        $(".submit").show();
                    }
                };


                jQuery(".stage").click(function () {
                    jQuery(".stage").removeClass('active');
                    jQuery(this).addClass('active');
                    var data_id = jQuery(this).data('id');
                    jQuery("#startup_stage").val(data_id);
                });
                jQuery("#select_industry").change(function () {
                    var getVal = $(this).val();
                    if (getVal == 'Other') {
                        jQuery("#other_industry_val").show();
                        jQuery("#other_industry").attr('required', 'required');
                    } else {
                        jQuery("#other_industry_val").hide();
                        jQuery("#other_industry").removeAttr('required');
                    }
                });
            </script> -->
        </div>
    </div>
    


  