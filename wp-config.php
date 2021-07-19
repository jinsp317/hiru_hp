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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '*ev]paMlg<3QP~^,7jU#5o;p?DF&ZVZ_o{z|w}h:UXS56g,i1d}yPkI>0YIY]f=h' );
define( 'SECURE_AUTH_KEY',  ',[tA94b+(n&R?bCWaSxkUqBdIzV50O[HOm_u{eI(=rA|B7)c4z KUdGz*@*,;Axx' );
define( 'LOGGED_IN_KEY',    'CuD=0SbN:ejrvdZt~v+@*Ne&!zDMaiT~,[:,vK0LhZzDDkG>5Xe%U/_#}Y(>&`rh' );
define( 'NONCE_KEY',        'Qb3|kIypqv-|&M/7roXP%hTCrP:A7,>ee^i!tD?[AX3|qkY2o+_AvQr*_`.+P`&x' );
define( 'AUTH_SALT',        '/d9sP@4s+<pIcAqPz%$UVy*V9:pI(r7RnDfo+y^}B#w}wqW%UZe|%J0l]`.B1bSR' );
define( 'SECURE_AUTH_SALT', 'W~r>Y86l1Eys]FzeDQ[DptooQ.#K=1ujvE|cW)NT:k~UH(^wi;>^N 1JSS077,`?' );
define( 'LOGGED_IN_SALT',   'Y4n;(sfqx+}/w[uV-$tKh!qlkt0&C#WuCw-z-u4@7uQbxPNV2AX:j~&Og7Teh879' );
define( 'NONCE_SALT',       'eut>0(|,FJ~k]o1arG?Uy)2oy&@%A4<~@wHRsA|0kn$(2=S83*Kt3}_HaUADP3v#' );

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
