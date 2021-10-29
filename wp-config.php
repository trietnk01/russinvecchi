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
define( 'DB_NAME', 'russinvecchi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'abc123' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'v@oiouYz|-$b}Ua;cj&lPrQAnCDb0KTHnV9@oRZi GkC,>DX)6R0EiG(l^yCtHK+' );
define( 'SECURE_AUTH_KEY',  'WRZuDsqz5}cl:h}@9M<1r7gk]zX@N;s<seC3hy$LJ2MbX`b?dj |9Q.x?$.q-/l6' );
define( 'LOGGED_IN_KEY',    '6qv;#^%{Y4b3t{}a4poDUvf=;TNLsrvsOpV<0g? 4:OMGbp3gb__)Q2v4wgf|tqh' );
define( 'NONCE_KEY',        'suFs0).5.r-`9|c7:3q8&SUP%F+>3_,7s*Mle>c4.1f4/bNnVx0ms7xj0Ir>spR$' );
define( 'AUTH_SALT',        'R,c~r)hZjm6YJBbe$u$>u~h8%R;9U2mb=t4?1$,V/3I,>X~xf,162bjOHgBPf/Hd' );
define( 'SECURE_AUTH_SALT', 'K.!}:]m0B4~8POE%!+7,]:zN/S;Z9p[7LJ*G8j6~]u3,g{,B!i7Z}%,N^>4?6|c`' );
define( 'LOGGED_IN_SALT',   '-TW&:_R+lAs*@q=MGfVoU[oa/MHi~g97*8D@>U;Y+km!Z!_l_t,1TJ,[1mv=G]cs' );
define( 'NONCE_SALT',       '_iOs@$#{Y1vUamA$h&39)v n:ow.:XA]gOVj$9A&UkxCq?-W];o#f;W=jbc^+C$#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rvc_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
