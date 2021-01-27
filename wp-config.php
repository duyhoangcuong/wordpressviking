<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vikingwebsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*b!s ,f(>&]q*CD/]:kU~nK[3Y;|x4n1RUv$iKwbMr,`:</N)jlFzKhM|w8`-,xT' );
define( 'SECURE_AUTH_KEY',  'vm+ey](F]$psCA:WR_rrix#PTB},,&ti}Y&$-%sv7L9QZ#9MP#>l-<EWTu[<nr?#' );
define( 'LOGGED_IN_KEY',    '/E9cxxV^(xkNq@~90*191iua*[aH1to]>Xo~Cd^U_<wSeIY8wl;I0{^0k[zvr0vK' );
define( 'NONCE_KEY',        'qZ=)p[h^I|6KV[11Sz.2o)pC2ktf(aYrP%!kZd||;I^Yuw=]752Lr7f:;NlW|92X' );
define( 'AUTH_SALT',        '01Y,ky#DK<a~j:V9WHg8;q2T9<6vs1g1OiG4~IhrsR_=]_-+[1;4!rw}w&?1|6;K' );
define( 'SECURE_AUTH_SALT', ',I@T/t`;y*-TVZncff)US{f?tWQ)lNnheiQ*HC{!NuGHBr8@~jIoK$k#i.([?/j;' );
define( 'LOGGED_IN_SALT',   'd~`-n&o^SeuZ[3#yW5hdBF|l<-<}m?~;>xw@S0Qo=66ef(aSBCYVj; N;9FD+5Ql' );
define( 'NONCE_SALT',       '&:,(ir`&.~]sb%tiLk2(;M-}qrYv!OCY2.+Prvs@kaIOiyFHE I^1Ko<DzpA:|9u' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
