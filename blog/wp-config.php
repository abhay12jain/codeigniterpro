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
define( 'DB_NAME', 'linuxmilcl_cidemo' );

/** Database username */
define( 'DB_USER', 'linuxmilcl_cidemo' );

/** Database password */
define( 'DB_PASSWORD', 'd[7PiRvJg=f4' );

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
define( 'AUTH_KEY',         '@2va2=p?t!GkJoT6F-(z/{X<vZ;]3@4|?uBrY)@c+l|+&?.NFjy6Bn.x#>;d?50=' );
define( 'SECURE_AUTH_KEY',  'y=XXm9:kcp9l~ 3l?sYLTN6o=r6CjERwBTxtEkG&F=/Zg6v]oSM!Lj7:+Nn},;~w' );
define( 'LOGGED_IN_KEY',    '`a%$&B4,lDSq1Wot@Kh&1[*rldd>OP$X;/*Z!q}Y}`OO(jKRjC_E>MS%`OzQcoT)' );
define( 'NONCE_KEY',        'Fno6D1BK?~%JRk/r0_-F>,!66IC]9M?xz5rz;,CW_vO}RDJs Gt%Bd{kL%x>Vs!a' );
define( 'AUTH_SALT',        'Z^J7_k?&S6au<8mQZ}p2hXPC!;+U#Y%R1KZX6 yniDfOICZAf%boNpr_cO+%pcWC' );
define( 'SECURE_AUTH_SALT', '1,Xx5p.~Mzg`Bpxq{_qGY*EKj]lldiH+y&ko-FV_QZh:(y`g*2rA~s,jO/)^JG#9' );
define( 'LOGGED_IN_SALT',   'rSfgx|e;)MV+<|/I;#ncqxvq_RYPSjlFK/RbWNV(J5l2Ejz(>U!Xh-o)W; mQ;:1' );
define( 'NONCE_SALT',       'I83F86^O+7]&Nn!jq+E}^WV37#%/aixUcltG^U~mlo1AyOAR5xx=?ZzJ_&wna{6U' );

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
