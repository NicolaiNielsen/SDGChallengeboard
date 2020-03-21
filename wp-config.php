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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sdgchallengeboard_db' );

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
define( 'AUTH_KEY',         'M881v6##FnoUpRT-<2nW9c`HSlxmL)zV<~J.arvdG./JTvW6nN(4QATs <g4e%&r' );
define( 'SECURE_AUTH_KEY',  'a*F)v3H}OgaI,UdEdf{n|:nOxlXo&voFT<K#{:a&~iTME7|Kl+8rT:zP?|XcgW:4' );
define( 'LOGGED_IN_KEY',    '/_S/Zl0WmhKG@HG!CpIY])PE7L+Zmr?4}:=TmF)2F>WkiHl(Sl{(b|+0({x `z)p' );
define( 'NONCE_KEY',        '33PC me^Jll3+l^p-9xSU.GN(-R3yn2nw(Xq_hOrHlD: XyT;zxd+x.{Ox4h/Ey]' );
define( 'AUTH_SALT',        '3@<om]:Stm%+KUf^>@zvF6/D(4*I,6-d-uC%!zO_&>)!%9E^>1upUc@;m,GfrS0{' );
define( 'SECURE_AUTH_SALT', 'c]DbxMXwe@N=`R6q7og*6k#^6f4UX%P?xjDY+bv9Bo[%<QRuH~B8[Mu3VG5s2BoE' );
define( 'LOGGED_IN_SALT',   'xK_-`~>3uriz0jTz)e]5B=[s+zQ]QbM[FcBw]16WSgYy6y^.4[$Y/R$ye&jlgIMQ' );
define( 'NONCE_SALT',       'bc]j?KB?(|Ybal(J3dKOy~a]6@WBStY@b]tmiN&>r{DGG%wfDtIr;{a>f}2Jd##C' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
