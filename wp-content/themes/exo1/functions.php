<?php
    add_theme_support( 'post-thumbnails' );


    /**
     * Enqueues scripts and styles.
     *
     * @since Twenty Sixteen 1.0
     */
    function dr_scripts()
    {
        // lien  stylesheet.
        wp_enqueue_style('styles_principaux', get_stylesheet_uri() );
        wp_enqueue_script( 'my-js', get_stylesheet_directory_uri().'/assets/js/main.js', false );
    }

    add_action( 'wp_enqueue_scripts', 'dr_scripts' );


// This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
        'header' => __( 'Header'),
        'footer' => __( 'Footer'),
    ) );

    /* version pour traduction
     * register_nav_menus( array(
        'header' => __( 'Header', 'piscine' ),
        'footer' => __( 'Footer', 'piscine' ),
    ) );*/