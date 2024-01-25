<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
            <h1>Search Results</h1>
        </div>
    </div>
</div>

<div class="wrap">

	<header class="page-header pt-5 pb-4">
		<div class="container">
			
		<?php if ( have_posts() ) : ?>
			<h1 class="page-title">
			<?php
			/* translators: Search query. */
			printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' );
			?>
			</h1>
		<?php else : ?>
			<h1 class="page-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
		<?php endif; ?>
			
		</div>
	</header><!-- .page-header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main search_result pb-5">
<div class="container">
	
		<?php
		if ( have_posts() ) :
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				$featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');		
						
$author_id = get_the_author_meta( 'ID' );
					?>
			<div class="single_item">
				<h4 class="mb-3 "><a href="<?php the_permalink();?>" class="text-dark"><?php the_title();?></a></h4>
				<p class="mb_3"><?php echo wp_trim_words(get_the_excerpt(), 30, '...');?></p>
				<a href="<?php the_permalink();?>" class="read_btn btn-primary2 btn-16">Read More </a>
			</div><?php
			endwhile; // End the loop.

		?>
	
						<div class="pagination text-center">
							<?php   the_posts_pagination(array(
    'mid_size'  => 5,'screen_reader_text' => '',  'before_page_number' => '',
    'prev_text' => __( 'PRE', 'textdomain' ),
    'next_text' => __( 'NEXT', 'textdomain' ),
) );         ?>
						</div>
	<?php 

		else :
			?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></p>
			<?php
			//	get_search_form();

		endif;
		?>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
