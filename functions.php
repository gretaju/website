<?php

function naujasprojektas_theme_support(){
// Adds dynamic title tag support
add_theme_support('title-tag');
}

add_action('after_setup_theme','naujasprojektas_theme_support');

function projektas_register_styles()
{
    wp_enqueue_style('projektas-themify', get_template_directory_uri() . '/assets/vendors/themify-icons/css/themify-icons.css' , array(), false, 'all');
    wp_enqueue_style('projektas-template-styles', get_template_directory_uri() . '/assets/css/ollie.css?v=' . time(), array(), false, 'all');
    wp_enqueue_style('projektas-owl-carousel', get_template_directory_uri() . '/assets/vendors/owl-carousel/css/owl.carousel.css' , array(), false, 'all');
    wp_enqueue_style('projektas-owl-carousel', get_template_directory_uri() . '/assets/vendors/owl-carousel/css/owl.theme.default.css' , array(), false, 'all');
    wp_enqueue_style('projektas-bootstrap', get_template_directory_uri() . '/assets/vendors/owl-carousel/css/owl.theme.default.css' , array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'projektas_register_styles');

function projektas_register_scripts()
{
    wp_enqueue_script('projektas-script', get_template_directory_uri() . '/assets/js/ollie.js', ['jquery'], false, true);
    wp_enqueue_script('projektas-core', get_template_directory_uri() . '/assets/vendors/jquery/jquery-3.4.1.js', ['jquery'], false, true);
    wp_enqueue_script('projektas-bootrsap', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.bundle.js', ['jquery'], false, true);
    wp_enqueue_script('projekta-bootstrap3affix', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.affix.js', ['jquery'], false, true);
    wp_enqueue_script('projektas-owl-carousel', get_template_directory_uri() . '/assets/vendors/owl-carousel/js/owl.carousel.js', ['jquery'], false, true);
}

add_action('wp_enqueue_scripts', 'projektas_register_scripts');

?>
