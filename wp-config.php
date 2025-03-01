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
define( 'AUTH_KEY',          '+AqC&VkeL4a2#+h~`[O+U$UBeG$$8/Z+9U8P Bl%cn*Ud`im]JGQt!&e/f&qG-pq' );
define( 'SECURE_AUTH_KEY',   ']T[31@otwn,RyDU?fKo! v:<+h^]T#c` U|@sU!4a*wDcpFLM[2vP}YJFkS]^qz`' );
define( 'LOGGED_IN_KEY',     '1C%w6!1Gi<X<HOT{XO>x%D[0@4I=N-t(wQ/qo0aq}e3CHq!+>!p1z y:<cwZF|:}' );
define( 'NONCE_KEY',         'z&N=Av]T~5]wexNc9c*Rr]C.w(.[+28#{[)Q(5}+~4YV7rNw|w`!+r])QR@Xrrw1' );
define( 'AUTH_SALT',         '<(6^~?_qk(/D$zLDKIjz{^vwn.>%M!ctCNz1Mk5h:Y7^v6GYj4h7S)tSUTF|;!wZ' );
define( 'SECURE_AUTH_SALT',  'mfgpU38ry:=O=GZJp(ZKK9:I:h;A8&Nan:h{lwod]b*),W$N6?;o-GIuKxIj8M%e' );
define( 'LOGGED_IN_SALT',    'fknXw#z)kq;dIXm`FjY:c:H;9|h~s+CWf93PT)DF43!aq,a9Ug$E{y[i)~pkN^g+' );
define( 'NONCE_SALT',        '@786o2`5%Xh$zfU`7+X-~X,s3AXSl2>A;?.t.70,N#@;>M=,-SS;SGgERx^&)fzj' );
define( 'WP_CACHE_KEY_SALT', '$[!5_M(<wESLcr956NQB_w/6;weL|ILF-213,K/B!$tHa#(R>V2Yt6$YF&nR`@q8' );


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
