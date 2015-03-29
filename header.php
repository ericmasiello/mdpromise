<?php
/**
 * Theme Header
 */
?>
<!DOCTYPE html>
<!--[if gt IE 8]><html class="no-js ie9-plus  lte-ie11  lte-ie10  lte-ie9  lte-ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9]><html class="no-js ie9-plus  lte-ie11  lte-ie10  lte-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 10]><html class="no-js ie9-plus  lte-ie11  lte-ie10" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 11]><html class="no-js ie9-plus  lte-ie11" <?php language_attributes(); ?>><![endif]-->
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php echo vp_option( 'vpt_option.site_logo_favicon' ); ?>">
    <script src="<?php echo get_bloginfo('template_directory'); ?>/custom/modernizr.custom.js"></script>
    <?php wp_head(); ?>	
</head>

<body <?php body_class(); ?>>

    <!-- device test, don't remove. javascript needed! -->
    <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
    <!-- device test end -->
    
    <div id="k-functional-wrap">
		<?php 
		// theme's functional navigation
		if( has_nav_menu( 'functional' ) ) : k_navig_functional(); endif;
        ?>
    </div>
    
    <header id="k-head" class="container  site-header"><!-- container + head wrapper -->

        <div class="row  col-padded">
            <h1 class="site-title  col-xs-12  col-sm-4">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <?php bloginfo( 'name' ); ?>
                </a>
                <small class="site-title-tagline sr-only"><?php bloginfo( 'description' ); ?></small>

                <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"></span></a><!-- alternative menu button -->
            </h1>
            <div class="col-xs-12 col-sm-8 end-sm">
                <?php
                    // theme's main navigation
                    if( has_nav_menu( 'primary' ) ) : k_navig_head(); endif;
                ?>
            </div>
        </div>

        <?php /* commenting out search form for now ... */ //include_once "inc/search.php"; ?>
    
    </header><!-- container + head wrapper end -->
    
    <div id="k-body"><!-- content wrapper -->
    
    	<div class="container"><!-- container -->
        
