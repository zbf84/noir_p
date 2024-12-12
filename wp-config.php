<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'noir_p' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R7zjD;Y$i~Zw_,<#}Me$/3TjhR!i-e{VZ4?C<nWkUnl8!A}|$,%4=UgIZB!6MRwQ' );
define( 'SECURE_AUTH_KEY',  ' _Yb`Dj+X6Rk#XpK{<E/gn.OgVF$7#q+fpH=PP~aQ^ISl83aEYTu7x0)5JH)@M`O' );
define( 'LOGGED_IN_KEY',    '8?@X@,RyW51IxWvD%BcE?&tp7daZp&wiCbGE2Ru/`:%$(?BQ2)<k{Mrk5K25ItA2' );
define( 'NONCE_KEY',        '1:E=B9y0b#<fv&=wq^m]_Wb r&HV<]CLVD##PHuB,+Z1;AA$T)|^C,TB/7e6GX43' );
define( 'AUTH_SALT',        '/^3{sI2UEv2UI$B7+U`fL./|EZHi$*(5P]RLF<*vM]rZ$A3wasVK`9) SI=/U>-r' );
define( 'SECURE_AUTH_SALT', 'VbWZ[uXNfb2#xM|(m!kH|*u%v-M&^6n;bfP~T8$:G<+O*,fA&~j,&X@U#TX5 ] o' );
define( 'LOGGED_IN_SALT',   '7:#XCAm54civ1aUY RDX@/>.R[/MPr6P}4: 5*Qn,dUu]ux>!]O8lWgF{5LWwe+E' );
define( 'NONCE_SALT',       'hR*KYT#Qc;Jew{C(NA9yA=H&C7g_&sP2|FS%},|?fs&=;^2H}Ab.mmNYcRcf@$vR' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
