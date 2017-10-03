<!DOCTYPE html> 
<html lang="en" style="height:100%;">
    <head> 
        <meta charset="utf-8"> 

    	<title>
        	<?php
	    	global $page, $paged;
	    	wp_title( '|', true, 'right' );
	    	bloginfo( 'name' );
	    	$site_description = get_bloginfo( 'description', 'display' );
	    	if ( $site_description && ( is_home() || is_front_page() ) )
		    echo " | $site_description";
	    	if ( $paged >= 2 || $page >= 2 )
		    	echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
	    	?>
		</title>

        <?php wp_head(); ?>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="keywords" content=", blocks, bootstrap" />
        <meta name="description" content="My new website" />
        <link rel="shortcut icon" href="ico/favicon.png"> 

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
        <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->         
    </head>     
    <body data-spy="scroll" data-target="nav">
        <header id="header-1" class="soft-scroll header-1">
            <!-- Navbar -->
            <nav class="main-nav navbar-fixed-top headroom headroom--pinned red header-background">
                <div class="container">
                    <!-- Brand and toggle -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#">
                            <!-- <img src="http://helpingeagles.com/wp-content/uploads/2017/09/HCClogo.png" class="brand-img img-responsive"> -->
                        </a>
                    </div>
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse">
                    <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'primary',
                            'container'         => false,
                            'menu_class'        => 'nav navbar-nav navbar-right'
                        ));
                        ?>

                        <!--//nav-->
                    </div>
                    <!--// End Navigation -->
                </div>
                <!--// End Container -->
            </nav>
            <!--// End Navbar -->
        </header>

        <section id="promo-3" class="content-block promo-3 bg-deepocean min-height-400px" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assests/images/main-image.jpg')">
            <div class="container text-center">
                <div class="row">
			<div id="logo">
			<a href="<?php echo get_settings('home'); ?>/">
			<?php
                    	$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			if ( has_custom_logo() ) {
			        echo '<img src="'. esc_url( $logo[0] ) .'">';
			} else {
			        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
			} ?>
			</a>
			</div>
                    <h2><?php bloginfo('description'); ?></h2>
                    <div class="col-md-6">
                        <a href="<?php get_site_url(); ?> /helpingeagles/need-request/" class="btn btn-outline btn-outline-xl outline-light"><span class="fa fa-heart pomegranate"></span>&nbsp;Make a request</a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php get_site_url(); ?> /helpingeagles/myrequests/" class="btn btn-outline btn-outline-xl outline-light"><span class="fa fa-check crete"></span>&nbsp;Check requests</a>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </section>
