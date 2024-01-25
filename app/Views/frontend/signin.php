<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SignIn - TMS</title>

    <link href="<?php echo base_url(); ?>/assets/public/css/bootstrap5.min.css" rel="stylesheet" />

    <link href="<?php echo base_url(); ?>/assets/public/css/cutom.css" rel="stylesheet" />

</head>

<body>



<main class="auth">
        <div class="container-fluid">
            <div class="row vh-100">
                <div class="col-md-7 text-center py-5 d-flex flex-column justify-content-center auth-bg-section text-white">
                  
                </div>
                <div class="col-md-5 text-center d-flex flex-column py-5 justify-content-center">
                    <div class="auth-form-section">
                        <div class="logo">
                            <img src="<?php echo base_url(); ?>/assets/public/dashboard/images/logo.png" alt="" class="img-fluid " width="200">
                        </div>
                        <h3 class="sky_text fw-bold">Sign-In</h3>
                            <?php if(session()->getFlashdata('msg')):?>

                        <div class="alert alert-warning">
                           <?= session()->getFlashdata('msg') ?>
                        </div>
                          <?php endif;?>


                        <form method="post" action="<?php echo base_url(); ?>/Usersignin/loginAuthfront" class="auth-form">

                              <div class="form-group">
                               <input name="email_id" type="email" class="form-control mb-4"  placeholder="Your email" value="<?php echo set_value('email_id'); ?>">

                              </div>

                              <div class="form-group">
                                  <input name="password" type="password" class="form-control" placeholder="Your password">



                                    </div>



                                   

                                    <input type="submit" class="common_btn mt-4" value="Submit"> 

                           </form>
                    </div>
                </div>
            </div>
        </div>
    </main>






















       

    <script src="<?php echo base_url(); ?>/assets/public/js/JavaScript.js"></script>

    <script src="<?php echo base_url(); ?>/assets/public/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>/assets/public/js/fontawesome5.js"></script>

</body>

</html>