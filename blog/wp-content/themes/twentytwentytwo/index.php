<?php
// There is nothing output here because block themes do not use php templates.
// There is a core ticket discussing removing this requirement for block themes:
// https://core.trac.wordpress.org/ticket/54272.

$feature_img1 = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
get_header();?>

<div class="banner_container position-relative" style="background:url(<?php echo $feature_img1; ?>) no-repeat center center; background-size:cover">
    <div class="container">
        <div class="py-5 text-center text-white"  data-aos="fade-up">
            <h1>Blogs</h1>
        </div>
    </div>
</div>

 <div class="blog-page py-5">

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php 
						if (have_posts()) :  
						while (have_posts()) : the_post();						
					
									$featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');		
						
$author_id = get_the_author_meta( 'ID' );
					?>
                <div class="post  mb-4">
                    <h3 class="mb-2 pb-2"><b><a href="#" class="text-decoration-none text-dark">How Financial Valuation Makes A Start-Up Investor Ready?</a></b></h3>
					
                    <img src="<?php echo $featured_image[0];?>" class="img-thumb mb-4" />
                    
 <div class="by-admin">
							<a href="" class="text-decoration-none"><i class="fa fa-clock"></i> <?php echo get_the_date();?></a>
                            <a href="#" class="text-decoration-none"><i class="fa fa-user"></i> <?php echo get_the_author_meta( 'nicename', $author_id ); ?></a>
                        </div>
                    <div class="text-2 mb-5">
						
                        <p>
                           <?php echo wp_trim_words(get_the_excerpt(), 25, '...');?>  </p>
						<a href="<?php the_permalink();?>" class="read_btn btn-primary2 btn-16 mt-4  text-decoration-none">Read More</a>
                    </div>
                </div>
                <?php endwhile; endif;?>
                
            </div>
            

                <div class="col-lg-4">
                    <div class="side-bar">
                        <div class="mt-3 mb-3">
                            <h3 class="blg-head">BLOG CATEGORIES</h3>
                            <ul>
                                <?php 
$category = get_queried_object();
$cat_name=  $category->name;?>
<?php $terms = get_terms( 'category', array(
    'hide_empty' => false, 'exclude' => array(1),
) );            // print_r($terms);
                foreach ($terms as $ct ) {
                   ?>
 <li class=""> <a href="<?php echo get_category_link($ct->term_id); ?>"><?php  echo $ct->name;  ?></a> </li>
                   <?php
                }

                ?><
			  
              </ul>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<?php get_footer();?>