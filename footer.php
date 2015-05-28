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

        	            <p>
        	                <a href="tel:<?php echo vp_option( 'vpt_option.contact_phone_1' ); ?>">(Phone) <?php echo vp_option( 'vpt_option.contact_phone_1' ); ?></a> or
                            <a href="mailto:<?php echo get_option( 'admin_email' ); ?>"><?php echo get_option( 'admin_email' ); ?></a>
                        </p>

                        <?php if( vp_option( 'vpt_option.footer_logo_1' ) || vp_option( 'vpt_option.footer_logo_2' ) ) : ?>
                        <p>
                            <?php if( vp_option( 'vpt_option.footer_logo_1' ) ): ?>

                                <object
                                   type="image/svg+xml"
                                   height="70"
                                   width="150"
                                   data="<?php echo vp_option( 'vpt_option.footer_logo_1' ); ?>"
                                   class="footer-logo  footer-logo-1"
                                   alt="<?php echo vp_option( 'vpt_option.footer_logo_1_text' ); ?>">
                                   <img src="<?php echo vp_option( 'vpt_option.footer_logo_1' ); ?>" alt="<?php echo vp_option( 'vpt_option.footer_logo_1_text' ); ?>" class="footer-logo  footer-logo-1" />
                                </object>

                            <?php endif; ?>
                            <?php if( vp_option( 'vpt_option.footer_logo_2' ) ): ?>
                                <object
                                   type="image/svg+xml"
                                   height="70"
                                   width="150"
                                   data="<?php echo vp_option( 'vpt_option.footer_logo_2' ); ?>"
                                   class="footer-logo  footer-logo-2"
                                   alt="<?php echo vp_option( 'vpt_option.footer_logo_2_text' ); ?>">
                                   <img src="<?php echo vp_option( 'vpt_option.footer_logo_2' ); ?>" alt="<?php echo vp_option( 'vpt_option.footer_logo_2_text' ); ?>" class="footer-logo  footer-logo-2" />
                                </object>
                            <?php endif; ?>
                        </p>
                        <?php endif; ?>

        	            <p><?php bloginfo( 'name' ); ?>: <?php bloginfo( 'description' ); ?></p>



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