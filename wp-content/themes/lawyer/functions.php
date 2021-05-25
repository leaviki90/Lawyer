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
    wp_enqueue_script("jQuery", get_template_directory_uri()."/frontend/js/jquery.js", array(), "v3.5.1", true);
    wp_enqueue_script("bootstrap-bundle", get_template_directory_uri()."/frontend/js/bootstrap.bundle.min.js", "jQuery", "v5.0.0-beta1", true);
    wp_enqueue_script("font-awesome", 'https://kit.fontawesome.com/e2e5f5e8b9.js', array(), "v5.3.0", false);
    wp_enqueue_script("owl-carousel", get_template_directory_uri()."/frontend/js/owl.carousel.min.js", "jQuery", "v2.3.4", true);
    wp_enqueue_script("main-js", get_template_directory_uri()."/frontend/js/main.js", "jQuery", "v1.0.0", true);
   
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
    add_image_size("team-list", 273, 355, true);
}

add_action( 'after_setup_theme', 'lawyer_setup' );

function lawyer_create_post_type() {

    register_post_type('our-services', array(
        'labels' => array(
            'name' => __('Services', "lawyer"),
            'singular_name' => __('Service', "lawyer"),
            'plural_name' => __('Services', "lawyer"),
            'all_items' => __('All Services', "lawyer"),
            'add_new' => __('Add New Service', "lawyer"),
            'add_new_item' => __('Add New Service Item', "lawyer"),
            'new_item' => __('New Service', "lawyer"),
            'edit' => __('Edit', "lawyer"),
            'edit_item' => __('Edit Service Item', "lawyer"),
            'view' => __('View Service', "lawyer"),
            'view_item' => __('View Service Item', "lawyer"),
            'featured_image' => __('Featured Image For This Service', "lawyer"),
        ),
        'public' => true,
        'hierarchical' => false,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-list-view',
        'menu_position' => 17,      
        'supports' => array(
            'title',
            'thumbnail',
            'editor'
        )
    ));
}

add_action('init', 'lawyer_create_post_type');


function lawyer_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'page-sidebar',
            'name'          => __( 'Page Sidebar', "lawyer" ),
            'description'   => __( 'Page Sidebar', "lawyer" ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
    register_sidebar(
        array(
            'id'            => 'footer-sidebar-1',
            'name'          => __( 'Footer Sidebar 1', "lawyer" ),
            'description'   => __( 'Footer Sidebar 1', "lawyer" ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
    register_sidebar(
        array(
            'id'            => 'footer-sidebar-2',
            'name'          => __( 'Footer Sidebar 2', "lawyer" ),
            'description'   => __( 'Footer Sidebar 2', "lawyer" ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
    register_sidebar(
        array(
            'id'            => 'footer-sidebar-3',
            'name'          => __( 'Footer Sidebar 3', "lawyer" ),
            'description'   => __( 'Footer Sidebar 3', "lawyer" ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'lawyer_sidebars' );

require get_template_directory()."/inc/widget-services.php";
require get_template_directory() . "/inc/options.php";