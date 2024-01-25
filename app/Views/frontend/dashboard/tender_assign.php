<div class="row mb-4">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card ">
             <div class="card-body rounded">
                <h4 class="mb-3">Assign Users</h4>
                    <div class=" d-flex p-0">
                        <div class="col-12">
                            <div class="card">
                                <div class=" step">
                                    <div class="row">
                                                
                                        <div class="col-sm-6">   
                                            <h4>Technical</h4> 

                                             <form method="post" action="<?= site_url('/UserDashboardController/assign') ?>">
                                               <input type="hidden" name="tender_id" value="<?php echo $tend['tender_id']; ?>" />
                                               <input type="hidden" name="user_id" value="<?php echo $tend['id']; ?>">        
                                                <select  name="assing_user" class="Modified-Select" >
                                                    <option>Select Users</option>
                                                    
                                                    <?php if($userstec):?>
                                                    <?php foreach($userstec as $row):?>
                                                    <option value="<?php echo $row['full_name'];?>"><?php echo $row['full_name']; ?></option>
                                                    <?php endforeach;?>
                                                    <?php endif; ?>                                                        
                                                </select>
                                                <input type="hidden" name="user_type" value="Technical" />                              
                                                   <button class="action submit btn btn-outline-primary float-end">Submit</button>
                                                </form>
                                        </div>
                                        
                                        <div class="col-sm-6"> 
                                            <h4>Financial</h4>  
                                               <form method="post" action="<?= site_url('/UserDashboardController/assign') ?>">
                                                 <input type="hidden" name="tender_id" value="<?php echo $tend['tender_id']; ?>" />
                                                    <select  name="assing_user" class="Modified-Select" >
                                                        <option>Select Users</option>
                                                        <?php if($usersfin): ?>
                                                        <?php foreach($usersfin as $row):?>
                                                            <option value="<?php echo $row['full_name'];?>"><?php echo $row['full_name']; ?></option>
                                                        <?php endforeach;?>
                                                        <?php endif; ?>
                                                    </select>
                                                    <input type="hidden" name="user_type" value="Financial" />      
                                                    <button class="action submit btn btn-outline-primary float-end">Submit</button>
                                                                              
                                                </form>
                                        </div>

                                        <div class="col-sm-6">  
                                           <h4>Common</h4>  
                                           <form method="post" action="<?= site_url('/UserDashboardController/assign') ?>">
                                            <input type="hidden" name="tender_id" value="<?php echo $tend['tender_id']; ?>" />       
                                            <select  name="assing_user" class="Modified-Select" >
                                                <option>Select Users</option>
                                                <?php if($userscom): ?>
                                                <?php foreach($userscom as $row):?>
                                                <option value="<?php echo $row['full_name'];?>"><?php echo $row['full_name']; ?></option>
                                                <?php endforeach;?>
                                                <?php endif; ?>                                                        
                                            </select>
                                            <input type="hidden" name="user_type" value="Common" />
                                               <button class="action submit btn btn-outline-primary float-end">Submit</button>
                                           </form>
                                        </div>

                                        <div class="col-sm-6">   
                                          <h4>One Time</h4>
                                             <form method="post" action="<?= site_url('/UserDashboardController/assign') ?>">
                                                    <input type="hidden" name="tender_id" value="<?php echo $tend['tender_id']; ?>" />       
                                                  <select  name="assing_user" class="Modified-Select" >
                                                    <option>Select Users</option>
                                                    <?php if($usersone): ?>
                                                    <?php foreach($usersone as $row):?>
                                                    <option value="<?php echo $row['full_name'];?>"><?php echo $row['full_name']; ?></option>
                                                    <?php endforeach;?>
                                                    <?php endif; ?>                                                        
                                                  </select>
                                                <input type="hidden" name="user_type" value="One Time" />
                                                <button class="action submit btn btn-outline-primary float-end">Submit</button>
                                               </form>
                                        </div>
                              
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
        </div>
    </div>
</div>
    



