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
define( 'DB_NAME', 'wordpress_site3' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '?7)qNe5o )e Z%quIZM%%oay+ieyVG6^.T@Qo%N-7n~:FI6 B)*Jsp: x-DsNO<E' );
define( 'SECURE_AUTH_KEY',  ':jGN58j3gJOtNjjx.{NP?V7D_W]H7o?QIpU;IzIj6{nX[#UW>CpQ+!ecfec#48=]' );
define( 'LOGGED_IN_KEY',    'Z4{DW=t(7Or.#AFo9_6G8YB30PFw6GIdmiLd|BXn-d]9A?*Nw@&FB^:ixBOrV[Cp' );
define( 'NONCE_KEY',        'zK!}v:,h@aW{^bXp.L[#0[9pbda|hkgP@Pd[F*Pw1u-EJ;*}rQhH|[UKBA4LVB?v' );
define( 'AUTH_SALT',        'wK%287xo}$e>pW;)QG3@_D1N;nq9_J}XFB:n7J(8.]i=>;h>a[t9bEx]Jt^lFU,W' );
define( 'SECURE_AUTH_SALT', 'L ]24vpMwyfoB6Uy0[uC:uFuN9 nOhQBY^YBi%px.$M<wh_ob=iszB1bs1|]R+zZ' );
define( 'LOGGED_IN_SALT',   '8%X7^<4)|kUIANb@BM, pG-ZDHef:3K;Qg B5^LMh*c_xp,JYm;X_KN2-b;lSWI*' );
define( 'NONCE_SALT',       'f]P/c|F ;L4Rs)0LEbtVpM5Tg%mn{k|yfoj9 F8AVdhyanyAkD`CC6($KB.UOw(G' );

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
