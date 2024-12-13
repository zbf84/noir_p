<?php

/**
 * eduker_scripts description
 * @return [type] [description]
 */
function eduker_scripts() {

    /**
     * all css files
    */

    wp_enqueue_style( 'noir-fonts', eduker_fonts_url(), array(), time() );
    if( is_rtl() ){
        wp_enqueue_style( 'bootstrap-rtl', NOIR_THEME_CSS_DIR.'bootstrap.rtl.min.css', array() );
    }else{
        wp_enqueue_style( 'bootstrap', NOIR_THEME_CSS_DIR.'bootstrap.css', array() );
    }
    wp_enqueue_style( 'meanmenu', NOIR_THEME_CSS_DIR . 'meanmenu.css', [] );
    wp_enqueue_style( 'animate', NOIR_THEME_CSS_DIR . 'animate.css', [] );
    wp_enqueue_style( 'owl-carousel', NOIR_THEME_CSS_DIR . 'owl-carousel.css', [] );
    wp_enqueue_style( 'swiper-bundle', NOIR_THEME_CSS_DIR . 'swiper-bundle.css', [] );
    wp_enqueue_style( 'magnific-popup', NOIR_THEME_CSS_DIR . 'magnific-popup.css', [] );
    wp_enqueue_style( 'nice-select', NOIR_THEME_CSS_DIR . 'nice-select.css', [] );
    wp_enqueue_style( 'font-awesome-pro-noir', NOIR_THEME_CSS_DIR . 'font-awesome-pro-noir.css', [] );
    wp_enqueue_style( 'jquery-fancybox', NOIR_THEME_CSS_DIR . 'spacing.css', [] );
    wp_enqueue_style( 'noir-core', NOIR_THEME_CSS_DIR . 'noir-core.css', [], time() );
    wp_enqueue_style( 'noir-unit', NOIR_THEME_CSS_DIR . 'noir-unit.css', [], time() );
    wp_enqueue_style( 'noir-custom', NOIR_THEME_CSS_DIR . 'noir-custom.css', [] );
    wp_enqueue_style( 'noir-style', get_stylesheet_uri() );

    // all js
    wp_enqueue_script( 'bootstrap-bundle', NOIR_THEME_JS_DIR . 'bootstrap-bundle.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'waypoints', NOIR_THEME_JS_DIR . 'waypoints.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'meanmenu', NOIR_THEME_JS_DIR . 'meanmenu.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'counterup', NOIR_THEME_JS_DIR . 'counterup.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'swiper-bundle', NOIR_THEME_JS_DIR . 'swiper-bundle.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'owl-carousel', NOIR_THEME_JS_DIR . 'owl-carousel.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'magnific-popup', NOIR_THEME_JS_DIR . 'magnific-popup.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'parallax', NOIR_THEME_JS_DIR . 'parallax.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-nice-select', NOIR_THEME_JS_DIR . 'nice-select.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'wow', NOIR_THEME_JS_DIR . 'wow.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'isotope-pkgd', NOIR_THEME_JS_DIR . 'isotope-pkgd.js', [ 'imagesloaded' ], false, true );
    wp_enqueue_script( 'noir-main', NOIR_THEME_JS_DIR . 'main.js', [ 'jquery' ], time(), true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'eduker_scripts' );

/*
Register Fonts
 */
function eduker_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'noir' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap';
    }
    return $font_url;
}