<!DOCTYPE html>

<html lang="en">

<head>



    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pratap</title>

    <link href="<?php echo base_url();?>/assets/public/dashboard/css/materialdesignicons.min.css" rel="stylesheet" />

    <link href="<?php echo base_url();?>/assets/public/dashboard/css/vendor.bundle.base.css" rel="stylesheet" />

<link rel="shortcut icon" href="<?php echo base_url();?>/assets/public/dashboard/images/favicon.png" />

    <link href="<?php echo base_url();?>/assets/public/dashboard/css/bootstrap5.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo base_url();?>/assets/public/dashboard/css/style.css">

    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/public/dashboard/images/favicon.png" />

    <link rel="stylesheet" href="<?php echo base_url();?>/assets/public/dashboard/css/jsRapCalendar.css">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

    <!-- <script src="<?php //echo base_url();?>/assets/public/dashboard/js/jsRapCalendar.js"></script> -->


</head>

<body>

    <?php $request = \Config\Services::request();

        $uri = $request->uri;

        $id = $uri->getSegments();

        $query = $uri->getQuery();

    ?>

    <div class="container-scroller">

        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">

                <a class="navbar-brand brand-logo" href="<?php echo base_url(); ?>/admin/dashboard">

                    <img src="<?php echo base_url();?>/assets/public/dashboard/images/logo.png" height="110px" class="w-auto"/>

                </a>

                <a class="navbar-brand brand-logo-mini" href="<?php echo base_url(); ?>">

                    <img src="<?php echo base_url();?>/assets/public/dashboard/images/sidelogo.png" alt="logo" />

                </a>

            </div>

            <div class="navbar-menu-wrapper d-flex align-items-stretch  shadow-sm">

                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">



                    <img src="<?php echo base_url();?>/assets/public/dashboard/images/side-menu.png" />

                </button>

                <div class="search-field d-none d-md-block">

                    <div class="d-flex align-items-center mx-auto h-100" action="#">



                    </div>

                </div>

                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item">

                        <div class="nav-profile-text border-end2">

                            <img src="<?php echo base_url();?>/assets/public/images/prtap-ban.jpeg" class="img-fluid">

                        </div>

                    </li>

                    <li class="nav-item nav-profile dropdown">

                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="<?php echo base_url(); ?>/user_profile" data-bs-toggle="dropdown" aria-expanded="false">

                            <div class="nav-profile-img">

                                <img src="<?php echo base_url();?>/assets/public/dashboard/images/u_img.png" alt="image" />

                                <span class="availability-status online"></span>

                            </div>

                            <div class="nav-profile-text">

                                <?php $Firstname = session()->get('first_name');
                                      $Lastname = session()->get('last_name');

                                      if($Firstname || $Lastname){
                                 ?>

                                <p class="mb-1 text-black"><?php echo $Firstname .' '.$Lastname; ?></p>
                            <?php } else{?>
                                <p class="mb-1 text-black"><?php echo 'Welcome, User'; ?></p>
                            <?php }?>

                            </div>

                        </a>

                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">

                           <!--  <a class="dropdown-item" href="#">

                                <i class="mdi mdi-cached me-2 text-success"></i> Activity Log

                            </a> -->

                           

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="<?php echo base_url(); ?>/user/dashboard/user_profile">

                                <i class="mdi mdi-account-edit me-2 text-primary"></i> Update Profile

                            </a>

                            

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="<?php echo base_url(); ?>/user/dashboard/change_password">

                                <i class="mdi mdi-textbox-password me-2 text-primary"></i> Change Password

                            </a>

                             <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="<?php echo base_url(); ?>/logout">

                                <i class="mdi mdi-logout me-2 text-primary"></i> Signout

                            </a>



                        </div>

                    </li>

                </ul>

                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">

                    <img src="<?php echo base_url();?>/assets/public/dashboard/images/side-menu.png">

                </button>

            </div>
        </nav>

        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

            <!-- partial:partials/_sidebar.html -->

            <nav class="sidebar sidebar-offcanvas" id="sidebar">

                <ul class="nav">

                    <li class="nav-item">

                        <a class="nav-link" href="<?php echo base_url();?>/admin/dashboard">

                        <img src="<?php echo base_url();?>/assets/public/dashboard/images/dash-board.png" class="img-fluid" />

                            <span class="menu-title">Dashboard</span>

                        </a>

                    </li>
                
                <?php if($_SESSION['role']=='tender_creater'){?>

                  <li class="nav-item drop-down">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#extend-collapse1" aria-expanded="true">
                          <img src="<?php echo base_url();?>/assets/public/dashboard/images/dash-board.png" class="img-fluid" />
                           <span class="menu-title">Tenders<i class="fas fa-chevron-down ps-5"></i></span>
                        </a>

                        <div class="collapse" id="extend-collapse1">
                          <ul class="nav">
                              <li class="nav-item"><a href="<?php echo base_url();?>/admin/tender_data" class="nav-link"><span>Add Tenders</span></a></li>
                              <li class="nav-item"><a href="<?php echo base_url();?>/admin/tender_show" class="nav-link"><span>All Tenders</span></a></li>
                              </ul>
                        </div>
                    </li>



                <?php } else if(trim($_SESSION['role'])=='tender_approver' || trim($_SESSION['role'])=='Document_Checker' || trim($_SESSION['role'])=='document_approver' || trim($_SESSION['role'])=='rfp_extractor'){?>
                    <li class="nav-item drop-down">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#extend-collapse1" aria-expanded="true">
                          <img src="<?php echo base_url();?>/assets/public/dashboard/images/dash-board.png" class="img-fluid" />
                           <span class="menu-title">Tenders<i class="fas fa-chevron-down ps-5"></i></span>
                        </a>

                        <div class="collapse" id="extend-collapse1">
                          <ul class="nav">
                              <li class="nav-item"><a href="<?php echo base_url();?>/admin/tender_show" class="nav-link"><span>All Tenders</span></a></li>
                              </ul>
                        </div>
                    </li>
                <?php } else if(trim($_SESSION['role'])=='Technical' || trim($_SESSION['role'])=='Financial' || trim($_SESSION['role'])=='Common Document' || trim($_SESSION['role'])=='One time Document' || trim($_SESSION['role'])=='price_maker'){?>

                    <li class="nav-item drop-down">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#extend-collapse1" aria-expanded="true">
                          <img src="<?php echo base_url();?>/assets/public/dashboard/images/dash-board.png" class="img-fluid" />
                           <span class="menu-title">Tenders<i class="fas fa-chevron-down ps-5"></i></span>
                        </a>

                        <div class="collapse" id="extend-collapse1">
                          <ul class="nav">
                              <li class="nav-item"><a href="<?php echo base_url();?>/admin/tender_show" class="nav-link"><span>All Tenders</span></a></li>
                              </ul>
                        </div>
                    </li>




                 <?php }else{?>
                    <li class="nav-item drop-down">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#extend-collapse" aria-expanded="true">
                          <img src="<?php echo base_url();?>/assets/public/dashboard/images/tender.png" class="img-fluid" />
                           <span class="menu-title">Tenders <i class="fas fa-chevron-down ps-5"></i></span>
                        </a>

                        <div class="collapse" id="extend-collapse" style="">
                          <ul class="nav">
                              <li class="nav-item"><a href="<?php echo base_url();?>/admin/tender_show" class="nav-link"><span>All Tenders</span></a></li>
                              <li class="nav-item"><a href="<?php echo base_url();?>/admin/tender_data" class="nav-link"><span>Add Tenders</span></a></li>
                              <li class="nav-item"><a href="<?php echo base_url();?>/admin/tender_approve" class="nav-link"><span> Tenders Assign User</span></a></li>
                              <li class="nav-item"><a href="<?php echo base_url();?>/admin/show_document" class="nav-link"><span> Document Upload</span></a></li>

                              <li class="nav-item"><a href="<?php echo base_url();?>/admin/document_tender" class="nav-link"><span> Document Pending approvals</span></a></li>
                              <li class="nav-item"><a href="<?php echo base_url();?>/admin/price_maker" class="nav-link"><span> Price maker</span></a></li>
                              <li class="nav-item"><a href="<?php echo base_url();?>/admin/price_checker" class="nav-link"><span> Price checker</span></a></li>

                              <li class="nav-item"><a href="<?php echo base_url();?>/admin/rfp" class="nav-link"><span> RFP Extractor </span></a></li>
                              
                          </ul>
                        </div>
                    </li>

                    <li class="nav-item drop-down">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#extend-collapse1" aria-expanded="true">
                          <img src="<?php echo base_url();?>/assets/public/dashboard/images/upload-doc.png" class="img-fluid" />
                           <span class="menu-title">Master <i class="fas fa-chevron-down ps-5"></i></span>
                        </a>

                        <div class="collapse" id="extend-collapse1" style="">
                          <ul class="nav">
                              <li class="nav-item"><a href="<?php echo base_url();?>/admin/show_division" class="nav-link"><span>Add Company</span></a></li>

                              <li class="nav-item"><a href="<?php echo base_url();?>/admin/show_product" class="nav-link"><span>Product Category</span></a></li>

                              <li class="nav-item"><a href="<?php echo base_url();?>/admin/show_company" class="nav-link"><span>Add Organization</span></a></li>

                              <li class="nav-item"><a href="<?php echo base_url();?>/admin/show_circle" class="nav-link"><span>Add Circle</span></a></li>

                              </ul>
                        </div>
                    </li>

<?php } ?>
                    


                </ul>

            </nav>



            <!-- partial -->

    <div class="main-panel">

     <div class="content-wrapper">

                    



