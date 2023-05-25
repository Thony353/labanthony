<?php
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
define( 'DB_NAME', 'lab_db' );

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
define( 'AUTH_KEY',         'F%#;3@1&(z,dM.:V,,p4B(Vitm!_-<H[&(g;Mxq<fN>0xZ`Pqcc:<Mx_qJz@JIQH' );
define( 'SECURE_AUTH_KEY',  'LQDA<43wzB~xV~r;idf`QNXw> ^:]o6}|`d>bX*!0dO6d=m:*XSt<|o);M-NCMYm' );
define( 'LOGGED_IN_KEY',    '8%CcoL,?)C&{%kqr(S<j]fd^j`OGPu[ocQDO!9D$kz;?&Qby^rI/aHd ?e?.?:fn' );
define( 'NONCE_KEY',        'lw/X^)pjb)$[r ]ddk{Kh_?p{4y:&2{g(e96*>x`i5bP[B6>_PoG:-6)6`?j] _6' );
define( 'AUTH_SALT',        '+J+i@lSJsBIyG(kPOjk>i!xC81YtUDP4zH(Cdr2-]%z&|W$O?,k.m1fBJJXIpC]U' );
define( 'SECURE_AUTH_SALT', 'jHa6Q+~~Hg<U`U2xL_SE6(Pwy`YVvRnTSgL@ut)Zso/$]%nk]~8Pjx3<4U(Vm@f}' );
define( 'LOGGED_IN_SALT',   'eVAR[a6[+ lg9rIJKK|Vp$Olw&pN|1*~D`%zxm+% &qbvC82 >j8x@^zE<U4A<Le' );
define( 'NONCE_SALT',       'BCcom6AP%m[d_EpbGBUz=s`qv!:U(}N9{[I-u$#8b*QmlP5+VT?S-,]?ovX87Oa/' );

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
