<?php

/**
 * Course loop show view cart if in added to.
 *
 * @since v.1.7.5
 * @author themeum
 * @url https://themeum.com
 *
 * @package TutorLMS/Templates
 * @version 1.7.5
 */
?>

<div class="tutor-course-loop-price">
    <?php
    $course_id = get_the_ID();
    $cart_url = function_exists('wc_get_cart_url') ? wc_get_cart_url() : '#';
    $enroll_btn = '<div  class="tutor-loop-cart-btn-wrap"><a href="'.$cart_url.'" class="tutor-btn tutor-btn-icon tutor-btn-disable-outline tutor-btn-ghost tutor-no-hover tutor-btn-md"><span class="btn-icon tutor-icon-cart-line-filled"></span><span>'.__('View Cart', 'noir'). '</span></a></div>';
    $default_price = apply_filters('tutor-loop-default-price', __('Free', 'noir'));
    $price_html = '<div class="price"> '.$default_price.$enroll_btn. '</div>';
    if (tutor_utils()->is_course_purchasable()) {
        
	    $product_id = tutor_utils()->get_course_product_id($course_id);
	    $product    = wc_get_product( $product_id );

        if ( $product ) {
		    $price_html = '<div class="tutor-d-flex tutor-align-items-center tutor-justify-content-between"><div class="list-item-price tutor-d-flex tutor-align-items-center"> <span class="price tutor-fs-6 tutor-fw-bold tutor-color-black">'.$product->get_price_html() . ' </span></div>';
		    $cart_html = '<div class="list-item-button"> '.apply_filters( 'tutor_course_restrict_new_entry', $enroll_btn ) . ' </div></div>';
	    }
    }
    echo wp_kses_post($price_html);
    echo wp_kses_post($cart_html);
    ?>
</div>
