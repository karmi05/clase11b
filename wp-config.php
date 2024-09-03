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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpgit' );

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
define( 'AUTH_KEY',         'I2w.kUt7z][|y7_W-+w[_r]% f$x]X&}l1,}P||aOzGFXd6KCZLbzU.#;rv)V6aS' );
define( 'SECURE_AUTH_KEY',  '{C0< 7|iY0i;j,)pSuy64!dsnee1D[sL>wn[k%}D|=U.p]KyoGZJ7(l4&Q-|,4ZJ' );
define( 'LOGGED_IN_KEY',    '(/ViC.98.jY*$[2+z7|(}.b):Jl3^yg.^U-7>(3POi^uM3KZV[Z{yTaig3;FIO`v' );
define( 'NONCE_KEY',        'K.(ek;QJ-#1IXYYjw(VvmbUuvL1d2N<qqEnDX9x8H0LlB]MOw{(5&ax7czN:E%S]' );
define( 'AUTH_SALT',        '*SVI=W:MHekTm,RTW[JEV9=}(HriF0VoB!,c?,L;1p7zER;A2?5mkDp,Ppxcp7^&' );
define( 'SECURE_AUTH_SALT', 'SfH~&M=_kcu7$_RP gfnu@gdghov6k(#C!<4)J30O/>EJ9WJk,Y7HgIZjd`~J1jX' );
define( 'LOGGED_IN_SALT',   ';f2BpDC{$!Cs4Cg@@v4f@ho57]o6a3kH:!Qi#w`GqAW;rrLe<*tGn}(tx8,U#2[n' );
define( 'NONCE_SALT',       'J07#,;E,4v9~~mIqKLEo~ IG2i+zqnY`|7;+Z0eLBA,BA(*df(P~a ^U]Uz{r.::' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
