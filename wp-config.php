<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wp_wds' );

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
define( 'AUTH_KEY',         '^3&QpjB6%kUm3(|Br<%MbHK~Ypb(sKEU].313DH(GPpjI8a<[o8@4,QkjBl4B1_u' );
define( 'SECURE_AUTH_KEY',  '5B AB1_G^a#b2qB(^Z3WXX ?J#9a(kNtFvHX1e A[^2:9f`E/tOuFI[UYcTBXd+]' );
define( 'LOGGED_IN_KEY',    '^F[^1Z}bh)e%9*RNg/kHA7R:a5>oie!j[.$3t&NO$FfL2[P/:xmUS(~3(:T#?tTp' );
define( 'NONCE_KEY',        'uPRF==>%`&i0wt^kpGqn_j+[ZtqAc,-6-5 m<nV@O.Z`~@l$i-bAC5~?-gB#v)W3' );
define( 'AUTH_SALT',        'R{ZCuPJdOgmTlFgXh2U`:*),l*g_:CXRI02+Ra9x}RSU;te?4x2DpMD]gJ8CTpZs' );
define( 'SECURE_AUTH_SALT', ',{eQQ!TV_fnhb#v]jCX3W}*(LkR]9,f^Q `?v0=ZLC+XMd@P*^J,iO#r.Z*t^0mp' );
define( 'LOGGED_IN_SALT',   'U?[TLQ(/j]hNp5(FO7fpLZc{1:MllS0}fBuIuVz1YT=Ay:68HH-tUkk=(:SNn==M' );
define( 'NONCE_SALT',       '>Yj.lY>.N}*]&M3v^=?~Vc;gJ]r5HZo?g(0kE[yJIAz(YEqiWS_U>P|zn.`^^Z08' );

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
