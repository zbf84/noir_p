<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme madison for publication on ThemeForest
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

add_action( 'tgmpa_register', 'eduker_register_required_plugins' );

function eduker_register_required_plugins() {
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    
    $acf_url = 'https://hixstudio.net/plugin/';
    
    $plugins = [
        [
            'name'     => esc_html__( 'Elementor Page Builder', 'noir' ),
            'slug'     => 'elementor',
            'required' => true,
        ],
        [
            'name'               => esc_html__('Tutor LMS','noir'),
            'slug'               => 'tutor',
            'required'           => true, 
        ],
        [
            'name'         => esc_html__( 'TP Core ', 'noir' ),
            'slug'         => 'tp-core',
            'source'       => esc_url( 'https://wp.hixstudio.net/noir/source/tp-core.zip' ),
            'required'     => true,
            'external_url' => esc_url( 'https://wp.hixstudio.net/noir/source/tp-core.zip' ),
        ],
        [
            'name'         => esc_html__( 'Advanced Custom Fields Pro', 'noir' ),
            'slug'         => 'advanced-custom-fields-pro',
            'source'       => $acf_url . 'advanced-custom-fields-pro.zip',
            'required'     => true,
        ],
        [
            'name'     => esc_html__( 'WP Classic Editor', 'noir' ),
            'slug'     => 'classic-editor',
            'required' => false,
        ],
        [
            'name'     => esc_html__( 'Contact Form 7', 'noir' ),
            'slug'     => 'contact-form-7',
            'required' => false,
        ],
        [
            'name'     => esc_html__( 'One Click Demo Import', 'noir' ),
            'slug'     => 'one-click-demo-import',
            'required' => false,
        ],
        array(
            'name'     =>  esc_html__('Kirki Customizer Framework','noir'),
            'slug'     => 'kirki',
            'required' => false,
        ), 
        array(
            'name'     =>  esc_html__('Breadcrumb NavXT','noir'),
            'slug'     => 'breadcrumb-navxt',
            'required' => false,
        ),
        array(
            'name'               => esc_html__('WooCommerce','noir'),
            'slug'               => 'woocommerce',
            'required'           => false, 
        ),
        array(
            'name'               =>  esc_html__('YITH WooCommerce Wishlist','noir'),
            'slug'               => 'yith-woocommerce-wishlist',
            'required'           => false,
        ),      
        array(
            'name'               =>  esc_html__('YITH WooCommerce Quick View','noir'),
            'slug'               => 'yith-woocommerce-quick-view',
            'required'           => false,
        ),    
        array(
            'name'               =>  esc_html__('Event Manager – Eventin','noir'),
            'slug'               => 'wp-event-solution',
            'required'           => false,
        )     
    ];
    $config = [
        'id'           => 'noir', // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '', // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true, // Show admin notices or not.
        'dismissable'  => true, // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '', // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false, // Automatically activate plugins after installation or not.
        'message'      => '', // Message to output right before the plugins table.

        'strings'      => [
            'page_title'                      => esc_html__( 'Install Required Plugins', 'noir' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'noir' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'noir' ),
            'updating'                        => esc_html__( 'Updating Plugin: %s', 'noir' ),
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'noir' ),
            'notice_can_install_required'     => _n_noop(
                'This theme requires the following plugin: %1$s.',
                'This theme requires the following plugins: %1$s.',
                'noir'
            ),
            'notice_can_install_recommended'  => _n_noop(
                'This theme recommends the following plugin: %1$s.',
                'This theme recommends the following plugins: %1$s.',
                'noir'
            ),
            'notice_ask_to_update'            => _n_noop(
                'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
                'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
                'noir'
            ),
            'notice_ask_to_update_maybe'      => _n_noop(
                'There is an update available for: %1$s.',
                'There are updates available for the following plugins: %1$s.',
                'noir'
            ),
            'notice_can_activate_required'    => _n_noop(
                'The following required plugin is currently inactive: %1$s.',
                'The following required plugins are currently inactive: %1$s.',
                'noir'
            ),
            'notice_can_activate_recommended' => _n_noop(
                'The following recommended plugin is currently inactive: %1$s.',
                'The following recommended plugins are currently inactive: %1$s.',
                'noir'
            ),
            'install_link'                    => _n_noop(
                'Begin installing plugin',
                'Begin installing plugins',
                'noir'
            ),
            'update_link'                     => _n_noop(
                'Begin updating plugin',
                'Begin updating plugins',
                'noir'
            ),
            'activate_link'                   => _n_noop(
                'Begin activating plugin',
                'Begin activating plugins',
                'noir'
            ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'noir' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'noir' ),
            'activated_successfully'          => esc_html__( 'The following plugin was activated successfully:', 'noir' ),
            'plugin_already_active'           => esc_html__( 'No action taken. Plugin %1$s was already active.', 'noir' ),
            'plugin_needs_higher_version'     => esc_html__( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'noir' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %1$s', 'noir' ),
            'dismiss'                         => esc_html__( 'Dismiss this notice', 'noir' ),
            'notice_cannot_install_activate'  => esc_html__( 'There are one or more required or recommended plugins to install, update or activate.', 'noir' ),
            'contact_admin'                   => esc_html__( 'Please contact the administrator of this site for help.', 'noir' ),
            'nag_type'                        => '',
        ],
    ];
    tgmpa( $plugins, $config );
}
