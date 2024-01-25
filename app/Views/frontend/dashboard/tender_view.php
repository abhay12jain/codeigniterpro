
<div class="row mb-4">
   <div class="col-md-12 grid-margin stretch-card">
       <div class="card ">
           <div class="card-body rounded">
                <!-- <h4 class="mb-3">Add Division</h4> -->
                <h4 class="mb-3">Tender information</h4>
                <div class="d-flex justify-content-center">
                    <div class="col-12">                                        
                        <div class="mt-3">
                            <div class="p-2 step">
                                <div class="row">
                                        <div class="col-sm-6 col-6 p-0 mb-3">
<div class="row">   
  <div class="col-6">                                 
 <table  class="table table-hover table-bordered">
  <tr>
    <th>TID:</th>
    <td>Tender ID</td>
  </tr>
  <tr>
    <th>B.S Date:</th>
    <td>Bid Submission Date</td>
  </tr>
  <tr>
    <th>T.U. date:</th>
    <td>Tender Upload date</td>
  </tr>
</table>  
</div></div>        

<!-- Button trigger modal -->
<a class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Filter
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary ">

        <h5 class="modal-title text-white" id="exampleModalLabel">Filter</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

         <form class="p-0" action="<?php echo base_url('UserDashboardController/tender_show'); ?>" method="post">

            <div class="mb-3">
             <input class="form-control" type="text" placeholder="Search" name="search_data">
           </div>
                                                        
           <div class="mb-3">
            <label>Tender Publish Date</label>
            <input type="date" name="tpd" placeholder="Tender Publish Date" class="form-control">
          </div>

          <div class="mb-3">
                <label>Bid Submission end date</label>
                <input type="date" name="bsd"  class="form-control">
           </div>
                                                      
        <div class="mb-3">
        <select name="status_filter" class="form-control">
                <option>Filter By Status</option>
                <option value="Approved">Approved</option>
                <option value="Rejected">Rejected</option>
        </select> 
        </div>                       
                <input name="submit" class="btn btn-outline-primary" type="submit">
                                          
                                                    
                                        </form>
      </div>
    </div>
  </div>
</div>

                                  
                                    </div>
                                            
                                         <div class="col-sm-6 col-6 text-end p-0">   
                                        <!-- <a href="<?php //echo site_url('/admin/tender_data') ?>" class="btn btn-outline-secondary mb-4">Add Tender</a> -->
                                        <?php 
                                        $session = session();
                                        $role= explode(',',$session->get('role')); 
                                        ?>
                                       
                                    </div>
        
                                        
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th colspan="1">#</th>
                            <th colspan="1">Tender ID</th>
                            <th colspan="1">Company Name</th>                                                    
                            <th colspan="1">Referance No.</th>
                            <th colspan="1">Publish Date</th>
                            <th colspan="1">B.S Date</th>
                            <th colspan="1">T.U. date</th>
                            <th colspan="1">Location</th>
                            <th colspan="1">Status</th>
                            <th colspan="1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($tend): ?>
                        <?php foreach($tend as $user): ?>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['tender_id']; ?></td>
                            <td><?php echo $user['client_nme']; ?></td>                                                    
                            <td><?php echo $user['tender_refer_number']; ?></td>
                            <td><?php echo $newDate = date("d-m-Y", strtotime($user['tender_publish_date']));?></td>
                            <td><?php echo $newDate = date("d-m-Y", strtotime($user['bid_submission_end_date']));?></td>
                            <td><?php echo $newDate = date("d-m-Y", strtotime($user['submit_date']));?></td>
                            <td><?php echo $user['location']; ?></td>
                            <td><?php echo $user['tender_status']; ?></td>
                            
                            <td style="width:10%;">
                            <?php if(in_array('admin',$role)){?>
                                <a href="<?php echo base_url('/UserDashboardController/tender_view_show/'.$user['id']);?>" title="View" class="text-dark pe-2" ><i class="fas fa-eye"></i></a>

                                <!-- <a href="<?php echo base_url('/UserDashboardController/tender_view_document/'.$user['id']);?>" title="Document" class="text-dark pe-2" ><i class=" fas fa-file"></i></a> -->
                                
                                <a href="<?php echo base_url('/UserDashboardController/tender_edit/'.$user['id']);?>" title="Edit" class="text-dark pe-2" ><i class="fas fa-edit"></i></a>
                                
                                <a href="<?php echo base_url('UserDashboardController/tend_delete/'.$user['id']);?>" title="Delete" class="text-dark" ><i class="fas fa-trash"></i></a>
                            <?php }else{?>

   <div class="select">
    <div class="selectBtn" data-type="firstOption">Select</div>
    <div class="selectDropdown">

              <?php if(in_array('Technical',$role)){?>
                <a href="<?php echo base_url('/admin/document_data/'.$user['tender_id']);?>" class="option"> Technical Document Upload</a>
              <?php } 
              if (in_array('Financial',$role)) {?>
                <a href="<?php echo base_url('/admin/document_data/'.$user['tender_id']);?>" class="option">Financial Document Upload</a>
             <?php } 
             if (in_array('tender_creater',$role)) {?>
                <a href="<?php echo base_url('/admin/tender_data/'.$user['tender_id']);?>" class="option">Add tender</a>

                 <?php }
                if (in_array('Common',$role)) {?>   
                <a href="<?php echo base_url('/admin/document_data/'.$user['tender_id']);?>" class="option"> Common Document Upload</a>
                <?php }
                 if(in_array('one_time',$role)) {?>  
                <a href="<?php echo base_url('/admin/document_data/'.$user['tender_id']);?>" class="option"> One Time Document Upload</a>
                <?php } 
                if(in_array('price_maker',$role)) {?>
                <a href="<?php echo base_url('/admin/price_id/'.$user['tender_id']);?>" class="option">Upload Price</a>

               <?php }
                if(in_array('Document_Checker',$role)) {?>
                <a href="<?php echo base_url('admin/documents-approver/'.$user['tender_id']);?>" class="option">Check Document</a>

                <?php } 
                if(in_array('document_approver',$role)) {?>
                <a href="<?php echo base_url('/UserDashboardController/document_checkrs/'.$user['tender_id']);?>" class="option">Approve Document</a> 

                 <?php } 
                 if(in_array('rfp_extractor',$role)) {?>
                <a href="<?php echo base_url('/UserDashboardController/rfp_extractor/'.$user['tender_id']);?>" class="option">RFP Extractor</a>

                 <?php }
                  if(in_array('tender_approver',$role)) {?>
                <a href="<?php echo base_url('/UserDashboardController/tender_approve_show/'.$user['id']);?>" class="option">Tender Approver</a>     
                
            <?php }?>

    </div>
</div>
<?php }?>


                            
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>                                                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
   </div>
</div>
<style type="text/css">
    .select {
  position: relative;
  margin-bottom: 15px;
  width: 150px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
.select .selectBtn {
  background: var(--bg1);
  padding: 10px;
  box-sizing: border-box;
  border-radius: 3px;
  width: 100%;
  cursor: pointer;
  position: relative;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background: #fff;
}
.select .selectBtn:after {
  content: "";
  position: absolute;
  top: 45%;
  right: 15px;
  width: 6px;
  height: 6px;
  -webkit-transform: translateY(-50%) rotate(45deg);
          transform: translateY(-50%) rotate(45deg);
  border-right: 2px solid #666;
  border-bottom: 2px solid #666;
  transition: 0.2s ease;
}
.select .selectBtn.toggle {
  border-radius: 3px 3px 0 0;
}
.select .selectBtn.toggle:after {
  -webkit-transform: translateY(-50%) rotate(-135deg);
          transform: translateY(-50%) rotate(-135deg);
}
.select .selectDropdown {
  position: absolute;
  top: 100%;
  width: 100%;
  border-radius: 0 0 3px 3px;
  overflow: hidden;
  background: var(--bg1);
  border-top: 1px solid #eee;
  z-index: 1;
  background: #fff;
  -webkit-transform: scale(1, 0);
          transform: scale(1, 0);
  -webkit-transform-origin: top center;
          transform-origin: top center;
  visibility: hidden;
  transition: 0.2s ease;
  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2);
}
.select .selectDropdown .option {
  padding: 10px;
  box-sizing: border-box;
  cursor: pointer;
  display: block;
  text-decoration: none;
  color: #2e2e2e;
}
.select .selectDropdown .option:hover {
  background: #f8f8f8;
}
.select .selectDropdown.toggle {
  visibility: visible;
  -webkit-transform: scale(1, 1);
          transform: scale(1, 1);
}

</style>
<script type="text/javascript">
    let index = 1;

const on = (listener, query, fn) => {
    document.querySelectorAll(query).forEach(item => {
        item.addEventListener(listener, el => {
            fn(el);
        })
    })
}

on('click', '.selectBtn', item => {
    const next = item.target.nextElementSibling;
    next.classList.toggle('toggle');
    next.style.zIndex = index++;
});
on('click', '.option', item => {
    item.target.parentElement.classList.remove('toggle');

    const parent = item.target.closest('.select').children[0];
    parent.setAttribute('data-type', item.target.getAttribute('data-type'));
    parent.innerText = item.target.innerText;
})
</script>