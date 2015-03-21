<?php
/**
 * Theme Footer
 */
?>

        </div><!-- container end -->
    
    </div><!-- content wrapper end -->

    <?php if( function_exists( 'dynamic_sidebar' ) && ( dynamic_sidebar( __( 'Footer Column Left', 'kazaz' ) ) || dynamic_sidebar( __( 'Footer Column Middle', 'kazaz' ) ) || dynamic_sidebar( __( 'Footer Column Right', 'kazaz' ) ) ) ) : ?>
        <div id="k-footer"><!-- footer -->

            <div class="container"><!-- container -->

                <div class="row no-gutter"><!-- row -->

                    <div class="col-lg-4 col-md-4"><!-- widgets column left -->

                        <div class="col-padded col-naked">

                            <ul class="list-unstyled clear-margins"><!-- widgets -->

                                <?php if( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( __( 'Footer Column Left', 'kazaz' ) ) ) : ?><?php endif; ?>

                            </ul><!-- widgets end -->

                        </div>

                    </div><!-- widgets column left end -->

                    <div class="col-lg-4 col-md-4"><!-- widgets column center -->

                        <div class="col-padded col-naked">

                            <ul class="list-unstyled clear-margins"><!-- widgets -->

                                <?php if( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( __( 'Footer Column Middle', 'kazaz' ) ) ) : ?><?php endif; ?>

                            </ul>

                        </div>

                    </div><!-- widgets column center end -->

                    <div class="col-lg-4 col-md-4"><!-- widgets column right -->

                        <div class="col-padded col-naked">

                            <ul class="list-unstyled clear-margins"><!-- widgets -->

                                <?php if( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( __( 'Footer Column Right', 'kazaz' ) ) ) : ?><?php endif; ?>

                            </ul>

                        </div>

                    </div><!-- widgets column right end -->

                </div><!-- row end -->

            </div><!-- container end -->

        </div><!-- footer end -->
    <?php endif; ?>
    
    <footer id="k-subfooter" class="site-footer  text-center"><!-- subfooter -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->

        	    <div class="col-xs-12">

        	        <div class="col-padded">

        	            <p><?php bloginfo( 'name' ); ?>: <?php bloginfo( 'description' ); ?></p>

        	            <p>Phone: <a href="tel:<?php echo vp_option( 'vpt_option.contact_phone_1' ); ?>"><?php echo vp_option( 'vpt_option.contact_phone_1' ); ?></a> or <a href="mailto:<?php echo vp_option( 'vpt_option.contact_email' ); ?>"><?php echo vp_option( 'vpt_option.contact_email' ); ?></a></p>

                        <p class="copy-text"><?php echo vp_option( 'vpt_option.theme_copyright' ); ?></p>

                    </div>
        	    </div>
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </footer><!-- subfooter end -->
    
	<?php wp_footer(); ?>
    
    <?php k_google_analytics(); ?>
    
  </body>
  
</html>