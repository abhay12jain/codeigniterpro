<?php

$feature_img1 = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
get_header();?>
<?php
$cat = get_queried_object();
//print_r($cat);
?>

<div class="banner_container position-relative" style="background:url(<?php echo $feature_img1; ?>) no-repeat center center; background-size:cover">
    <div class="container">
        <div class="py-5 text-center text-white"  data-aos="fade-up">
            <?php if(is_category() || is_tag()){?>
            <h1 class="text-capitalize"><?php echo $cat->name;?></h1>
            <?php } else{?>
            <h1>Blogs</h1>
            <?php } ?>
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
                    <h3 class="mb-2 pb-2"><b><a href="<?php the_permalink();?>" class="text-decoration-none text-dark"><?php the_title();?></a></b></h3>
					
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
                
						<div class="pagination text-center">
							<?php   the_posts_pagination(array(
    'mid_size'  => 5,'screen_reader_text' => '',  'before_page_number' => '',
    'prev_text' => __( 'PRE', 'textdomain' ),
    'next_text' => __( 'NEXT', 'textdomain' ),
) );         ?>
						</div>
            </div>
            

                <div class="col-lg-4">
                    <div class="side-bar ">
						
                <section id="search-3" class="widget widget_search mb-4">
                    <form role="search" method="get" id="blog-searchform" class="searchform" action="<?php bloginfo('url');?>">
                <div>
                    <input class="blog-search-field" type="text" placeholder="Search" value="" name="s" id="s" required />
                                <input type="hidden" name="post_type" value="post">
                
                    <input class="search-btn" type="submit" value="" />
                </div>
            </form></section>
                        <div class="mt-3 mb-3">
                            <h3 class="blg-head">BLOG CATEGORIES</h3>
                            <ul>
                                <?php 
$category = get_queried_object();
///$cat_name=  $category->name;?>
<?php $terms = get_terms( 'category', array(
    'hide_empty' => true, 'exclude' => array(1),
) );            // print_r($terms);
if($terms){
                foreach ($terms as $ct ) {
                   if(!empty($ct->name)){ 
                   ?>
 <li class=""> <a href="<?php echo get_category_link($ct->term_id); ?>"><?php  echo $ct->name;  ?></a> </li>
                   <?php
                }}
}
                ?>
			  
              </ul>
                        </div>
						<?php
						$tags = get_tags();
$html = '<div class="post_tags">';
$html .= "<h3 class='blg-head w-100'>Tags</h3>";						
foreach ( $tags as $tag ) {
    $tag_link = get_tag_link( $tag->term_id );
             
    $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
    $html .= "{$tag->name}</a>";
}
$html .= '</div>';
echo $html;?>
                    </div>
                </div>
        </div>
    </div>
</div>
<?php get_footer();?>