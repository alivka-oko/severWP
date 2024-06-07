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
define( 'DB_NAME', 'sever' );

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
define( 'AUTH_KEY',         'ZOE{==uOl*Uip-rh&!l/#!Q/6oD(]vwTRGFc#W#]u_jci%/A-]3//FtC>fFV9wsZ' );
define( 'SECURE_AUTH_KEY',  'q]ok9DJ%bXY|tzfapqD(TbaJ_U/M|-V0I}vu}wMDR0BJ<y6>=Nh~SBLwcd(&Hxvw' );
define( 'LOGGED_IN_KEY',    '.6?-.& ~.uiQ/_ZG~T/E9$bn|,%_bIfS|ZXOy0O 1h&&SHLsVQ0W#Ry2x8hZ(`JR' );
define( 'NONCE_KEY',        'N!Q7Q{MJ+ZhXod(rg-TJgx`+#lA`x;vlK22enW;}q[v!`z{wtO6=G-F?H2iHScPe' );
define( 'AUTH_SALT',        'jFwt&5^6<&NFY_/[4SQ92&qqIUIzty_iE%cvd<e1_N%+p]rpXeu@#b01fPvn>`t?' );
define( 'SECURE_AUTH_SALT', '(eM5z)Z (^fDzSe9.#We12]by7i]O[?v`C`0MkU(gb*Zs?+NES)0bH.J1qBo#Ixw' );
define( 'LOGGED_IN_SALT',   ']$rt.67&GKSpy51N>(M?<.:UiKl?|ioot4l%C^i_}+Y8k>oi0$B|P;DVBCLu8gaV' );
define( 'NONCE_SALT',       'f+GuSc]JV94z>!IQ7FhWjgM4Jy[)a$xNoc~)>*Er`j?xs{^>nMi*AK{Y3Y~beM3Z' );

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
