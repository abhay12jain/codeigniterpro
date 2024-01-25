<!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

     <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">

      <div class="toast-body text-white">

      </div>

    </div>

    <div id="toastsContainerTopRight" class="toasts-top-right fixed"></div>

    <!-- Content Header (Page header) -->

    <div class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1 class="m-0">Edit User</h1>

          </div><!-- /.col -->



        </div><!-- /.row -->

            <hr class="border-primary">

      </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->



    <!-- Main content -->

    <section class="content">

      <div class="container-fluid">

<div class="row mb-2">
<?php if (session('msg')=='Data Not Updated.') { ?>

        <div class="alert alert-danger alert-dismissible" style="width:100%">

            <?= session('msg') ?>

            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>

        </div>



      <?php }else{ ?>

<?php if(session('msg')){?>

<div class="alert alert-info alert-dismissible" style="width:100%">

            <?= session('msg') ?>

            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>

        </div>



    <?php }} ?>

 <div class="col-md-9">



    <form  action="<?php echo base_url('AdminUserlist/update');?>" method="post" enctype="multipart/form-data" id="user_form">



          <div class="form-group">

            <label for="formGroupExampleInput">Employee ID</label>

            <!-- <input type="text" name="employe_id" class="form-control"  required> -->
            <input type="text" name="employe_id" class="form-control" value="<?php echo $user_obj['employe_id']; ?>">

            <input type="hidden" name="id" class="form-control" value="<?php echo $user_obj['id']; ?>">

          </div> 



          <div class="form-group">

            <label for="formGroupExampleInput">Full Name</label>

            <!-- <input type="text"  name="full_name" class="form-control" required> -->
            <input type="text" name="full_name" class="form-control" value="<?php echo $user_obj['full_name']; ?>">

          </div> 



          <div class="form-group">

            <label for="formGroupExampleInput">Email Id</label>

            <!-- <input type="email" name="email_id" class="form-control" required> -->
            <input type="text" name="email_id" class="form-control" value="<?php echo $user_obj['email_id']; ?>">

          </div> 



          <div class="form-group">

            <label for="formGroupExampleInput">Phone Number</label>

            <!-- <input type="tel"  name="phone_number" class="form-control" required> -->
            <input type="text" name="phone_no" class="form-control" value="<?php echo $user_obj['phone_no']; ?>">

          </div> 



           <div class="form-group">

            <label for="formGroupExampleInput">Password</label>

            <!-- <input type="password" name="password" id="txtPassword" class="form-control"> -->
            <input type="text" name="password" id="txtPassword" class="form-control" >

          </div>
          <div class="form-group">

            <label for="formGroupExampleInput">Conform Password</label>

            <!-- <input type="password"  name="cnfpassword" id="cnfpassword" class="form-control"> -->
            <input type="text" name="cnfpassword" id="cnfpassword" class="form-control" >

          </div>

          <div class="form-group">
            
            <label for="formGroupExampleInput">Zone</label>

            <select name="zone" class="form-control" required>

            <option value="">Select Zone</option>
            <option value="East" <?php if($user_obj['zone']=='East'){ echo"selected=selected";}?> >East </option>
            <option value="West" <?php if($user_obj['zone']=='West'){ echo"selected=selected";}?> >West </option>
            <option value="North" <?php if($user_obj['zone']=='North'){ echo"selected=selected";}?> >North </option>
            <option value="South" <?php if($user_obj['zone']=='South'){ echo"selected=selected";}?> >South </option>
            </select>

          </div> 

          
          <!-- <?//php if($circle){ ?>
          <div class="form-group">
            <label for="formGroupExampleInput">Circle</label>
            <select name="circle" required class="form-control">
              <option value="">Select Circle</option>
            <?//php  foreach($circle as $cirdata){?>
            <option value="<?//php echo $cirdata['circle']; ?>"><?//php echo $cirdata['circle']; ?></option>
          <?//php } ?>
</select>
<?//php } ?>
          </div> -->
          <?php if($circle){ ?>
            <div class="form-group">
              <label for="formGroupExampleInput">Circle</label>
          <div class="check-list">
            
        <a href="#" class="custom_dropdown form-control">Select Circle<i class="fas fa-chevron-down"></i></a>
        <ul>
          <div class="drop_name">
            <li><input type="checkbox" value="all" class="checkorg" id="checkAll1"> <label>Select All</label></li>
            <?php  foreach($circle as $cirdata){
            if(!empty($cirdata['circle'])){ $selArr = explode(',',$user_obj['circle']);?>
              
            <li><input type="checkbox" class="checkorg" value="<?php echo $cirdata['circle']; ?>" name="org_circle[]" <?php if(in_array($cirdata['circle'],$selArr)){ echo "checked=checked"; } ?>> <label><?php echo $cirdata['circle']; ?></label></li>
          <?php }}?>
            </div>
        </ul>
    </div>
    </div>
  <?php }?>

  <?php if($comp_data){ ?>
    <div class="form-group">
      <label for="formGroupExampleInput">Organization</label>
          <div class="check-list">

        <a href="#" class="custom_dropdown form-control">Select Organization <i class="fas fa-chevron-down"></i></a>
        <ul>
           <div class="drop_name">
            <li><input type="checkbox" value="all" class="checkorg" id="checkAll"> <label>Select All</label></li>
             <?php  foreach($comp_data as $organization){
                 if(!empty($organization['company_name'])){ $selArr = explode(',',$user_obj['company_name']);?>
            <li><input type="checkbox" class="checkorg" value="<?php echo $organization['company_name']; ?>" name="org_organization[]" <?php if(in_array($organization['company_name'],$selArr)){ echo "checked=checked"; } ?>> <label><?php echo $organization['company_name']; ?></label></li>
          <?php }}?>
          </div>
            
        </ul>
    </div>
    </div>
  <?php }?>

          

<!-- <?//php if($organization_data){ ?>
          <div class="form-group">
            <label for="formGroupExampleInput">Company</label>
            <select name="company_name" required class="form-control">
              <option value="">Select Company</option>
            <?//php  foreach($organization_data as $organization){?>
            <option value="<?//php echo $organization['organization_name']; ?>"><?//php echo $organization['organization_name']; ?></option>
          <?//php } ?>
</select>
<?//php } ?>
          </div> -->   


          <div class="form-group">
            <label for="formGroupExampleInput">Role</label>
<div class="check-list">

        <a href="#" class="custom_dropdown form-control">Select Role <i class="fas fa-chevron-down"></i></a>

         <?php $role = explode(',',$user_obj['role']);   
         ?>
     <ul>
      <div class="drop_name">
        <li><input type="checkbox" value="all" class="checkorg" id="checkAll2" > <label>Select All</label></li>
            <li><input type="checkbox" class="checkorg" value="admin" name="role[]" <?php if(in_array('admin',$role)) { echo "checked=checked"; } ?>>
            <label class="">Admin</label></li>

            <li><input type="checkbox" class="checkorg" value="tender_creater" name="role[]" <?php if(in_array('tender_creater',$role)){ echo "checked=checked"; } ?>>
            <label class="" >Tender Creater</label></li>

            <li><input type="checkbox" class="checkorg" value="tender_approver" name="role[]" <?php if(in_array('tender_approver',$role)){ echo "checked=checked"; } ?>>
            <label class="" >Tender Approver</label></li>

            <li><input type="checkbox" class="checkorg" value="price_maker" name="role[]" <?php if(in_array('price_maker',$role)){ echo "checked=checked"; } ?>>
            <label class="" >Price Maker</label></li>

            <li><input type="checkbox" class="checkorg" value="price_checker" name="role[]" <?php if(in_array('price_checker',$role)){ echo "checked=checked"; } ?>>
            <label class="" >Price Checker</label></li>

            <li><input type="checkbox" class="checkorg" value="Technical" name="role[]" <?php if(in_array('Technical',$role)){ echo "checked=checked"; } ?>>
            <label class="">Technical</label></li>

            <li><input type="checkbox" class="checkorg" value="Financial" name="role[]" <?php if(in_array('Financial',$role)){ echo "checked=checked"; } ?>>
            <label class="">Financial</label></li>

            <li><input type="checkbox" class="checkorg" value="Document_Checker" name="role[]" <?php if(in_array('Document_Checker',$role)){ echo "checked=checked"; } ?>>
            <label class="">Document Checker</label></li>

            <li><input type="checkbox" class="checkorg" value="Common" name="role[]" <?php if(in_array('Common',$role)){ echo "checked=checked"; } ?>>
            <label class="">Common </label></li>

            <li><input type="checkbox" class="checkorg" value="one time" name="role[]" <?php if(in_array('one time',$role)){ echo "checked=checked"; } ?>>
            <label class="">One time</label></li>

            <li><input type="checkbox" class="checkorg" value="rfp_extractor" name="role[]" <?php if(in_array('rfp_extractor',$role)){ echo "checked=checked"; } ?>>
            <label class="">RFP Extractor</label></li>

             <li><input type="checkbox" class="checkorg" value="document_approver" name="role[]" <?php if(in_array('document_approver',$role)){ echo "checked=checked"; } ?>>
            <label class="">Document approver</label></li>
            </div>
</ul>
   </div></div>

   <!-- <div class="form-group">

            <label for="formGroupExampleInput">Company</label>

            <input type="text" name="company_name" class="form-control">
            <input type="text" name="company_name" class="form-control" value="<?//php echo $user_obj['circle']; ?>">

          </div> -->

          
  <div class="form-group">

           <button type="submit" id="send_form" class="btn btn-success" >Update User</button>
           <!-- <button type="submit" id="send_form" class="btn btn-success" >Update User</button> -->

          </div>

          

        </form>






   

      
</div>
</div>

</section>
</div>



<style>
        .check-list a {
            text-decoration: none;
            color: #495057;
            border: 1px solid #ced4da;
            padding: 5px 17px;
            margin-bottom: 10px;
            display: inline-block;
        }
.check-list i { float:right; padding-top:5px }
        .check-list ul {
            margin: 0;
            padding: 0;
        }

            .check-list ul li {
                list-style: none;
            }
            .drop_name{ background:#fff; padding:10px; display:none; height:180px; overflow:auto; }
    </style>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- JS & CSS library of MultiSelect plugin -->
<script src="multiselect/jquery.multiselect.js">
  
</script>
<link rel="stylesheet" href="multiselect/jquery.multiselect.css">
<script type="text/javascript">
$('#checkAll,#checkAll1,#checkAll2').click(function () {    
    $(this).parent().nextAll().find(':checkbox.checkorg').prop('checked', $(this).prop('checked'));  
});


  $(".custom_dropdown").on('click', function(e){
       e.preventDefault();
       $(this).next().find('div.drop_name').slideToggle();

  });

  $('#user_form').submit(function Validate(){
    var password = document.getElementById("txtPassword").value;
    var confirmPassword = document.getElementById("cnfpassword").value;
    if (password != confirmPassword) {
      alert("Passwords do not match.");
      return false;
    }
    return true;
    
  });

  $('#user_form').submit(function(){
    if(!$('#user_form input[type="checkbox"]').is(':checked')){
      alert("Please check at least one user role.");
      return false;
    }
});
</script>
<style type="text/css">
  label.form-check-label{ display:block; margin-left: 5px; margin-bottom: 5px;}
</style>


