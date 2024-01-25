<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Pitch n Grow</title>
    <link href="<?php echo base_url(); ?>/assets/public/css/bootstrap5.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/public/css/cutom.css" rel="stylesheet" />
</head>
<body>
<div class="signup_page py-5">
        <header class="mb-5">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="logo_box">
                        <a href="<?php echo base_url(); ?>"><img width="80px" src="<?php echo base_url(); ?>/assets/public/images/logo.png" alt=""></a>
                    </div>
                    <div class="account_box">Don't have an account? <a href="<?php echo base_url();?>/signin" class="common_btn ms-3">Sign in</a></div>
                </div>
            </div>
        </header>
        <div class="content_sec pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                    <h2 class="mb-4 blue_text">One stop solutions for all<br> your startup related needs.</h2>
                        <figure><img src="<?php echo base_url(); ?>/assets/public/images/signin_banner.jpg" alt="" class="w-100"></figure>
                    </div>
                    <div class="col-lg-5">
                        <h3 class="sky_text fw-bold">Forgot Password</h3>
                        <p>See all growth and get funding support.</p>

               <?php 
            if(isset($validation)): ?>
            <div class="alert alert-danger">
            <?= $validation->listErrors()?>
            </div>
            <?php endif;?>

            <?php if(session()->getFlashdata('error')):?>
    <div class='alert alert-danger'><?= session()->getFlashdata('error');?></div>
    <?php endif;?>
        
        
            
            <?php if(isset($validation)):?>
            <div class='alert alert-danger'><?php echo $validation->listErrors(); ?></div>
            <?php endif;?>
            
            <?php if(session()->getFlashdata('success')): ?>
                <div class='alert alert-success'><?php echo session()->getFlashdata('success') ;?></div>
            <?php endif; ?>
                
            <?php if(session()->getFlashdata('error')): ?>
               <div class='alert alert-danger'><?php echo  session()->getFlashdata('error') ;?></div>
            <?php endif; ?>

                <?php if(!session()->getFlashdata('success')){?>
                       <form method="post" action="<?php echo base_url(); ?>/Usersignin/forgot_password">
                            <div class="form-group mb-3 shadow-sm">
                            <input name="email_id" type="email" class="form-control  py-2 border-0"  placeholder="Enter Your email">
                            </div>
                            <input type="submit" class="d-block text-white  w-100 fw-bold gradient_bg common_btn" value="Submit">
                            <p class="py-2 fw-bold text-end">Do you want to Login? <a href="<?php echo base_url();?>/signin"> Login</a></p>
                        </form>
                <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>/assets/public/js/JavaScript.js"></script>
    <script src="<?php echo base_url(); ?>/assets/public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/public/js/fontawesome5.js"></script>
</body>
</html>