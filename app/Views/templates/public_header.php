<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <?php if(!empty($page_datas)){?>
    <title><?php echo $page_datas['meta_title']; ?>  - Easy To Pitch</title>
<?php }else{?>
<title>Easy To Pitch</title>
<?php } ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="shortcut icon" href="<?php echo base_url();?>/assets/public/dashboard/images/favicon.png" />
<!--    <link href="<?php echo base_url();?>/assets/public/css/bootstrap5.min.css" rel="stylesheet" />-->
    <link href="<?php echo base_url();?>/assets/public/css/cutom.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/assets/public/css/slick.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/assets/public/css/slick.theame.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/assets/public/css/aos.css" rel="stylesheet" />

</head>
<body>
    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-6">
                    <a href="mailto:info@pitchngrow.com" class="pe-3"><i class="far fa-envelope"></i> info@pitchngrow.com</a>
                    <a href="tel:18003099044" class="phone"><i class="fas fa-phone"></i> 1800-309-9044</a>
                </div>
                <div class="col-md-6 col-6">
                    <ul class="social_icon">
                        <li><a href="https://www.facebook.com/pitchngrow" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/pitchngrow" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/pitchngrow/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/pitchngrow/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="menu_main">
        <div class="container">
            <div class="row">
                <nav class="navbar py-0 navbar-expand-sm navbar-light">
                    <a class="navbar-brand py-2" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>/assets/public/images/logo.png" class="img-fluid"  width="80px"/></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>/about-us">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>/video-pitch">Video Pitch</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="<?php //echo base_url();?>/service">Our Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php //echo base_url();?>/get-funded">Funded</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>/blog">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>/contact-us">Contact Us</a>
                            </li>
                        </ul>
                        <form class="d-flex ps-2">
                            <a href="<?php echo base_url(); ?>/signin" class="sign_btn">Sign In</a>
                        </form>
                    </div>
                </nav>

            </div>
        </div>
    </div>