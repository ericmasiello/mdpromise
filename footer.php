<?php
/**
 * Theme Footer
 */
?>

        </div><!-- container end -->
    
    </div><!-- content wrapper end -->


    <footer id="k-subfooter" class="site-footer  text-center" role="contentinfo"><!-- subfooter -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->

        	    <div class="col-xs-12">

        	        <div class="col-padded">

        	            <p><?php bloginfo( 'name' ); ?>: <?php bloginfo( 'description' ); ?></p>

        	            <p>Phone: <a href="tel:<?php echo vp_option( 'vpt_option.contact_phone_1' ); ?>"><?php echo vp_option( 'vpt_option.contact_phone_1' ); ?></a> or

        	            <a href="mailto:<?php echo get_option( 'admin_email' ); ?>"><?php echo get_option( 'admin_email' ); ?></a></p>

                        <p class="copy-text"><?php echo vp_option( 'vpt_option.theme_copyright' ); ?></p>

                        <?php
                            // theme's functional navigation
                            if( has_nav_menu( 'footer' ) ) : k_navig_footer(); endif;
                        ?>

                    </div>
        	    </div>
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </footer><!-- subfooter end -->
    
	<?php wp_footer(); ?>
    
    <?php k_google_analytics(); ?>
    
  </body>
  
</html>