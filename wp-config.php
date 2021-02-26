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
define( 'DB_NAME', 'nextinn' );

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
define( 'AUTH_KEY',         'EI}L2ZbX[}~oM!]UnU3^u&yZCQzcHSq@|YuAAebwP$tA^nLM@KFf2Uy~tQ<AtGsK' );
define( 'SECURE_AUTH_KEY',  'C/-e}{6vv3&C|2s4WmU%N.y7Fn]$m[H/cQZ4{uW`>r0S++OSX;43ag8NWbwH?jup' );
define( 'LOGGED_IN_KEY',    '=S23DZ*Epom}2Xt8,`:Y9j%6Bw<-q-m`hq4@2keIWiL,jVw#Jao.t*7 ekFqYp({' );
define( 'NONCE_KEY',        'b6wbSRdTQ1Mz/iez,cGGinj;P^fk<+ TN*W_9:~EySkJ+;:/znoD;K^~CL22~Z5[' );
define( 'AUTH_SALT',        '~CPw#nt1~F]A4=_~nl0qS`o2XFb#i9M#m?Il`Jq*/8{,Yc]rrfy0N&g8MMV.fRtx' );
define( 'SECURE_AUTH_SALT', 'E=B3c<0;TUV;<p^3Yk5;h%o)`E^$E..FQ@Aa]$^k3&DKa;F5JSC>=HPYm`(Nwwqu' );
define( 'LOGGED_IN_SALT',   ':_x:FT*nKygXrBy}<8ucE&vcLZ.$y9DG,SGoU<-<8!{Yza|M0l)^sIg;GyoDVNgA' );
define( 'NONCE_SALT',       '):_2ZzQ>z%@CJkWpOVx5-wT@>PBI?]KOtJM_y{{7*-C,!!_I4 % G Ie}m/dru$3' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
