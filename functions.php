<?php

// woocommerce

add_action( 'after_setup_theme', 'woocommerce' );

function woocommerce() {

 
    load_theme_textdomain( 'woocommerce', get_template_directory() . '/languages' );


    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array( 'search-form' ) );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'banner-image', 1920, 1080, array( 'center', 'center' ), true );
    add_image_size( 'blog-main', 750, 350, array( 'center', 'center' ), true );
    add_image_size( 'blog-list', 450, 350, array( 'center', 'center' ), true );
    add_image_size( 'team-image', 400, 400, array( 'center', 'center' ), true );




    add_action( 'wp_enqueue_scripts', 'woocommerce_load_scripts' );

    function woocommerce_load_scripts() {        

        wp_enqueue_style( 'woocommerce-css', get_template_directory_uri() . '/woocommerce.min.css');
        wp_enqueue_style( 'woocommerce-style', get_stylesheet_uri() );

        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', null, null, true );
        wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/custom.js', null, null, true );

        if ( is_front_page()) {

          // wp_enqueue_script( 'home', get_template_directory_uri() . '/js/home.js', null, null, true );

        }

        
        }
  }

?>