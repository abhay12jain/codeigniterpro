<style type="text/css">
.nav-tabs li.nav-item{text-align: center; background: #337ffd; color: #fff;margin-bottom: 4px; width: 100%; border: 1px solid #2e2e2e;}
.nav-tabs li.nav-item a{color: #fff; display: block; font-size: 14px;}
.layout-navbar-fixed .wrapper .content-wrapper{padding: 10px 10px 90px 10px !important;}
table, tr, td, th{border: 1px solid #2e2e2e;}
table th{ width: 175px; padding: 0 5px;}
table td{ padding: 5px;}
textarea{width: 100%}
.card-body{padding: 0.5rem 1.25rem 0.5rem 0.9rem;}
table#roadmap th{width: inherit;padding:5px; background: #007bff; color: #fff;}
table#roadmap{ font-size: 12px; }

#my_accordion .card .card-header{background:#fff; position:relative; color:#337ffd; padding:0 1.25rem 0 0;}
#my_accordion .card .card-header .btn-link {position:relative;color:#337ffd;  font-weight:600; font-size:15px; display:block; width:100%; text-align:left;}
#my_accordion .card .card-header .btn-link:after{position:absolute; right:0; top:5px; content:'-'; font-size:20px; transition:0.3s ease;}
#my_accordion .card .card-header .btn-link.collapsed:after{position:absolute; right:0; top:5px; content:'+'; font-size:20px;}
#my_accordion .card .collapse{transition:0.4s ease all;}
.card{ margin-bottom: .5rem; }
.nav.nav-tabs li.Active{ background: #1ec326; color: #fff; }
.nav.nav-tabs li.Review{ background: #fe6508bd; color: #fff; }
</style>

<?php 
        $request = \Config\Services::request();
        $uri = $request->uri;
        $id = $uri->getSegments();
?>

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

            <h1 class="m-0"> Founders Journey</h1>

          </div><!-- /.col -->



        </div><!-- /.row -->

            <hr class="border-dark">

      </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->



    <!-- Main content -->

    <section class="content">

      <div class="container-fluid">

         <div class="row mb-2">

         

<div class="col-md-3">
<ul class="nav nav-tabs" role="tablist">
    <?php if(isset($user_datas)){ 
foreach($user_datas as $user_data){
    $userData[] =  $user_data;
}
if(isset($userData)){
?>

    <li class="nav-item <?php echo $userData[0]['step1_status'];  ?>">
        <a class="nav-link"  href="?action=tabs-1" >Startup’s Stage</a>
    </li>
    <li class="nav-item <?php echo $userData[0]['step2_status'];  ?>">
        <a class="nav-link" href="?action=tabs-2">Validate Ideas</a>
    </li>
    <li class="nav-item <?php echo $userData[0]['step3_status'];  ?>">
        <a class="nav-link" href="?action=tabs-3" >Product Roadmap</a>
    </li>
<li class="nav-item <?php echo $userData[0]['step4_status'];  ?>">
        <a class="nav-link"  href="?action=tabs-4">Financial Valuation Validation</a>
    </li>
<li class="nav-item <?php echo $userData[0]['step5_status'];  ?>">
        <a class="nav-link"  href="?action=tabs-5" >Pitchdeck</a>
    </li>
<li class="nav-item <?php echo $userData[0]['step6_status'];  ?>">
        <a class="nav-link" href="?action=tabs-6" >Raise Funding</a>
    </li>

<!-- <li class="nav-item">
        <a class="nav-link" href="?action=tabs-7" >Request a Callback</a>
    </li>   -->

    <li class="nav-item">
        <a class="nav-link"  href="?action=tabs-8">Credits</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="?action=tabs-9">Mentor Booking</a>
    </li> 

    <li class="nav-item">
        <a class="nav-link" href="?action=tabs-10">Founder's Grooming</a>
    </li>   
<?php }}?>

</ul><!-- Tab panes -->
</div>
<?php if(isset($user_datas)){ 
foreach($user_datas as $user_data){
    $userData[] =  $user_data;
}
if(isset($userData)){
?>
<div class="col-md-9">
<div class="tab-content w-100">
   <!-- Step1 -->
    <div class="tab-pane active" id="tabs-1" role="tabpanel">        
            <table style="width:100%;">
            <?php if($userData[0]['startup_stage']){?>
              <tr>
                <th>Startup Stage:</th>
                <td><?php echo $userData[0]['startup_stage'];?></td>
              </tr>
            <?php } ?>
            <?php if($userData[0]['industry']){?>
              <tr>
                <th>Industry:</th>
                <td><?php echo $userData[0]['industry'];?></td>
              </tr>
            <?php }else{?>
              <tr>
                <th>Industry:</th>
                <td><?php echo $userData[0]['other_industry'];?></td>
              </tr>
            <?php } ?>

            <tr>
                <th>Add Tracking status:</th>
                <td>
                <textarea rows="5" name="tracking_status1" class="tracking_status"><?php echo $userData[0]['tracking_status1'];?></textarea>
                <a href="#" class="btn btn-primary update_status">Add Status</a>
                   
                </td>
              </tr>

            <?php if($userData[0]['step1_status']){?>
            <tr>
                <th>Status:</th>
                <td><span class="statusVal"><?php echo $userData[0]['step1_status'];?></span> 
                <a href="#" class="status_change"  data-step="step1_status" style="display:inline-block; float: right;">
                <?php if($userData[0]['step1_status']=='Active'){  echo 'Review'; }else{echo 'Active';} ?></a>
                <span class="statval" style="visibility: hidden;">
                <?php if($userData[0]['step1_status']=='Active'){ echo 'Review'; }else{echo 'Active'; } ?></span>
                </td>
            </tr>
            <?php }?>
            </table>
</div>

<!-- Step2 -->
    <div class="tab-pane" id="tabs-2" role="tabpanel">
       <table style="width:100%;">
            <?php if($userData[0]['idea_description']){?>
              <tr>
                    <th>Idea Description:</th>
                    <td><?php echo $userData[0]['idea_description'];?></td>
              </tr>
            <?php } ?>

            <?php if($userData[0]['refrence_link']){?>
              <tr>
                <th>Refrence Link:</th>
                <?php $link = explode(',',$userData[0]['refrence_link']) ?>
                <td><?php 
                  $i=1; foreach($link as $links){
                    if($links){
                      echo '<a href='.$links.' target="_blank">'.$links.'</a><br>';
                    }
                  $i++; }
                

            ?></td>
              </tr>
            <?php }?>

            <?php if($userData[0]['idea_file']){?>
              <tr>
                <th>Audio File:</th>
                <td><a class="btn btn-primary" href="<?php echo base_url();?>/uploads/<?php echo $userData[0]['idea_file'];?>" download>DownLoad Audio File</a></td>
              </tr>

              <tr>
              <th>Video File:</th>
                <td><a class="btn btn-primary" href="<?php echo base_url();?>/uploads/<?php echo $userData[0]['idea_file'];?>" download>DownLoad Video File</a></td>
             </tr>
                <tr>
                <th>Document File:</th>
                <td><a class="btn btn-primary" href="<?php echo base_url();?>/uploads/<?php echo $userData[0]['idea_file'];?>" download>DownLoad Document File</a></td>
                 </tr>
            <?php } ?>

            <tr>
                <th>Add Tracking status:</th>
                <td>
                <textarea rows="5" name="tracking_status2" class="tracking_status"><?php echo $userData[0]['tracking_status2'];?></textarea>
                <a href="#" class="btn btn-primary update_status">Add Status</a>
                </td>
           </tr>

            <?php if($userData[0]['step2_status']){?>
            <tr>
                <th>Status:</th>
                <td><span class="statusVal"><?php echo $userData[0]['step2_status'];?></span> 
                <a href="#" class="status_change"  data-step="step2_status" style="display:inline-block; float: right;">
                <?php if($userData[0]['step2_status']=='Active'){  echo 'Review'; }else{echo 'Active';} ?></a>
                <span class="statval" style="visibility: hidden;">
                <?php if($userData[0]['step2_status']=='Active'){ echo 'Review'; }else{echo 'Active'; } ?></span>
                </td>
            </tr>
            <?php }?>
</table>


    </div>

<!-- Step3 -->
<div class="tab-pane" id="tabs-3" role="tabpanel">
    <!-- <div class="col-12">
         <form method="post" action="<?php echo base_url();?>/DashboardController/roadmap_filter">
                                <label><strong>Filter:</strong></label>
                                <label for="from">From</label>
                                <input type="text" id="from" name="from">
                                <label for="to">to</label>
                                <input type="text" id="to" name="to">
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                            </form>
                            </div> -->
        <?php if(isset($roadmap_datas)): ?>
         <table style="width:100%;" id="roadmap">
              <tr>
                    <th>#SN</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Submit Date</th>
             </tr>
            <?php 
                 $i=1; foreach($roadmap_datas as $roadmap_data):
                ?>
              <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $roadmap_data['idea_title'];?></td>
                    <td><?php echo $roadmap_data['roadmap_idea_description'];?></td>
                    <td><?php echo $roadmap_data['roadmap_date'];?></td>
                    <td><?php echo $roadmap_data['submit_date'];?></td>
              </tr>
          <?php $i++; endforeach; ?>
         </table>
<table style="width:100%;">
         <tr>
                <th>Add Tracking status:</th>
                <td>
                <textarea rows="5" name="tracking_status3" class="tracking_status"><?php echo $userData[0]['tracking_status3'];?></textarea>
                <a href="#" class="btn btn-primary update_status">Add Status</a>
                </td>
           </tr>

            <?php if($userData[0]['step3_status']){?>
            <tr>
                <th>Status:</th>
                <td><span class="statusVal"><?php echo $userData[0]['step3_status'];?></span> 
                <a href="#" class="status_change"  data-step="step3_status" style="display:inline-block; float: right;">
                <?php if($userData[0]['step3_status']=='Active'){  echo 'Review'; }else{echo 'Active';} ?></a>
                <span class="statval" style="visibility: hidden;">
                <?php if($userData[0]['step3_status']=='Active'){ echo 'Review'; }else{echo 'Active'; } ?></span>
                </td>
            </tr>
            <?php }?> 
 </table>

<?php  endif; ?>

    </div>

    <!-- Step4 -->

    <div class="tab-pane" id="tabs-4" role="tabpanel">
        <?php if($userData[0]['financial_valuation_file']){?>
        <p><a class="btn btn-primary" href="<?php echo base_url().'/assets/public/financial_valuation/'.$userData[0]['financial_valuation_file']; ?>" download>Cick To download financial valuation excel file.</a></p>
<?php }?>
        <table style="width:100%;">
         <tr>
                <th>Add Tracking status:</th>
                <td>
                <textarea rows="5" name="tracking_status4" class="tracking_status"><?php echo $userData[0]['tracking_status4'];?></textarea>
                <a href="#" class="btn btn-primary update_status">Add Status</a>
                </td>
           </tr>

            <?php if($userData[0]['step4_status']){?>
            <tr>
                <th>Status:</th>
                <td><span class="statusVal"><?php echo $userData[0]['step4_status'];?></span> 
                <a href="#" class="status_change"  data-step="step4_status" style="display:inline-block; float: right;">
                <?php if($userData[0]['step4_status']=='Active'){  echo 'Review'; }else{echo 'Active';} ?></a>
                <span class="statval" style="visibility: hidden;">
                <?php if($userData[0]['step4_status']=='Active'){ echo 'Review'; }else{echo 'Active'; } ?></span>
                </td>
            </tr>
            <?php }?> 
 </table>
    </div>

<!-- Step5 -->
    <div class="tab-pane" id="tabs-5" role="tabpanel">
        <?php if($userData[0]['pitchdeck_upload']){?>
       <p><a class="btn btn-primary" href="<?php echo base_url().'/assets/public/pitchdeck/'.$userData[0]['pitchdeck_upload']; ?>" download>Cick To download Pitchdeck.</a></p>
       <?php }?> 
        <table style="width:100%;">
         <tr>
                <th>Add Tracking status:</th>
                <td>
                <textarea rows="5" name="tracking_status5" class="tracking_status"><?php echo $userData[0]['tracking_status5'];?></textarea>
                <a href="#" class="btn btn-primary update_status">Add Status</a>
                </td>
           </tr>

            <?php if($userData[0]['step5_status']){?>
            <tr>
                <th>Status:</th>
                <td><span class="statusVal"><?php echo $userData[0]['step5_status'];?></span> 
                <a href="#" class="status_change"  data-step="step5_status" style="display:inline-block; float: right;">
                <?php if($userData[0]['step5_status']=='Active'){  echo 'Review'; }else{echo 'Active';} ?></a>
                <span class="statval" style="visibility: hidden;">
                <?php if($userData[0]['step5_status']=='Active'){ echo 'Review'; }else{echo 'Active'; } ?></span>
                </td>
            </tr>
            <?php }?> 
 </table>
    </div>

    <!-- Step6 -->

<?php if(isset($raisefund_datas)):?>
    <div class="tab-pane" id="tabs-6" role="tabpanel">
       <table style="width:100%;" id="roadmap">
              <tr>
                    <th>#SN</th>
                    <th>Company</th>
                    <th>Status</th>
                    <th colspan="2">Action</th>
                    
             </tr>
            <?php 
                 $i=1; foreach($raisefund_datas as $raisefund_data):
                ?>
              <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $raisefund_data['company'];?></td>
                    <td><?php echo $raisefund_data['status'];?></td>

                
                    <td><a href="#" data-clk="<?php echo $raisefund_data['id'];?>"  class="change_status" data-status="accepted">Accepted</a></td>
               
                    <td><a href="#" data-clk="<?php echo $raisefund_data['id'];?>"  class="change_status" data-status="rejected">Rejected</a></td>
                    
                    
              </tr>
          <?php $i++; endforeach; ?>
         </table>
<table style="width:100%;">
         <tr>
                <th>Add Tracking status:</th>
                <td>
                <textarea rows="5" name="tracking_status6" class="tracking_status"><?php echo $userData[0]['tracking_status6'];?></textarea>
                <a href="#" class="btn btn-primary update_status">Add Status</a>
                </td>
           </tr>

            <?php if($userData[0]['step6_status']){?>
            <tr>
                <th>Status:</th>
                <td><span class="statusVal"><?php echo $userData[0]['step6_status'];?></span> 
                <a href="#" class="status_change"  data-step="step6_status" style="display:inline-block; float: right;">
                <?php if($userData[0]['step6_status']=='Active'){  echo 'Review'; }else{echo 'Active';} ?></a>
                <span class="statval" style="visibility: hidden;">
                <?php if($userData[0]['step6_status']=='Active'){ echo 'Review'; }else{echo 'Active'; } ?></span>
                </td>
            </tr>
            <?php }?> 
 </table>
<?php  endif; ?>
    </div>

<!-- Request Callback -->
    <!-- <div class="tab-pane" id="tabs-7" role="tabpanel">
        <?php 

        //if(isset($callback_datas)): ?>

         <table style="width:100%;" id="roadmap">
              <tr>
                    <th>#SN</th>
                    <th>Call Regarding</th>
                    <th>Name</th>
                    <th>Email id</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    <th>Submit date</th>
                    
             </tr>
            <?php 
                 //$i=1; foreach($callback_datas as $callback_data):
                ?>
              <tr>
                    <td><?php //echo $i;?></td>
                    <td><?php //echo $callback_data['call_regarding'];?></td>
                    <td><?php //echo $callback_data['first_name'].' '.$callback_data['last_name'];?></td>
                    <td><?php //echo $callback_data['email_id'];?></td>
                    <td><?php //echo $callback_data['phone_number'];?></td>
                    <td><?php //echo $callback_data['message'];?></td>
                    <td><?php //echo $callback_data['submit_date'];?></td>
              </tr>
          <?php //$i++; endforeach; ?>
         </table>
     <?php  //endif; ?>
    </div> -->

<div class="tab-pane" id="tabs-8" role="tabpanel">
    <?php if(isset($credit_collecion_datas)): ?>

         <table style="width:100%;" id="roadmap">
              <tr>
                    <th>#SN</th>
                    <!-- <th>Name</th>
                    <th>Email id</th>
                    <th>Phone Number</th> -->
                    <th>Company</th>
                    <th>Amount</th>
                    <th>Submit date</th>
                    
             </tr>
            <?php $i=1; foreach($credit_collecion_datas as $credit_collecion):?>
              <tr>
                    <td><?php echo $i;?></td>
                    
                    <td><?php echo $credit_collecion['company'];?></td>
                    <td><?php echo $credit_collecion['amount'];?></td>
                    <td><?php echo $credit_collecion['submit_date'];?></td>
              </tr>
          <?php $i++; endforeach; ?>
         </table>
     <?php  endif; ?>
     
     
     <div id="my_accordion" class="my-3">
<?php $i=1; foreach($credit_collecion_datas as $credit_collecion):?>
  <div class="card rounded-0">
    <div class="card-header rounded-0" id="heading<?php echo $i; ?>">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
         <?php echo $credit_collecion['question'];?>
        </button>
      </h5>
    </div>

    <div id="collapse<?php echo $i; ?>" class="collapse <?php if($i==1){echo 'show';}?>" aria-labelledby="heading<?php echo $i; ?>" data-parent="#my_accordion">
      <div class="card-body">
        <?php echo $credit_collecion['answer'];?>
      </div>
    </div>
  </div>

<?php $i++; endforeach; ?>  
 
 
</div>

</div>




<!-- Booking -->
    <div class="tab-pane" id="tabs-9" role="tabpanel">
        
        <?php if(isset($booking_datas)): ?>

         <table style="width:100%;" id="roadmap">
              <tr>
                    <th>#SN</th>
                    <th>Mentor</th>
                    <th>Mentor designation</th>
                    <th>Mentoring</th>
                    <th>Booking date</th>
                    <th>Submit date</th>
                    
             </tr>
            <?php 
                 $i=1; foreach($booking_datas as $booking_data):
                ?>
              <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $booking_data['mentor_name'];?></td>
                    <td><?php echo $booking_data['mentor_designation'];?></td>
                    <td><?php echo $booking_data['mentoring'];?></td>
                    <td><?php echo $booking_data['booking_date'];?></td>
                    <td><?php echo $booking_data['submit_date'];?></td>
              </tr>
          <?php $i++; endforeach; ?>
         </table>
     <?php  endif; ?>


    </div>



    <!-- Booking -->
    <div class="tab-pane" id="tabs-10" role="tabpanel">
        
        <?php if(isset($founder_datas)): ?>

         <table style="width:100%;" id="roadmap">
              <tr>
                    <th>#SN</th>
                    <th>Founder's</th>
                    <th>Founder's designation</th>
                    <th>Booking date</th>
                    <th>Submit date</th>
                    
             </tr>
            <?php 
                 $i=1; foreach($founder_datas as $founder_data):
                ?>
              <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $founder_data['founder_name'];?></td>
                    <td><?php echo $founder_data['founder_designation'];?></td>
                    <td><?php echo $founder_data['booking_date'];?></td>
                    <td><?php echo $founder_data['submit_date'];?></td>
              </tr>
          <?php $i++; endforeach; ?>
         </table>
     <?php  endif; ?>


    </div>


</div>

<?php }else{ ?>
<h5>Sorry, No Data Found</h5>
<?php }} ?>


         </div>

      </div>

    </section>

</div>
<script type="text/javascript">

jQuery(function(){
        jQuery(document).on('click','a.status_change',function(e){
            e.preventDefault();
               var  getStatus = jQuery(this).next().text().trim();
               var  getStep = jQuery(this).data('step');

                    $.ajax({
                          type: 'POST',
                          url: "<?php echo base_url();?>/DashboardController/pitchdeck_status",
                          data: {id:'<?php echo $id[2]; ?>', status:getStatus, step:getStep},
                          dataType: "html",
                          success: function(resultData) { 
                          
                            if(resultData=='Active'){
                                jQuery(".statval").text("Review");
                                jQuery("table tr td a.status_change").text('Review');
                                
                            }else{
                                jQuery("table tr td a.status_change").text('Active');
                                jQuery(".statval").text("Active");
                            }
                            jQuery(".statusVal").text(resultData);
                           }
                    });
        });


        
        jQuery(document).on('click','a.update_status',function(e){
             e.preventDefault();
          var tracking_status = jQuery(this).prev().val();
          var tracking_name = jQuery(this).prev().attr('name');

           $.ajax({
                  type: 'POST',
                  url: "<?php echo base_url();?>/DashboardController/update_tracking_status",
                  data: {id:'<?php echo $id[2]; ?>', tracking_status:tracking_status,tracking_name:tracking_name},
                  dataType: "html",
                  success: function(resultData) { 
                  alert(resultData);
                    
                   }
           });

    });


        
        
});

jQuery(document).on('click','a.change_status',function(e){
            e.preventDefault();
            var  getid = jQuery(this).data('clk');
           // alert(getid);
            var  getstatus = jQuery(this).data('status');
           // alert(getstatus);
            
            $.ajax({
                          type: 'POST',
                          url: "<?php echo base_url();?>/DashboardController/raise_funding_status",
                          data: {id:getid,status:getstatus},
                          dataType: "html",
                          success: function(resultData) {  
                          //alert(resultData);
                              //jQuery("a.change_status").parent().prev().text(resultData);

                              if(resultData=='accepted'){
                                //jQuery("a#"+getid).attr('data-status','accepted');
                                jQuery("#accepted").parent().prev().text(resultData);
                              }else{
                                //jQuery("a#"+getid).attr('data-status','rejected');
                                jQuery("#rejected").parent().prev().prev().text(resultData);
                              }

                              location.reload();;
                            
                          }
                    });



           });

        jQuery(function(){
            const queryString = window.location.search;
            var arr = queryString.split('=');
            //console.log(arr[1]);
            //alert(queryString);
            if(queryString){
            jQuery(".tab-pane").removeClass('active');
            jQuery(".nav-tabs li a.nav-link").removeClass('active');
            jQuery(".tab-content #"+arr[1]).addClass('active');
            //jQuery(".nav-tabs li a[href="+queryString+"]").addClass('active');

            $('a[href*="'+arr[1]+'"]').each(function() {
              $(this).addClass('active');
            });
        }
            
        });


$( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 2
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 2
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
       
</script>
  