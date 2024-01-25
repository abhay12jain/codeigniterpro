<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

$feature_img1 = wp_get_attachment_url(get_post_thumbnail_id('12'));
get_header();?>

<div class="banner_container position-relative" style="background:url(<?php echo $feature_img1; ?>) no-repeat center center; background-size:cover">
    <div class="container">
        <div class="py-5 text-center text-white"  data-aos="fade-up">
            <h1>Page Not Found</h1>
        </div>
    </div>
</div>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found text-center py-5">
				<header class="page-header container">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyseventeen' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. ', 'twentyseventeen' ); ?></p>

					<?php //get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
