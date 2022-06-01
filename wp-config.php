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
define( 'DB_NAME', 'wodpress_1' );

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
define( 'AUTH_KEY',         '![}MtR:}t~zh:~5iho=d%b6GT.EZ/HsYH#@@{UBfOHn}YNXQCKF$$?5_Pvz!mN[Q' );
define( 'SECURE_AUTH_KEY',  '6C+g/<Y1T,}3|k<O OhZ4UK3bV]8M?QboqEBG!VFm@F,[Qa%`IK))zmR7iCAE:*d' );
define( 'LOGGED_IN_KEY',    ',kxgx*;/j=`y-|xf/_bv`&Y.?SM:wI?PZYNg2K1F2|wbm&7_d=%Rf9N:R;E0nx35' );
define( 'NONCE_KEY',        'N}uwO^d+&2m[|h^__*yP]Yo&-!-[Qz8E,vp/<J>nhw,<F6R`e_LpuMP3q:~x+IoA' );
define( 'AUTH_SALT',        'v5)bt1B`JA~){|8hwPM|)= zh@H@K|Uh.aI#R|{e24js4CW9?`Pia$aWHW*tDE=s' );
define( 'SECURE_AUTH_SALT', '~lKg73<AHC~5BAx+s~V*ht@4V oy6~[Q,Z$L^1Eibx>=*qmwzo-G$hRQ7H8h)@q ' );
define( 'LOGGED_IN_SALT',   'Z|PBJkzV1X,i&i1ml3j!}*AhRxhu[@*8%JUtDDB/DSa/84a /aP]D7q[E$8yJkBR' );
define( 'NONCE_SALT',       'K_;m8enDImLwwp)t6C:?27U64qm8-f-}6 a|d<IS}aN)1m-6.M*{lrG.BUc(,;B@' );

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
