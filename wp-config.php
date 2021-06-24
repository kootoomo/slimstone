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
define( 'DB_NAME', 'slimstone' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'NX!-lcLO<cR%|aJ(-*hpdcR>Kp{5nVg``S!w4sJPmyCPAH~]W<QT2{`(FAiWOP*~' );
define( 'SECURE_AUTH_KEY',  'z-H_bI%y x45P3IbR05lU.xo-wUZ95^5Pa_c?DcNVZkdl^g$7D/ST1;V?Yf`43oA' );
define( 'LOGGED_IN_KEY',    '9/S..!;38ef;IDCx=P|xD4~,4?S{$F!!.Y(L8Ue{Z*(SkvI!5{L>Z^NqoVt;7);`' );
define( 'NONCE_KEY',        'W$fr(4/{X-n:PFuPiQME/HYs(R2#>=^B7dbv6>T~9#j4?1L,rl(BUpXc<|7=5a3)' );
define( 'AUTH_SALT',        '?yW-DvS&vd.ev#tTL<hga+bygCr./sc(Y[vod>S8xHhgPO*)!7x6Y_aCXLo+x+{!' );
define( 'SECURE_AUTH_SALT', 'A=USrQ6VlZRCb{.usJg,9B}?az pJ)73`j// wIvisgRFkor)J%a2/,@x1YKutK!' );
define( 'LOGGED_IN_SALT',   ']o_QSADe@-X~02B*5Dt^TM<[o47DWfa.e@D%q.S3[Km_hOidu7cQ_%F.R}a 1CE9' );
define( 'NONCE_SALT',       '%rsT<qHu67Y-t?_1fktYuAWb(X^fD-scP7,Hfe(;tQ#d.mk`sgu[8(BXmHz %:?&' );

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
