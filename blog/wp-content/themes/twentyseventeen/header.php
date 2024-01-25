<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

    <script src="https://millclient.com/projects/etp/assets/public/js/fontawesome5.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-6">
                    <a href="mailto:info@pitchngrow.com" class="pe-3"><i class="far fa-envelope"></i> info@pitchngrow.com</a>
                    <a href="tel:18003099044" class="phone"><i class="fas fa-phone"></i> 18003099044</a>
                </div>
                <div class="col-md-6 col-6">
                    <ul class="social_icon">
                        <li><a href="https://www.facebook.com/easytopitch" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/easytopitch" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/easytopitch/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/easytopitch/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="menu_main">
        <div class="container">
            <div class="row">
                <nav class="navbar py-0 navbar-expand-sm navbar-light">
                    <a class="navbar-brand py-2" href="https://millclient.com/projects/etp"><img src="<?php echo home_url();?>/wp-content/uploads/2022/07/logo-2.png" class="img-fluid"  width="80px"/></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                        <?php wp_nav_menu(array('menu'=>'Main Menu', 'menu_class'=>'navbar-nav ms-auto'));?>
                        <form class="d-flex ps-2">
                            <a href="https://millclient.com/projects/etp/signin" class="sign_btn">Sign In</a>
                        </form>
                    </div>
                </nav>

            </div>
        </div>
    </div>

	