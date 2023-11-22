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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'medical' );

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
define( 'AUTH_KEY',         '&$1m;9GR[YwHfme%F`f.%HmmA*5|[uo~J6h7Z3$xHxmVm(qO~SR+eV9>,Pvu?UB?' );
define( 'SECURE_AUTH_KEY',  '6wS!T!G9eqpt7<ckmv^-V|L3^U!KLI%`*^!<b(4@wU1?Zg0wQ56s$lbFh;KbcG.d' );
define( 'LOGGED_IN_KEY',    'hl;$9@(fR25?YIyE!vB<K/q<p#kLa9:1L+h,A(MpBq)(W=tj*C6 WD3$W.afy4sB' );
define( 'NONCE_KEY',        '9RIt)b/3mz$bWc$_xu|0tRQd@<rA7mC-fQp<3H|0{fq(*]33t&mr<>Wrp=A|`VBo' );
define( 'AUTH_SALT',        'e<G9_rqY._z%~hE.DcX1,gnd, !{<egqV$dsM [aUqWB7|#,As+0B8U%xI(o)}$6' );
define( 'SECURE_AUTH_SALT', 'UKgGABp+zr;XYW?Y&DK0,Af5]6ep9^eE+vGp8T2QF<`r=-C7P*+mT[U3]h+O`>Ep' );
define( 'LOGGED_IN_SALT',   'BE+&h>N89Z^G,B@[D:bT%/_s:D*QLKMbebz)W);~^`>aQ(Xji2Q#!,w@%Qf>MTAH' );
define( 'NONCE_SALT',       'zkwpj~yKmx~<]W_p!mtX+*$CxWqvy4%9j5}STGS02kbg!6UeQA5f@5N0: :Ib495' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
