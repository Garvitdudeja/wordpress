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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '+w/!0wd6zivjm:Ex#aMkG$_ORlDT^i+!$8^iU<R7be|/F938d,(h{7@Ipx~q)B*N' );
define( 'SECURE_AUTH_KEY',  'QQIecxl}[?~<*YV,G;CQ&]Pl@9j^ro/(DGq}|Et7i ]qk&M$V9`!a8=)@!a>8xf4' );
define( 'LOGGED_IN_KEY',    'WEJWfn1&w[x~R^@ect)f+`]/?oKf71aES3D~22/3?gy6DK_P=rnZNfYBPyI3Ldbk' );
define( 'NONCE_KEY',        'w,/]1K)CsQ_JI](JU8&I|.X%l{[^0At8WA@g[Nk8sOk`#U]><8Z3CmH%mXPrL74K' );
define( 'AUTH_SALT',        'SX;kv:4}epHB-Z9t4b|r_#)R5t[X(:M+iN!|QX=VXZ6tkJ~-H}P>y!-Xts]Dw^Q>' );
define( 'SECURE_AUTH_SALT', 'TW+?%EF&Nrsn(--9x)H3tY Fh=U-z3?MCs@`BrK`#W/BQs:`os{BKD7MUH)yCRr4' );
define( 'LOGGED_IN_SALT',   'J+;h!/+Pu@uwDFNCf!fSSQ#S(e_G/0?lxMl{CB0 *i &1;T0o_jK=)kqcbM!St[m' );
define( 'NONCE_SALT',       '2E=]H!-Ck{],5I#B8%2ajm)Q$T$KWc^ggXoEu6pTkSJ+dlUg5W1cBCSV0>^_S(f]' );

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
