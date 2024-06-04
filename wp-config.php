<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lisfinity-db' );

/** Database username */
define( 'DB_USER', 'admin1' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '!vw_3&T4xRG{Ett5Z*#]y?ej?O6um39t<R[/4=#qIH+{@|udhM9mUpC}_r0bo~&)' );
define( 'SECURE_AUTH_KEY',  '@}KN @tvO=kIc<z?WZh@j*:uJXPy$5.W2}8aRpM$xi36/XM0^~w5k_elCU1MHCIw' );
define( 'LOGGED_IN_KEY',    '%xJ @3l@1Y<Rc %Ab8W>EBVEn<[NW@M5!<ef@|&B`!z[Y7ycH%w|yfdgaom~TC G' );
define( 'NONCE_KEY',        ')mL&#_jUb=]9sA:y0+I~Ig?A~8L<$gn@9B_->i[EY5*jfG)$.h2:sjx-Qja1+Yq9' );
define( 'AUTH_SALT',        '7S6xD&,kZ6U/u!s!4Q(-P73aG :?.re8s~O5</#o_E>~v^9Zv$xZP:j~j-z8bQ*Y' );
define( 'SECURE_AUTH_SALT', 'A=sD=k}MF%%[ypPErfYYy1hoO!m-i>{Oal%T-jL0C~N3Rm(<*hMmUqX]t2:NJN;:' );
define( 'LOGGED_IN_SALT',   'T[V|[lRIN.87!PYelXc).9SK]p3 WqF2Q;xfh2n|]y3q@dG~xkh;O!/kvw>KmsgU' );
define( 'NONCE_SALT',       'r[c.I([T;eKF^FL|O=nk4g?Loc$07m|lC;EFRu2*3Zw]jGT4=E )wGm&a=oK%8L$' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
