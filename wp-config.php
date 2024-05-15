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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'ABMgULCbMV!lT {&WJ5/v#wIsB?L.=?f+M#k8re;2IJ31 >E.6gkqi{3fa0g]x0~' );
define( 'SECURE_AUTH_KEY',  'Y]eB<qwcURYwB;#|n&yW?#g%yE,[:LEJPW6{mmZnnac1o{M%1GrnsGGjt./.M/R`' );
define( 'LOGGED_IN_KEY',    '}@4rN^C0m4{Nf6G%M:J52t@qIe<$nHdh[T]jiHQD~c2tJSvVt78lC+b`*=/`jl1V' );
define( 'NONCE_KEY',        '#jcp&uS%Vf|*N%)_j?Bzd<Wh3_Lu-qSnTlTa*k3}x8*]c5Z?ycIk}|&crLI}qhyW' );
define( 'AUTH_SALT',        'bYwdY1;QWz^rgX<f08WhoA)G.=flm02)D&(eC#6R3{:q5-Gtov*$CW%,}C&O_DM_' );
define( 'SECURE_AUTH_SALT', 'h4>N?e^s?*,:Yx8z3cz(@QrhIf*~I%[SDN)M*Rf,^W!V-`QLSVsK<*4TGNr;U)K)' );
define( 'LOGGED_IN_SALT',   'q#d^X-@q.n?$$cRIREA=$w+NvJ)fL`gtB7Q$]%JuD#_ ^kdO%RZjrd,Gn}X!6WLq' );
define( 'NONCE_SALT',       'U`OW^47>FO}q?UDSRGe6+0;md7(uGd~/v8WW}CeE3wg$afVgIIwid^/y!br-QGYQ' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
