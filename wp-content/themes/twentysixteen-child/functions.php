<?php


function soyouapp_enqueue_styles() {



    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    //wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

    /** -- **
	 * ========================================
	 * Main Style
    * ========================================
	**/

    wp_enqueue_style( 'owl-carousel',
        get_stylesheet_directory_uri() . '/css/owl.carousel.css'
    );

    wp_enqueue_style( 'owl-theme',
        get_stylesheet_directory_uri() . '/css/owl.theme.css'
    );

    wp_enqueue_style( 'font-awesome-min',
        get_stylesheet_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css'
    );

    wp_enqueue_style( 'bootstrap-min',
        get_stylesheet_directory_uri() . '/css/bootstrap.min.css'
    );
    wp_enqueue_style( 'style-css',
        get_stylesheet_directory_uri() . '/css/style.css'
    );



    /*-- **
	 * ========================================
	 * Media Query
    * ========================================
	* */

    wp_enqueue_style( 'large-devices-1920',
        get_stylesheet_directory_uri() . '/css/media/large-devices-1920.css',[],[],'screen and (min-width: 1920px) and (max-width: 5000px)'
    );

    wp_enqueue_style( 'large-devices-1776',
        get_stylesheet_directory_uri() . '/css/media/large-devices-1776.css',[],[],'screen and (min-width: 1776px) and (max-width: 1919px)'
    );

    wp_enqueue_style( 'large-devices-1680',
        get_stylesheet_directory_uri() . '/css/media/large-devices-1680.css',[],[],'screen and (min-width: 1680px) and (max-width: 1775px)'
    );

    wp_enqueue_style( 'large-devices-1600',
        get_stylesheet_directory_uri() . '/css/media/large-devices-1600.css',[],[],'screen and (min-width: 1600px) and (max-width: 1679px)'
    );

    wp_enqueue_style( 'large-devices-1440',
        get_stylesheet_directory_uri() . '/css/media/large-devices-1440.css',[],[],'screen and (min-width: 1440px) and (max-width: 1599px)'
    );

    wp_enqueue_style( 'large-devices-1367',
        get_stylesheet_directory_uri() . '/css/media/large-devices-1367.css',[],[],'screen and (min-width: 1367px) and (max-width: 1439px)'
    );

    wp_enqueue_style( 'large-devices-1200',
        get_stylesheet_directory_uri() . '/css/media/large-devices-1200.css',[],[],'screen and (min-width: 1200px) and (max-width: 1280px)'
    );

    wp_enqueue_style( 'medium-devices',
        get_stylesheet_directory_uri() . '/css/media/medium-devices.css',[],[],'screen and (min-width: 992px) and (max-width: 1199px)'
    );

    wp_enqueue_style( 'tablet-devices',
        get_stylesheet_directory_uri() . '/css/media/tablet-devices.css',[],[],'screen and (min-width: 786px) and (max-width: 991px)'
    );

    wp_enqueue_style( 'mobile-devices',
        get_stylesheet_directory_uri() . '/css/media/mobile-devices.css',[],[],'screen and (min-width: 640px) and (max-width: 767px)'
    );


    wp_enqueue_style( 'indriodt-devices',
        get_stylesheet_directory_uri() . '/css/media/indriodt-devices.css',[],[],'screen and (min-width: 440px) and (max-width: 639px)'
    );

    wp_enqueue_style( 'mini-indriod-devices',
        get_stylesheet_directory_uri() . '/css/media/mini-indriod-devices.css',[],[],'screen and (min-width: 350px) and (max-width: 439px)'
    );

    wp_enqueue_style( 'small-mobiles',
        get_stylesheet_directory_uri() . '/css/media/small-mobiles.css',[],[],'screen and (min-width: 1px) and (max-width: 349px)'
    );


}
add_action( 'wp_enqueue_scripts', 'soyouapp_enqueue_styles' );