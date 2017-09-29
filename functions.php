<?php 

// Set up
add_theme_support ('menus');
add_theme_support ('post-thumbnails');

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


// Includes
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );
include( get_template_directory() . '/includes/widgets.php' );
include( get_template_directory() . '/includes/taxonomy.php' );


// Action & Filter Hooks

add_action ('wp_enqueue_scripts', 'he_enqueue');
add_action( 'after_setup_theme', 'he_setup_theme');
add_action( 'widgets_init', 'he_widgets');
add_action( 'init', 'create_role_taxonomy' );
add_action( 'init', 'create_urgency_taxonomy' );
add_action( 'init', 'create_hcclocations_taxonomy' );

// Shortcodes


//Mail Protection from other domains except for @hcc.edu or @student.hccs.edu

function is_valid_email_domain($login, $email, $errors ){
 $valid_email_domains = array("hccs.edu","student.hccs.edu");// whitelist email domain lists
 $valid = false;
 foreach( $valid_email_domains as $d ){
 $d_length = strlen( $d );
 $current_email_domain = strtolower( substr( $email, -($d_length), $d_length));
 if( $current_email_domain == strtolower($d) ){
 $valid = true;
 break;
 }
 }
 // if invalid, return error message
 if( $valid === false ){
 $errors->add('domain_whitelist_error',__( '<strong>ERROR</strong>: you can only register using @hccs.edu or @student.hccs.edu emails' ));
 }
}
add_action('register_post', 'is_valid_email_domain',10,3 );



