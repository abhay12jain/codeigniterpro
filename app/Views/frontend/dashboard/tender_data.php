<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card">
                        <div class="card ">
                            <div class="card-body rounded">

                                <h4 class="mb-3">Add Tender information</h4>
                                <div class="d-flex p-0">
                                   <form method="post" id="add_create" action="<?= base_url('/UserDashboardController/add_tender') ?>" enctype="multipart/form-data">
                                    <div class="col-12 col-offset-2">                                        
                                        <div class="card mt-3">
                                            <div class="step">
    
                                                <div class="row">
                                                    <div class="col-sm-12"><h4>Basic Details</h4></div>

                                                    <div class="col-sm-6">
                                                        <select  name="zone" class="Modified-Select" id="zone">
                                                            <option>Select Zone</option>
                                                                                                                        
                                                        <?php foreach($zone as $row):?>
                                                                <option value="<?php echo $row['zone'];?>"><?php echo $row['zone'];?></option>
                                                            <?php endforeach;?>
                                                            
                                                            
                                                            

                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <select  name="client_nme" class="Modified-Select" id="client_nme">
                                                            <option>Select Company / Client Name</option>
                                                        
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <input autocomplete="off"  name="tender_refer_number" class="Modified-Input" type="text" placeholder="Tender Reference Number" required/>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <input autocomplete="off"  name="tender_id" class="Modified-Input" type="text" placeholder="Tender ID" required />
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <select  name="tender_types" class="Modified-Select" placeholder="Select Tender Type" required>
                                                            <option>Select Tender Type</option>
                                                            <option value="Open Tender ">Open Tender </option>
                                                            <option value="Close Tender ">Close Tender </option>
                                                            <!-- <option>other Tender </option> -->

                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <select  name="tender_category" class="Modified-Select">
                                                            <option value="">Select Tender Category</option>
                                                            <option value="Work ">Work </option>
                                                            <option value="Services">Services</option>
                                                            <option value="Goods Suppy">Goods Suppy</option>
                                                            <option value="Supply & Services">Supply & Services</option>

                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <select   name="general_technical_evaluation_allowed" class="Modified-Select">
                                                            <option value="">General technical Evaluation Allowed</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <select  name="is_multi_currency" class="Modified-Select">
                                                            <option value="">Is Multi Currency Allowed for fee</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="no_covers" class="Modified-Input" type="text" placeholder="No. of Covers" />
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <select  name="payment_mode" class="Modified-Select">
                                                            <option value="">Payment Mode</option>
                                                            <option value="Offline ">Offline </option>
                                                            <option value="Online ">Online </option>
                                                            <option value="Online/Offline (Both) ">Online/Offline (Both) </option>
                                                            <option value="Not Aplicable  ">Not Aplicable  </option>
                                                        </select>
                                                    </div>

                                                    <!-- <div class="col-sm-6">
                                                        <select  name="deparment"  class="Modified-Select">
                                                            <option value="">Department</option>
                                                            <option value="Haryana Telecom Circle">Haryana Telecom Circle </option>
                                                            <option value="Haryana Telecom Circle ">Haryana Telecom Circle </option>
                                                            <?//php foreach($category as $row):?>
                                                                <option value="<?//php echo $row['department'];?>"><?//php echo $row['department'];?></option>
                                                            <?//php endforeach;?>

                                                        </select>
                                                    </div> -->
                                                    <div class="col-sm-6">
                                                        <select  name="deparment" class="Modified-Select" id="deparment">
                                                            <option>Select Department</option>
                                                                                                                        
                                                        <?php foreach($category as $row):?>
                                                                <option value="<?php echo $row['department'];?>"><?php echo $row['department'];?></option>
                                                            <?php endforeach;?>
                                                            
                                                            
                                                            

                                                        </select>
                                                    </div>

                                                    <!-- <div class="col-sm-6">
                                                        <select  name="client_nme" class="Modified-Select" id="client_nme">
                                                            <option>Select Company / Client Name</option>
                                                        
                                                        </select>
                                                    </div> -->

                                                    <div class="col-sm-6">
                                                        <select  name="allow_two_stages_bidding" class="Modified-Select">
                                                            <option value="">Allow two stage bidding?</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>

                                                        </select>
                                                    </div>

                                                    <!-- <div class="col-sm-6">
                                                        <select  name="division" class="Modified-Select">
                                                            <option value="">Division</option>
                                                            -- <option value="GMTD,Rohtak ">GMTD,Rohtak </option>
                                                            <option value="CE(Electrical)">CE(Electrical)</option> --
                                                            <?//php foreach($category as $row):?>
                                                                <option value="<?//php echo $row['division'];?>"><?//php echo $row['division'];?></option>
                                                            <?//php endforeach;?>

                                                        </select>
                                                    </div> -->
                                                    <div class="col-sm-6">
                                                        <select  name="division" class="Modified-Select" id="division">
                                                            <option>Select Division</option>
                                                        
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
                                                        <input autocomplete="off" name="tender_fee_in" class="Modified-Input" type="text" placeholder="Tender Fee in ₹" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="tender_fee_type" class="Modified-Select">
                                                            <option value="">Tender Fee Type</option>
                                                            <option value="Offline ">Offline </option>
                                                            <option value="Online ">Online </option>
                                                            <option value="Online/Offline (Both) ">Online/Offline (Both) </option>
                                                            <option value="Not Aplicable  ">Not Aplicable  </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="tender_fee_exception_allowed" class="Modified-Select" id="tender_fee_exception_allowed">
                                                            <option value="">Tender Fee Exemption Allowed</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6" id="tender_fee_exception_allowed_for" style="display:none">
                                                        <select  name="tender_fee_exception_allowed_for" class="Modified-Select" >
                                                            <option value="">Tender Fee Exemption Allowed for</option>
                                                            <option value="MSME">MSME</option>
                                                            <option value="Startup">Startup</option> 
                                                            <option value="MSME/Startup">MSME/Startup</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6" id="tender_document_number" >
                                                        <input autocomplete="off" name="tender_document_number" class="Modified-Input" type="text" placeholder=" Tender Document Number" />
                                                    </div>
                                                    <div class="col-sm-6" id="fee_payable_to" >
                                                        <input autocomplete="off" name="fee_payable_to" class="Modified-Input" type="text" placeholder="Fee Payable To" />
                                                    </div>
                                                    <div class="col-sm-6" id="fee_payable_at" >
                                                        <input autocomplete="off" name="fee_payable_at" class="Modified-Input" type="text" placeholder="Tender Fee Payable At" />
                                                    </div>
                                                    <div class="col-sm-6" id="tender_payment_mode" >
                                                        <select  name="tender_payment_mode" class="Modified-Select">
                                                            <option value="">Tender Payment Mode</option>
                                                            <option value="DD">DD</option>
                                                            <option value="Cheque ">Cheque </option>
                                                            <option value="RGTS ">RGTS </option>
                                                            <option value="BG">BG</option>
                                                            <option value="NEFT ">NEFT </option>
                                                            <option value="OTHER ">OTHER </option>
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
                                                        <input autocomplete="off" name="emd_amount_in" class="Modified-Input" type="text" placeholder="EMD Amount in ₹" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="emd_fee_type" class="Modified-Select">
                                                            <option value="">EMD Fee Type</option>
                                                            <option value="Offline ">Offline </option>
                                                            <option value="Online ">Online </option>
                                                            <option value="Online/Offline (Both) ">Online/Offline (Both) </option>
                                                            <option value="Not Aplicable  ">Not Aplicable  </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="if_exemption_allowed" class="Modified-Select" id="if_exemption_allowed">
                                                            <option value="">If Exemption Allowed</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6" id="emd_exemption_allowed_for" style="display:none">
                                                        <select  name="emd_exemption_allowed_for" class="Modified-Select" >
                                                            <option value="">EMD Exemption Allowed For</option>
                                                            <option value="MSME">MSME</option>
                                                            <option value="Startup">Startup</option> 
                                                            <option value="MSME/Startup">MSME/Startup</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6" id="emd_document_number">
                                                        <input autocomplete="off" name="emd_document_number" class="Modified-Input" type="text" placeholder=" EMD Document Number" />
                                                    </div>
                                                    <div class="col-sm-6" id="emd_payable_to">
                                                        <input autocomplete="off" name="emd_payable_to" class="Modified-Input" type="text" placeholder="EMD Payable To" />
                                                    </div>
                                                    <div class="col-sm-6" id="emd_payable_at">
                                                        <input autocomplete="off" name="emd_payable_at" class="Modified-Input" type="text" placeholder="EMD Payable At" />
                                                    </div>
                                                    <div class="col-sm-6" id="emd_payment_mode">
                                                        <select  name="emd_payment_mode" class="Modified-Select">
                                                            <option value="">EMD Payment Mode</option>
                                                            <option value="DD">DD</option>
                                                            <option value="Cheque ">Cheque </option>
                                                            <option value="RGTS ">RGTS </option>
                                                            <option value="BG">BG</option>
                                                            <option value="NEFT ">NEFT </option>
                                                            <option value="OTHER ">OTHER </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6" id="emd_percentage">
                                                        <input autocomplete="off" name="emd_percentage" class="Modified-Input" type="text" placeholder="EMD Percentage (%)" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body step p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4>Work/Items Detail</h4>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="title" class="Modified-Input" type="text" placeholder="Title" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="product_category" class="Modified-Select" id="category">
                                                            <option>Select Product Category</option>
                                                                                                                        
                                                        <?php foreach($p_category as $row):?>
                                                                <option value="<?php echo $row['product_category'];?>"><?php echo $row['product_category'];?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="work_description" class="Modified-Input" type="text" placeholder=" Work Description" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off"  name="bid_validity_days" class="Modified-Input" type="text" placeholder="Bid Validity(Days)" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off"  name="pre_qulifiction_details" class="Modified-Input" type="text" placeholder="Pre Qualification Details" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="pincode" class="Modified-Input" type="text" placeholder="Pincode" />
                                                    </div>
                                                    
                                                    <div class="col-sm-6">
                                                        <label class="text-dark">Pre Bid Meeting Date</label>
                                                        <input autocomplete="off"  name="pre_bid_meating_date" class="Modified-Input" type="date" placeholder="Pre Bid Meeting Date" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="remarks" class="Modified-Input" type="text" placeholder="Independent External Monitor/Remarks" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="allow_preferential_bidder" class="Modified-Input" type="text" placeholder="Allow Preferential Bidder" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="tender_value_in" class="Modified-Input" type="text" placeholder="Tender value in" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="sub_category" class="Modified-Select" id="sub_category">
                                                            <option>Select Sub Category</option>
                                                            
                                                        
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="col-sm-6">
                                                        <select  name="contract_type" class="Modified-Select">
                                                            <option value="">Contract Type</option>
                                                            <option value="Tender Singh Stage">Tender Singh Stage</option>
                                                            <option value="Tender 2 Stage">Tender 2 Stage</option>
                                                            <option value="Reverse Auction">Reverse Auction</option>
                                                        </select>
                                                    </div> 
                                                    
                                                    <div class="col-sm-6">
                                                         <label class="text-dark">Period of month</label>
                                                        <input autocomplete="off" name="period_of" class="Modified-Input" type="number" placeholder="Period of month" />
                                                        
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="location" class="Modified-Input" type="text" placeholder="Location" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        
                                                        <label class="text-dark">Pre bid Meeting date</label>
                                                        <input autocomplete="off"  name="pre_bid_meeting" class="Modified-Input" type="date" placeholder="Pre Bid Meeting" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="pre_bid_meeting_address" class="Modified-Input" type="text" placeholder="Pre Bid Meeting Address" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="bid_opening_place" class="Modified-Input" type="text" placeholder="Bid Opening Place" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select  name="should_allowed_nda_tender" class="Modified-Select">
                                                            <option value="">Should Allow NDA Tender</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                    <!-- <div class="col-sm-6">
                                                        <input  name="bid_opening_place" class="Modified-Input" type="text" placeholder="Bid Opening Place" />
                                                    </div> -->
                                                 </div>
                                            </div>
                                            <div class="card-body step p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4>Critical Dates</h4>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="text-dark" >Tender Publish Date</label>
                                                        <input  name="tender_publish_date" type="date" placeholder="dd/mm/yyyy" class="Modified-Input"  />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="text-dark">Pre Bid Date</label>
                                                        <input  name="pre_bid_date" type="date" class="Modified-Input" placeholder="Pre Bid Date" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="text-dark">Document Start Date</label>
                                                        <input  name="document_start_date" type="date" class="Modified-Input" placeholder="Document Start Date" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="text-dark">Document Submit Date"</label>
                                                        <input  name="document_submit_date" type="date" class="Modified-Input" placeholder="Document Submit Date" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="text-dark">Bid Submission Start Date</label>
                                                        <input  name="bid_submission_start_date" type="date" class="Modified-Input" placeholder="Bid Submission Start Date" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="text-dark">Bid Opening Date</label>
                                                        <input  name="bid_opening_date" type="date" class="Modified-Input" placeholder="Bid Opening Date" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="text-dark">Bid Submission End Date</label>
                                                        <input  name="bid_submission_end_date" type="date" class="Modified-Input" placeholder="Bid Submission End Date" />
                                                    </div>

                                                    
                                                    
                                                    <div class="card-body step p-0">
                                                <div class="row">
                                                    <!-- <div class="col-sm-12">
                                                        <h4>Tender Documents</h4>
                                                    </div> -->
                                                                                                     
                                                    <div class="col-sm-12">
                                                       <table class="table table-bordered" id="company_field">
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
                    <td><h6>&nbsp;</h6><button type="button"  id="com_add" class="btn btn-success">+</button></td>  
                    </tr>  
                </table>
                                                    

                                                </div>
                                            </div>
                                             <div class="card-body step p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4>Tender Documents</h4>
                                                    </div>
                                                                                                     
                                                    <div class="col-sm-12">
                                                       <table class="table table-bordered" id="nit_dynamic_field">  
                    <tr>  
                        <td><h6>Document Type</h6>
                        <label>NIT Document</label></td>
                        <td><h6>Upload Document</h6>
                        <input class="form-control Modified-file nit_doc" type="file" name="nit_document[]" required>
                        
                        
                        
                        <div>Document Name: <label class="nit_filename"> </label></div>
                        <div>Document Size: <label class="nit_filesize"> </label></div></td>  

                    <td><h6>Document Name</h6><input autocomplete="off" class="form-control Modified-file" name="nit_name[]" required /></td>
                    <td><h6>Description</h6><textarea autocomplete="off" class="form-control Modified-file" name="nit_description[]" required></textarea></td>
                    <td><h6>&nbsp;</h6><button type="button"  id="nit_add" class="btn btn-success">+</button></td>  
                    </tr>  
                </table>
                                                    
                                                    
                <table class="table table-bordered" id="work_dynamic_field">  
                    <tr>  
                        <td><h6>Document Type</h6>
                        <label>Work Item <br>Documents</label></td>
                        <td><h6>Upload Document</h6>
                        <input class="form-control Modified-file work_doc" type="file" name="workitem_document[]" required>
                        <div>Document Name: <label class="work_filename"> </label></div>
                        <div>Document Size: <label class="work_filesize"> </label></div></td> 

                        <td><h6>Document Name</h6>
                            <select name="workitem_name[]" class="form-control">
                                <option value="Financial">Financial</option>
                                <option value="Other">Other</option>
                            </select>
                            </td>
                        <td><h6>Description</h6>
                             <textarea  class="form-control Modified-file" name="workitem_description[]" required></textarea>
                        </td>
                        
                        <td><h6>&nbsp;</h6><button type="button"  id="add_work" class="btn btn-success">+</button></td>  
                    </tr>  
                </table>                  
                                                    
                                                    
                                                    <!-- </div> -->                                        
                                                 </div>
                                            </div>
                                            <div class="card-body step p-0">
                                                <div class="col-sm-12">
                                                    <h4 class="mb-3">Corrigendum</h4>
                                                </div>
                                                
                                <table class="table table-bordered" id="dynamic_field">  
                    <tr>  
                        <td><h6>Upload Document</h6><input autocomplete="off" class="form-control Modified-file" type="file" name="cor_upload_document[]" required></td>  

                        <td><h6>Description</h6>
                            <textarea autocomplete="off" class="form-control Modified-file" name="cor_description[]" required></textarea>
                        </td>  
                        <td><h6>&nbsp;</h6><button type="button" name="add" id="add" class="btn btn-success">+</button></td>  
                    </tr>  
                </table>                                 
                                            </div>
                                            <div class="card-body step p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4>Offline Tender Submission Authority</h4>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="tname" type="text" class="Modified-Input" placeholder="Name" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input autocomplete="off" name="address" type="text" class="Modified-Input" placeholder="address" />
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card-body step p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4>Tags</h4>
                                                    </div>
                                                    <div class="col-sm-6">
                                                     <input autocomplete="off" name="tags" type="text" class="Modified-Input" placeholder="Add Tags" />
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                            
                                                                                            
                                                <button class="action submit btn  btn-outline-success">Submit</button>
                                            
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
                   $('#work_dynamic_field').append('<tr id="row_work'+i+'" class="dynamic-added"><td><h6>Document Type</h6><label>Work Item<br> Documents</label></td><td><h6>Upload Document</h6><input autocomplete="off" class="form-control Modified-file work_doc" type="file" name="workitem_document[]"><div>Document Name: <label class="work_filename"> </label></div><div>Document Size: <label class="work_filesize"> </label></div><td><h6>Document Name</h6><select name="workitem_name[]" class="form-control"><option value="Financial">Financial</option><option value="Other">Other</option></select></td></td><td><h6>Description</h6><textarea class="form-control Modified-file" name="workitem_description[]"></textarea></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
              });
          
              $(document).on('click', '.btn_remove', function(){  
                   var button_id = $(this).attr("id");   
                   $('#row_work'+button_id+'').remove();  
              });
        $('#com_add').click(function(){  
                   i++;  
                   $('#company_field').append('<tr id="com_work'+i+'" class="dynamic-added"><td><h6>Organization Name</h6><div class="col-sm-6"><select  name="company_nam[]" class="Modified-Select"><option value="">Select Organization</option><?php foreach($company as $row):?><option value="<?php echo $row['company_name'];?>"><?php echo $row['company_name'];?></option><?php endforeach;?>       </select></div></td><td><h6>Organization Circle</h6><div class="col-sm-6"><select  name="circle[]" class="Modified-Select"><option value="">Select Organization Circle</option>   <?php foreach($circl as $row):?><option value="<?php echo $row['circle'];?>"><?php echo $row['circle'];?></option><?php endforeach;?>                                                     </select></div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
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
              url: "<?php echo base_url();?>/UserDashboardController/getzone_info",
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
                   
        </div>
    </div>

    


  