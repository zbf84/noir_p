<?php
/**
 * noir customizer
 *
 * @package noir
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Added Panels & Sections
 */
function eduker_customizer_panels_sections( $wp_customize ) {

    //Add panel
    $wp_customize->add_panel( 'eduker_customizer', [
        'priority' => 10,
        'title'    => esc_html__( 'Noir Customizer', 'noir' ),
    ] );

    /**
     * Customizer Section
     */
    $wp_customize->add_section( 'header_top_setting', [
        'title'       => esc_html__( 'Header Info Setting', 'noir' ),
        'description' => '',
        'priority'    => 10,
        'capability'  => 'edit_theme_options',
        'panel'       => 'eduker_customizer',
    ] );

    $wp_customize->add_section( 'header_social', [
        'title'       => esc_html__( 'Header Social', 'noir' ),
        'description' => '',
        'priority'    => 11,
        'capability'  => 'edit_theme_options',
        'panel'       => 'eduker_customizer',
    ] );

    $wp_customize->add_section( 'section_header_logo', [
        'title'       => esc_html__( 'Header Setting', 'noir' ),
        'description' => '',
        'priority'    => 12,
        'capability'  => 'edit_theme_options',
        'panel'       => 'eduker_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'noir' ),
        'description' => '',
        'priority'    => 13,
        'capability'  => 'edit_theme_options',
        'panel'       => 'eduker_customizer',
    ] );

    $wp_customize->add_section( 'header_side_setting', [
        'title'       => esc_html__( 'Side Info', 'noir' ),
        'description' => '',
        'priority'    => 14,
        'capability'  => 'edit_theme_options',
        'panel'       => 'eduker_customizer',
    ] );

    $wp_customize->add_section( 'breadcrumb_setting', [
        'title'       => esc_html__( 'Breadcrumb Setting', 'noir' ),
        'description' => '',
        'priority'    => 15,
        'capability'  => 'edit_theme_options',
        'panel'       => 'eduker_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'noir' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'eduker_customizer',
    ] );

    $wp_customize->add_section( 'footer_setting', [
        'title'       => esc_html__( 'Footer Settings', 'noir' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'eduker_customizer',
    ] );

    $wp_customize->add_section( 'color_setting', [
        'title'       => esc_html__( 'Color Setting', 'noir' ),
        'description' => '',
        'priority'    => 17,
        'capability'  => 'edit_theme_options',
        'panel'       => 'eduker_customizer',
    ] );

    $wp_customize->add_section( '404_page', [
        'title'       => esc_html__( '404 Page', 'noir' ),
        'description' => '',
        'priority'    => 18,
        'capability'  => 'edit_theme_options',
        'panel'       => 'eduker_customizer',
    ] );

    $wp_customize->add_section( 'tutor_course_settings', [
        'title'       => esc_html__( 'Tutor Course Settings ', 'noir' ),
        'description' => '',
        'priority'    => 19,
        'capability'  => 'edit_theme_options',
        'panel'       => 'eduker_customizer',
    ] );

    $wp_customize->add_section( 'event_settings', [
        'title'       => esc_html__( 'Event Settings ', 'noir' ),
        'description' => '',
        'priority'    => 19,
        'capability'  => 'edit_theme_options',
        'panel'       => 'eduker_customizer',
    ] );

    $wp_customize->add_section( 'learndash_course_settings', [
        'title'       => esc_html__( 'Learndash Course Settings ', 'noir' ),
        'description' => '',
        'priority'    => 20,
        'capability'  => 'edit_theme_options',
        'panel'       => 'eduker_customizer',
    ] );

    $wp_customize->add_section( 'typo_setting', [
        'title'       => esc_html__( 'Typography Setting', 'noir' ),
        'description' => '',
        'priority'    => 21,
        'capability'  => 'edit_theme_options',
        'panel'       => 'eduker_customizer',
    ] );

    $wp_customize->add_section( 'tutor_course_settings', [
        'title'       => esc_html__( 'Tutor Course Settings ', 'noir' ),
        'description' => '',
        'priority'    => 23,
        'capability'  => 'edit_theme_options',
        'panel'       => 'eduker_customizer',
    ] );
}

add_action( 'customize_register', 'eduker_customizer_panels_sections' );

function _header_top_fields( $fields ) {
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_topbar_switch',
        'label'    => esc_html__( 'Topbar Swicher', 'noir' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_preloader',
        'label'    => esc_html__( 'Preloader On/Off', 'noir' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];


    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_backtotop',
        'label'    => esc_html__( 'Back To Top On/Off', 'noir' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_header_right',
        'label'    => esc_html__( 'Header Right On/Off', 'noir' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_search',
        'label'    => esc_html__( 'Header Search On/Off', 'noir' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_header_lang',
        'label'    => esc_html__( 'language On/Off', 'noir' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];

    // button
    $fields[] = [
        'type'     => 'text',
        'settings' => 'eduker_button_text',
        'label'    => esc_html__( 'Button Text', 'noir' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Get A Quote', 'noir' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'eduker_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'link',
        'settings' => 'eduker_button_link',
        'label'    => esc_html__( 'Button URL', 'noir' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '#', 'noir' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'eduker_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];


    // phone
    $fields[] = [
        'type'     => 'text',
        'settings' => 'eduker_phone_num',
        'label'    => esc_html__( 'Phone Number', 'noir' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '+(088) 234 567 899', 'noir' ),
        'priority' => 10,
    ];    

    // email
    $fields[] = [
        'type'     => 'text',
        'settings' => 'eduker_mail_id',
        'label'    => esc_html__( 'Mail ID', 'noir' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'info@noir.com', 'noir' ),
        'priority' => 10,
    ];    

    // email
    $fields[] = [
        'type'     => 'text',
        'settings' => 'eduker_address',
        'label'    => esc_html__( 'Address', 'noir' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Moon ave, New York, 2020 NY US', 'noir' ),
        'priority' => 10,
    ];    

    $fields[] = [
        'type'     => 'text',
        'settings' => 'eduker_address_url',
        'label'    => esc_html__( 'Address URL', 'noir' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'https://goo.gl/maps/qzqY2PAcQwUz1BYN9', 'noir' ),
        'priority' => 10,
    ];    

    // Login
    $fields[] = [
        'type'     => 'text',
        'settings' => 'eduker_acc_button_text',
        'label'    => esc_html__( 'Login', 'noir' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Login', 'noir' ),
        'priority' => 10,
    ];    

    $fields[] = [
        'type'     => 'text',
        'settings' => 'eduker_acc_button_link',
        'label'    => esc_html__( 'Account URL', 'noir' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '#', 'noir' ),
        'priority' => 10,
    ];

    return $fields;

}
add_filter( 'kirki/fields', '_header_top_fields' );

/*
Header Social
 */
function _header_social_fields( $fields ) {
    // header section social
    $fields[] = [
        'type'     => 'text',
        'settings' => 'eduker_topbar_fb_url',
        'label'    => esc_html__( 'Facebook Url', 'noir' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'noir' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'eduker_topbar_twitter_url',
        'label'    => esc_html__( 'Twitter Url', 'noir' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'noir' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'eduker_topbar_linkedin_url',
        'label'    => esc_html__( 'Linkedin Url', 'noir' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'noir' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'eduker_topbar_instagram_url',
        'label'    => esc_html__( 'Instagram Url', 'noir' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'noir' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'eduker_topbar_youtube_url',
        'label'    => esc_html__( 'Youtube Url', 'noir' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'noir' ),
        'priority' => 10,
    ];


    return $fields;
}
add_filter( 'kirki/fields', '_header_social_fields' );

/*
Header Settings
 */
function _header_header_fields( $fields ) {
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_header',
        'label'       => esc_html__( 'Select Header Style', 'noir' ),
        'section'     => 'section_header_logo',
        'placeholder' => esc_html__( 'Select an option...', 'noir' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'header-style-1'   => get_template_directory_uri() . '/inc/img/header/header-1.png',
            'header-style-2' => get_template_directory_uri() . '/inc/img/header/header-2.png',
            'header-style-3'  => get_template_directory_uri() . '/inc/img/header/header-3.png'
        ],
        'default'     => 'header-style-1',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'logo',
        'label'       => esc_html__( 'Header Logo', 'noir' ),
        'description' => esc_html__( 'Upload Your Logo.', 'noir' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'seconday_logo',
        'label'       => esc_html__( 'Header Secondary Logo', 'noir' ),
        'description' => esc_html__( 'Header Logo Black', 'noir' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo-2.png',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'preloader_logo',
        'label'       => esc_html__( 'Preloader Logo', 'noir' ),
        'description' => esc_html__( 'Upload Preloader Logo.', 'noir' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/favicon.png',
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_header_fields' );

/*
Header Side Info
 */
function _header_side_fields( $fields ) {
    // side info settings
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_side_hide',
        'label'    => esc_html__( 'Side Info On/Off', 'noir' ),
        'section'  => 'header_side_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];  
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'eduker_side_logo',
        'label'       => esc_html__( 'Logo Side', 'noir' ),
        'description' => esc_html__( 'Logo Side', 'noir' ),
        'section'     => 'header_side_setting',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'eduker_extra_about_text',
        'label'    => esc_html__( 'Side Description Text', 'noir' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system and expound the actual teachings of the great explore', 'noir' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'eduker_extra_map',
        'label'    => esc_html__( 'Map Address Iframe', 'noir' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '#', 'noir' ),
        'priority' => 10,
    ];

    // contact
    $fields[] = [
        'type'     => 'text',
        'settings' => 'eduker_contact_title',
        'label'    => esc_html__( 'Contact Title', 'noir' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'Contact Title', 'noir' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'eduker_extra_address',
        'label'    => esc_html__( 'Office Address', 'noir' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '12/A, Mirnada City Tower, NYC', 'noir' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'eduker_extra_phone',
        'label'    => esc_html__( 'Phone Number', 'noir' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '+0989 7876 9865 9', 'noir' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'eduker_extra_email',
        'label'    => esc_html__( 'Email ID', 'noir' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'info@weblearnbd.net', 'noir' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_side_fields' );

/*
_header_page_title_fields
 */
function _header_page_title_fields( $fields ) {
    // Breadcrumb Setting
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'breadcrumb_bg_img',
        'label'       => esc_html__( 'Breadcrumb Background Image', 'noir' ),
        'description' => esc_html__( 'Breadcrumb Background Image', 'noir' ),
        'section'     => 'breadcrumb_setting',
        'default'     => get_template_directory_uri() . '/assets/img/page-title/page-title.jpg',
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'eduker_breadcrumb_bg_color',
        'label'       => __( 'Breadcrumb BG Color', 'noir' ),
        'description' => esc_html__( 'This is a Breadcrumb bg color control.', 'noir' ),
        'section'     => 'breadcrumb_setting',
        'default'     => '#f4f9fc',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'breadcrumb_info_switch',
        'label'    => esc_html__( 'Breadcrumb Info switch', 'noir' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'breadcrumb_switch',
        'label'    => esc_html__( 'Breadcrumb Hide', 'noir' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_page_title_fields' );

/*
Header Social
 */
function _header_blog_fields( $fields ) {
// Blog Setting
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_blog_btn_switch',
        'label'    => esc_html__( 'Blog BTN On/Off', 'noir' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_blog_cat',
        'label'    => esc_html__( 'Blog Category Meta On/Off', 'noir' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_blog_author',
        'label'    => esc_html__( 'Blog Author Meta On/Off', 'noir' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_blog_date',
        'label'    => esc_html__( 'Blog Date Meta On/Off', 'noir' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_blog_comments',
        'label'    => esc_html__( 'Blog Comments Meta On/Off', 'noir' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'eduker_blog_btn',
        'label'    => esc_html__( 'Blog Button text', 'noir' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Read More', 'noir' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title',
        'label'    => esc_html__( 'Blog Title', 'noir' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog', 'noir' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title_details',
        'label'    => esc_html__( 'Blog Details Title', 'noir' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog Details', 'noir' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_blog_fields' );

/*
Footer
 */
function _header_footer_fields( $fields ) {
    // Footer Setting
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_footer',
        'label'       => esc_html__( 'Choose Footer Style', 'noir' ),
        'section'     => 'footer_setting',
        'default'     => '5',
        'placeholder' => esc_html__( 'Select an option...', 'noir' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'footer-style-1'   => get_template_directory_uri() . '/inc/img/footer/footer-1.png',
            'footer-style-2' => get_template_directory_uri() . '/inc/img/footer/footer-2.png',
            'footer-style-3' => get_template_directory_uri() . '/inc/img/footer/footer-3.png',
            'footer-style-4' => get_template_directory_uri() . '/inc/img/footer/footer-4.png',
        ],
        'default'     => 'footer-style-1',
    ];

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'footer_widget_number',
        'label'       => esc_html__( 'Widget Number', 'noir' ),
        'section'     => 'footer_setting',
        'default'     => '4',
        'placeholder' => esc_html__( 'Select an option...', 'noir' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            '4' => esc_html__( 'Widget Number 4', 'noir' ),
            '3' => esc_html__( 'Widget Number 3', 'noir' ),
            '2' => esc_html__( 'Widget Number 2', 'noir' ),
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'eduker_footer_bg',
        'label'       => esc_html__( 'Footer Background Image.', 'noir' ),
        'description' => esc_html__( 'Footer Background Image.', 'noir' ),
        'section'     => 'footer_setting',
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'eduker_footer_bg_color',
        'label'       => __( 'Footer BG Color', 'noir' ),
        'description' => esc_html__( 'This is a Footer bg color control.', 'noir' ),
        'section'     => 'footer_setting',
        'default'     => '#f4f9fc',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_2_switch',
        'label'    => esc_html__( 'Footer Style 2 On/Off', 'noir' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_3_switch',
        'label'    => esc_html__( 'Footer Style 3 On/Off', 'noir' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_4_switch',
        'label'    => esc_html__( 'Footer Style 4 On/Off', 'noir' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'eduker_copyright',
        'label'    => esc_html__( 'Copy Right', 'noir' ),
        'section'  => 'footer_setting',
        'default'  => esc_html__( 'Copyright &copy; 2022 Theme_Pure. All Rights Reserved', 'noir' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_footer_fields' );

// color
function eduker_color_fields( $fields ) {
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'theme_color_1',
        'label'       => __( 'Theme Color 1', 'noir' ),
        'description' => esc_html__( 'This is a Theme color control.', 'noir' ),
        'section'     => 'color_setting',
        'default'     => '#3D6CE7',
        'priority'    => 10,
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'theme_color_2',
        'label'       => __( 'Theme Color 2', 'noir' ),
        'description' => esc_html__( 'This is a Theme color control.', 'noir' ),
        'section'     => 'color_setting',
        'default'     => '#258E46',
        'priority'    => 10,
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'theme_color_3',
        'label'       => __( 'Theme Color 3', 'noir' ),
        'description' => esc_html__( 'This is a Theme color control.', 'noir' ),
        'section'     => 'color_setting',
        'default'     => '#007A70',
        'priority'    => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', 'eduker_color_fields' );

// 404
function eduker_404_fields( $fields ) {
    // 404 settings
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'eduker_404_bg',
        'label'       => esc_html__( '404 Image.', 'noir' ),
        'description' => esc_html__( '404 Image.', 'noir' ),
        'section'     => '404_page',
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'eduker_error_title',
        'label'    => esc_html__( 'Not Found Title', 'noir' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Page not found', 'noir' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'eduker_error_desc',
        'label'    => esc_html__( '404 Description Text', 'noir' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Oops! The page you are looking for does not exist. It might have been moved or deleted', 'noir' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'eduker_error_link_text',
        'label'    => esc_html__( '404 Link Text', 'noir' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Back To Home', 'noir' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', 'eduker_404_fields' );

// course_settings
function eduker_learndash_fields( $fields ) {

    $fields[] = [
        'type'     => 'number',
        'settings' => 'eduker_learndash_post_number',
        'label'    => esc_html__( 'Learndash Post Per page', 'noir' ),
        'section'  => 'learndash_course_settings',
        'default'  => 6,
        'priority' => 10,
    ];

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'eduker_learndash_order',
        'label'       => esc_html__( 'Post Order', 'noir' ),
        'section'     => 'learndash_course_settings',
        'default'     => 'DESC',
        'placeholder' => esc_html__( 'Select an option...', 'noir' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'ASC' => esc_html__( 'ASC', 'noir' ),
            'DESC' => esc_html__( 'DESC', 'noir' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_learndash_related',
        'label'    => esc_html__( 'Show Related?', 'noir' ),
        'section'  => 'learndash_course_settings',
        'default'  => 1,
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];

    return $fields;

}

if ( class_exists( 'SFWD_LMS' ) ) {
add_filter( 'kirki/fields', 'eduker_learndash_fields' );
}


// tutor_course_settings
function eduker_tutor_course_fields( $fields ) {
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_tutor_course_details_author_meta_switch',
        'label'    => esc_html__( 'Tutor Course Details Author Meta', 'noir' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_tutor_course_details_payment_switch',
        'label'    => esc_html__( 'Tutor Course Details Payment', 'noir' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_tutor_course_desc_tab_switch',
        'label'    => esc_html__( 'Tutor Course Description Tab Swicher', 'noir' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_tutor_course_curriculum_tab_switch',
        'label'    => esc_html__( 'Tutor Course Curriculum Tab Swicher', 'noir' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_tutor_course_reviews_tab_switch',
        'label'    => esc_html__( 'Tutor Course Reviews Tab Swicher', 'noir' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'eduker_tutor_course_instructor_tab_switch',
        'label'    => esc_html__( 'Tutor Course Instructor Tab Swicher', 'noir' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
    ];
    return $fields;
}

if (  function_exists('tutor') ) {
    add_filter( 'kirki/fields', 'eduker_tutor_course_fields' );
}

/**
 * Added Event Fields
 */
function eduker_event_fields( $fields ) {
    // event settings
    $fields[] = [
        'type'     => 'text',
        'settings' => 'event_btn_text',
        'label'    => esc_html__( 'Button Text', 'noir' ),
        'section'  => 'event_settings',
        'default'  => esc_html__( 'Enroll Now', 'noir' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'event_btn_link',
        'label'    => esc_html__( 'Button Link', 'noir' ),
        'section'  => 'event_settings',
        'default'  => esc_html__( '#', 'noir' ),
        'priority' => 10,
    ];
    return $fields;
}

add_filter( 'kirki/fields', 'eduker_event_fields' );


/**
 * Added Fields
 */
function eduker_typo_fields( $fields ) {
    // typography settings
    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_body_setting',
        'label'       => esc_html__( 'Body Font', 'noir' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'body',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h_setting',
        'label'       => esc_html__( 'Heading h1 Fonts', 'noir' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h1',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h2_setting',
        'label'       => esc_html__( 'Heading h2 Fonts', 'noir' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h2',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h3_setting',
        'label'       => esc_html__( 'Heading h3 Fonts', 'noir' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h3',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h4_setting',
        'label'       => esc_html__( 'Heading h4 Fonts', 'noir' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h4',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h5_setting',
        'label'       => esc_html__( 'Heading h5 Fonts', 'noir' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h5',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h6_setting',
        'label'       => esc_html__( 'Heading h6 Fonts', 'noir' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h6',
            ],
        ],
    ];
    return $fields;
}

add_filter( 'kirki/fields', 'eduker_typo_fields' );


// course_settings
function eduker_course_fields( $fields ) {

    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'course_style',
        'label'       => esc_html__( 'Select Course Style', 'noir' ),
        'section'     => 'tutor_course_settings',
        'default'     => '5',
        'placeholder' => esc_html__( 'Select an option...', 'noir' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'standard'   => get_template_directory_uri() . '/inc/img/course/course-1.jpg',
            'course_with_sidebar' => get_template_directory_uri() . '/inc/img/course/course-2.jpg',
            'course_solid'  => get_template_directory_uri() . '/inc/img/course/course-3.jpg',
        ],
        'default'     => 'standard',
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_search_switch',
        'label'    => esc_html__( 'Show search?', 'noir' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_latest_post_switch',
        'label'    => esc_html__( 'Show latest post?', 'noir' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_category_switch',
        'label'    => esc_html__( 'Show category filter?', 'noir' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_skill_switch',
        'label'    => esc_html__( 'Show skill filter?', 'noir' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'noir' ),
            'off' => esc_html__( 'Disable', 'noir' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    return $fields;

}

add_filter( 'kirki/fields', 'eduker_course_fields' );




/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function eduker_THEME_option( $name ) {
    $value = '';
    if ( class_exists( 'noir' ) ) {
        $value = Kirki::get_option( eduker_get_theme(), $name );
    }

    return apply_filters( 'eduker_THEME_option', $value, $name );
}

/**
 * Get config ID
 *
 * @return string
 */
function eduker_get_theme() {
    return 'noir';
}