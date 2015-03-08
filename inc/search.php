<div class="row"><!-- row -->

    <div id="k-top-search" class="col-lg-12 clearfix"><!-- top search -->

        <form action="<?php echo esc_url( home_url( '/' ) ); ?>" id="top-searchform" method="get" role="search">
            <div class="input-group">
                <input type="text" name="s" id="site-search" class="form-control" autocomplete="off" placeholder="<?php _e( 'Type in keyword(s) then hit Enter on keyboard', 'kazaz' ); ?>" />
            </div>
        </form>

        <div id="bt-toggle-search" class="search-icon text-center"><i class="s-open fa fa-search"></i><i class="s-close fa fa-times"></i></div><!-- toggle search button -->

    </div><!-- top search end -->

    <div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->

        <?php
        // k_breadcrumbs(); // old breadcrumbs
        $bread_args = array( 'container' => 'div', 'separator' => ' &nbsp;|&nbsp; ', 'before' => '', 'after' => '', 'show_on_front' => false, 'network' => false, 'show_title' => true, 'show_browse' => false, 'echo' => true );
        if( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail( $bread_args );
        ?>

    </div><!-- breadcrumbs end -->

</div><!-- row end -->