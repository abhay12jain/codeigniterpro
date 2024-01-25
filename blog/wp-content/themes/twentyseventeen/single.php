<?php get_header();
$feature_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
$author_id = get_the_author_meta($post->ID );
?>


<div class="banner_container position-relative" style="background:url(<?php echo $feature_img1 ; ?>) no-repeat center center; background-size:cover">
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
                <div class="post  mb-4">
                    <h3 class="mb-2 pb-2"><b><?php the_title();?></b></h3>
					<figure>
        
                    <img src="<?php echo $feature_img;?>" class="w-100 " />
					</figure>
                    
 <div class="by-admin">
							<a href="" class="text-decoration-none"><i class="fa fa-clock"></i> <?php echo get_the_date();?></a>
                            <a href="#" class="text-decoration-none"><i class="fa fa-user"></i> <?php echo get_the_author_meta( 'nicename', $author_id ); ?></a>
                        </div>
                    <div class="text-2 mb-5">
						<?php the_content();?>
						
						<?php if(get_field('read_more_link')){?>
						<div class="mt-4">
							Read More: &nbsp;<a class="" href="<?php the_field('read_more_link');?>"><?php the_field('read_more_link');?></a>
						</div>
						<?php }?>
						
						<div class="post_tag mt-4 d-flex flex-wrap text-secondary text-capitalize">
							Tags: 
							<?php
	
$posttags = get_the_tags();
$separator = ' | ';
    $output = '';
if ($posttags) {
  foreach($posttags as $tag) {
     echo  __( $tag->name ) . $separator;
        }
    }
 
?>
						</div>
                    </div>
                    
                    

                    <div class="share-post">
                        <h3 class="mb-2"><i class="fa fa-share"></i> Share this post</h3>
                        <ul class="footer-social">
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" class="text-decoration-none"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/share?text=<?php the_permalink();?>" class="text-decoration-none"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        
                            <li><a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink();?>" class="text-decoration-none"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                            
                        </ul>
                    </div>
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
$cat_name=  $category->name;?>
<?php $terms = get_terms( 'category', array(
    'hide_empty' => false, 'exclude' => array(1),
) );            // print_r($terms);
                foreach ($terms as $ct ) {
                   ?>
 <li class=""> <a href="<?php echo get_category_link($ct->term_id); ?>"><?php  echo $ct->name;  ?></a> </li>
                   <?php
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