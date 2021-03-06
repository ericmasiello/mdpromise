<?php
/**
 * Theme's generic Archive page
 */
?>

<?php
// print site header
get_header();
?>

<?php
// sidebar
$sidebar_class = '';
$sidebar_pos = vp_option( 'vpt_option.sidebar_position' );
if( $sidebar_pos == 'left' ) $sidebar_class = ' col-lg-push-4 col-md-push-4';
?>

	<div class="row no-gutter"><!-- row -->

		<div class="col-lg-8 col-md-8<?php echo $sidebar_class; ?>"><!-- doc body wrapper -->
		
			<div class="col-padded"><!-- inner custom column -->
			
            	<div class="row gutter"><!-- row -->
                
                	<div class="col-lg-12 col-md-12">
            
                    	<h1 class="title-widget">
	                        <?php
	                        if( is_day() ) : printf( __( 'Daily Archives: %s', 'kazaz' ), get_the_date() );
	                        elseif( is_month() ) : printf( __( 'Monthly Archives: %s', 'kazaz' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'kazaz' ) ) );
	                        elseif( is_year() ) : printf( __( 'Yearly Archives: %s', 'kazaz' ), get_the_date( _x( 'Y', 'yearly archives date format', 'kazaz' ) ) );
	                        else : _e( 'Archives', 'kazaz' );
	                        endif;
	                        ?>
                    	</h1>
                    
                    </div>
                
                </div><!-- row end -->
				
				<?php if( have_posts() ) : ?>
					
					<div class="row gutter"><!-- row -->
					
					<?php
					// main loop start
					while( have_posts() ) : the_post();
						// include template for different post formats correspondingly
						get_template_part( 'content', get_post_format() );
					endwhile;
					?>
					
					</div><!-- row end -->
					
				<?php k_pagination(); // pagination ?>
						
				<?php else : ?>
				
					<div class="row gutter"><!-- row -->
				
					<?php get_template_part( 'content', 'none' ); ?>
				
					</div><!-- row end -->

				<?php endif; ?>
				
			</div><!-- inner custom column end -->
			
		</div><!-- doc body wrapper end -->
			
		<?php
		// print sidebar wrappers - open
		k_sidebar_head();
		
		// print sidebar content
		get_template_part( 'sidebars/sidebar-archive' );
		
		// print sidebar wrappers - close
		k_sidebar_foot();
		?>
		
	</div><!-- row end -->

<?php
// print site footer
get_footer();
?>