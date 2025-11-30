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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '?LE**(`pQO,$_bu:=rb%57V,*.%5%71ddSH#`(!T.ud%VJbQ*`jMkK,J^sekP2bT' );
define( 'SECURE_AUTH_KEY',   '=l29kQ|11Yr>s6RAqs-;R!|wSC#bk-<L-l/%6<w5Lvd*v*{rNyUNcaIyp;)GD.Jd' );
define( 'LOGGED_IN_KEY',     '?guSB4X[`Q=o_Ab^>W!SB[%`<BjWDf/uI0|Y(5(>Xuz}AU8E]Em^6{|Zc9?RZOAl' );
define( 'NONCE_KEY',         'AVI+,&>TlkBg>[ef7XYGoc&B%*ZCL|c|*(XpgZop],tWu|!vad%[R]eppC&N<zrz' );
define( 'AUTH_SALT',         'A2mR`PK8f%?i5Oi!i/w|;7:N gG*pD#0+GAKEQ$PEJ|y~vxLT7Ge]}_W_#GYyf0k' );
define( 'SECURE_AUTH_SALT',  'Dd(,Lh_MWBaZC_.bMh[x5aavJ^e+,a>b+YmcG&r?u],YqYf^B/~RK_XPpG[ge=aq' );
define( 'LOGGED_IN_SALT',    'Wcy3QZ1:H4pGpo`bXk0.Zr<H2W}E9T1=U[RiZ43_rlkn3cJlz9r+a(^Q8Dl]XwUx' );
define( 'NONCE_SALT',        'b7)UxyfZ,9z=+,BFT0lXN!/Ln%G$a4pn{2E>4F6]|W=!P&[8DyRi771fV_[_+UW#' );
define( 'WP_CACHE_KEY_SALT', 'Q~|a`~?F4Lv6pE2rL!a2yLET6SqK:e@`{DMfNKBO5K^L*R.yR<ZnS>Vb^KAJB`&t' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
