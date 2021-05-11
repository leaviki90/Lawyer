<?php

//ADD STYLE

function lawyer_style(){
    wp_enqueue_style("owl-carousel", get_template_directory_uri()."/frontend/css/owl.carousel.css", array(), "v2.3.4");
    wp_enqueue_style("owl-theme-default", get_template_directory_uri()."/frontend/css/owl.theme.default.css", "owl-carousel", "v2.3.4");
    wp_enqueue_style("theme", get_template_directory_uri()."/frontend/css/theme.css", array(), "v1.0.0");
    wp_enqueue_style("style", get_template_directory_uri()."/style.css", array(), "v1.0.0");
}

add_action( 'wp_enqueue_scripts', 'lawyer_style' );

//ADD SCRIPTS

function lawyer_scripts(){
    wp_enqueue_style("jQuery", get_template_directory_uri()."/frontend/js/jquery.js", array(), "v3.5.1", true);
    wp_enqueue_style("bootstrap-bundle", get_template_directory_uri()."/frontend/js/bootstrap.bundle.min.js", "jQuery", "v5.0.0-beta1", true);
    wp_enqueue_style("font-awesome", 'https://use.fontawesome.com/releases/v5.3.0/css/all.css', array(), "v5.3.0", false);
    wp_enqueue_style("owl-carousel", get_template_directory_uri()."/frontend/js/owl.carousel.min.js", "jQuery", "v2.3.4", true);
    wp_enqueue_style("main-js", get_template_directory_uri()."/frontend/js/main.js", "jQuery", "v1.0.0", true);
   
}

add_action( 'wp_enqueue_scripts', 'lawyer_scripts' );

//THEME SETUP

function  lawyer_setup(){
    add_theme_support( 'automatic-feed-links' );
    load_theme_textdomain( 'lawyer', get_template_directory() . '/languages' );
    add_theme_support( 'custom-logo', array(
        'height'               => 28,
        'width'                => 88,
        'flex-height'          => true,
        'flex-width'           => true,
        'unlink-homepage-logo' => false, 
    ) );
    register_nav_menus(array(
        "main-menu" => __("Main Menu", "lawyer"),
        "social" => __("Social", "lawyer")
    ));
    add_theme_support( 'post-thumbnails' );
    add_image_size("blog-thumb", 463, 326, true);
}

add_action( 'after_setup_theme', 'lawyer_setup' );
