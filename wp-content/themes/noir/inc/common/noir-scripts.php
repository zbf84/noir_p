<?php

/**
 * eduker_scripts description
 * @return [type] [description]
 */
function noir_scripts() {

    /**
     * all css files
    */

    wp_enqueue_style( 'noir-fonts', noir_fonts_url(), array(), time() );
    if( is_rtl() ){
        wp_enqueue_style( 'bootstrap-rtl', NOIR_THEME_CSS_DIR.'bootstrap.rtl.min.css', array() );
    }else{
        wp_enqueue_style( 'bootstrap', NOIR_THEME_CSS_DIR.'bootstrap.css', array() );
    }

    wp_enqueue_style( 'bootstrap-min', NOIR_THEME_CSS_DIR . 'bootstrap.min.css', [] );
    wp_enqueue_style( 'font-awesome-pro-noir', NOIR_THEME_CSS_DIR . 'font-awesome-pro.css', [] );
    wp_enqueue_style( 'remixicon', NOIR_THEME_CSS_DIR . 'remixicon.css', [] );
    wp_enqueue_style( 'magnific-popup', NOIR_THEME_CSS_DIR . 'magnific-popup.css', [] );
    wp_enqueue_style( 'nice-select', NOIR_THEME_CSS_DIR . 'nice-select.css', [] );
    wp_enqueue_style( 'animate', NOIR_THEME_CSS_DIR . 'animate.css', [] );
    wp_enqueue_style( 'mobilemenu', NOIR_THEME_CSS_DIR . 'mobilemenu.css', [] );
    wp_enqueue_style( 'swiper-bundle', NOIR_THEME_CSS_DIR . 'swiper-bundle.css', [] );
    wp_enqueue_style( 'spacing', NOIR_THEME_CSS_DIR . 'spacing.css', [] );
    wp_enqueue_style( 'blog', NOIR_THEME_CSS_DIR . 'blog.css', [] );
    wp_enqueue_style( 'responsive', NOIR_THEME_CSS_DIR . 'responsive.css', [] );
    wp_enqueue_style( 'noir-core', NOIR_THEME_CSS_DIR . 'noir-core.css', [], time() );
    wp_enqueue_style( 'noir-unit', NOIR_THEME_CSS_DIR . 'noir-unit.css', [], time() );
    wp_enqueue_style( 'noir-custom', NOIR_THEME_CSS_DIR . 'noir-custom.css', [] );
    wp_enqueue_style( 'noir-style', get_stylesheet_uri() );

    // all js
    wp_enqueue_script( 'bootstrap-min', NOIR_THEME_JS_DIR . 'bootstrap.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'appear-min', NOIR_THEME_JS_DIR . 'appear.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'jquery-magnific-popup', NOIR_THEME_JS_DIR . 'jquery.magnific-popup.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'mobilemenu', NOIR_THEME_JS_DIR . 'mobilemenu.js', [ 'jquery' ], '', true );
    
    wp_enqueue_script( 'gsap-min', NOIR_THEME_JS_DIR . 'gsap.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'ScrollTrigger-min', NOIR_THEME_JS_DIR . 'ScrollTrigger.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'lenis', NOIR_THEME_JS_DIR . 'lenis.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'swiper-bundle', NOIR_THEME_JS_DIR . 'swiper-bundle.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'jquery-nice-select', NOIR_THEME_JS_DIR . 'nice-select.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'isotope-pkgd', NOIR_THEME_JS_DIR . 'isotope-pkgd.js', [ 'imagesloaded' ], false, true );
    wp_enqueue_script( 'wow', NOIR_THEME_JS_DIR . 'wow.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'script', NOIR_THEME_JS_DIR . 'script.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'noir-main', NOIR_THEME_JS_DIR . 'main.js', [ 'jquery' ], time(), true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'noir_scripts' );

/*
Register Fonts
 */
function noir_fonts_url() {
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