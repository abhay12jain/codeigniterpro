<div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" data-aos="fade-up">
                    <h5>About Pitch N Grow</h5>
                    <p>India’s 1st SAAS to make founders ready for a startup journey.
                    </p>
                    <a href="mailto:info@pitchngrow.com"><i class="far fa-envelope" aria-hidden="true"></i> info@pitchngrow.com</a>
                </div>
                
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" data-aos="fade-up">
                    <h5>Useful links</h5>
                    <ul>
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li><a href="<?php echo base_url();?>/about-us">About</a></li>
                        
                        <li><a href="#">Pricing</a></li>
                        <li><a href="/video-pitch">Video Pitch</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" data-aos="fade-up">
                    <h5>Other Links</h5>
                    <ul>
                        
                        
                        <li><a href="<?php echo base_url();?>/blog">Blogs</a></li>
                        <li><a href="<?php echo base_url();?>/contact-us">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center bg-blue p-3" >
        <span class="text-white">@ 2022 Pitch N Grow. All Rights Reserved</span>
    </div>
<!-- <script src="<?php echo base_url();?>/assets/public/js/JavaScript.js"></script> -->
    <script src="<?php echo base_url();?>/assets/public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/public/js/slick.min.js"></script>
    <script src="<?php echo base_url();?>/assets/public/js/aos.js"></script>
    <script src="<?php echo base_url();?>/assets/public/js/custom.js"></script>
    <script src="<?php echo base_url();?>/assets/public/js/fontawesome5.js"></script>
    <script src="<?php echo base_url();?>/assets/public/js/progresscircle.js"></script>
    <script src="<?php echo base_url();?>/assets/public/js/waypoint.js"></script>
    



    <script>




    function isIntoView(elem)
{
    var documentViewTop = jQuery(window).scrollTop();
    var documentViewBottom = documentViewTop + jQuery(window).height();

    var elementTop = jQuery(elem).offset().top;
    var elementBottom = elementTop + jQuery(elem).height();

    return ((elementBottom <= documentViewBottom) && (elementTop >= documentViewTop));
}/*
 jQuery(window).one('scroll',function(){
   if (isIntoView(jQuery('.progress_list'))){*/
        jQuery('.circlechart').circlechart(); // Initialization
    /*  
   }
   return false;
 });*/
    </script>
    <script>
         AOS.init({
               duration: 2000, 
  easing: 'ease',disable: function() {
    var maxWidth = 767;
    return window.innerWidth < maxWidth;
  }
            } );
    </script>
    
</body>
</html>