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
define( 'DB_NAME', 'ironshu_db1' );

/** Database username */
define( 'DB_USER', 'ironshu_1' );

/** Database password */
define( 'DB_PASSWORD', 'YY8YricvXi3bze9D' );

/** Database hostname */
define( 'DB_HOST', 'sql638.your-server.de' );

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
define( 'AUTH_KEY',         'bk(LYXX6M^<Gv>G^Ez(`%N;w&-}Qnh$R A/$T|ZB*)9]G;2j5-N}ua>fQgRGbo<A' );
define( 'SECURE_AUTH_KEY',  'KIhGgSG8CDHt]i<GiE{q!v*$E.g}g_wWvKba-7zTH.$jOxB56|OpYZ63@4i[:}Bv' );
define( 'LOGGED_IN_KEY',    '<#D#^_AwjZWVrc/ibF^-`wfst2-=2&Vo?GPB7/~Um_-+;!c{yt<-&+, &uqHkMB ' );
define( 'NONCE_KEY',        '+Cl[&l}Z IZ$Wu!Yk^L>ncxQq!4TBJ+aaKh%Z*&^:U:uqIhU7yE]vQySA:t:/^M#' );
define( 'AUTH_SALT',        'FkGtkp|`7da2wlpzc6t9sj4@g>CKP9.(HuFdWh!(mF+t`U&GJ_vVULaPCPVlX U/' );
define( 'SECURE_AUTH_SALT', '_XDd{/.d&>CE70xIt>#32l@<L OOx}l@*oS#X|CxI#$y!3br+A)-i& *O/u<U&>#' );
define( 'LOGGED_IN_SALT',   '%bZk&fMM:A<Uz<(:]y9~jF*!~I_YSewYw?lcm}D*AqMY%^p%cV]TRI*S).w[;Vr]' );
define( 'NONCE_SALT',       'fS%Hmdz^Ow?+^@Hkyi-KpE1!<J7p|F:>,(C%UeI*m]tb-S:cJRc<Hz6|0<GM+v? ' );

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
