<?php 

function he_enqueue() {
    wp_register_style('he_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_register_style('he_fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_register_style('he_custom', get_template_directory_uri() . '/assets/css/custom.css');
    wp_register_style('he_blocks', get_template_directory_uri() . '/assets/css/blocks.css');
    wp_register_style('he_style_library', get_template_directory_uri() . '/assets/css/style-library-1.css');
    wp_register_style('raleway', 'http://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,400,300,600,700');
    wp_register_style('lato', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic');
    
    

    wp_enqueue_style('he_bootstrap');
    wp_enqueue_style('he_fontawesome');
    wp_enqueue_style('he_blocks');
    wp_enqueue_style('he_style_library');
    wp_enqueue_style('raleway');
    wp_enqueue_style('he_custom');
    wp_enqueue_style('lato');

    wp_register_script('he_bootstrap_js', get_template_directory_uri() . '/assests/js/bootstrap.min.js', array(), false, true);
    wp_register_script('he_plugins', get_template_directory_uri() . '/assests/js/plugins.js', array(), false, true);
    wp_register_script('he_bskit', get_template_directory_uri() . '/assests/js/bskit-scripts.js', array(), false, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('he_bootstrap_js');
    wp_enqueue_script('he_plugins');
    wp_enqueue_script('he_bskit');
}