<?php
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'VolPJRj25eDfRjwKvOTkYmZuSlnm1iuLqnF4YAKazY9Qrx6y4drY0PgpxeYajkkw');
//END Really Simple Security key

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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'admin241014' );

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
define('AUTH_KEY',         ' +s.yvdeiQ-28t$VuFqFgvm-1LY1=dtwK()>|D=5|$}8$5]uw:<CdI2{Qe=l&YuH');
define('SECURE_AUTH_KEY',  '2^qmH=P%nENun+Dtx8AHqVVlta=?|}e:px.}l~7o,Qm*gi;OM-?/td|g++_qhv|.');
define('LOGGED_IN_KEY',    '9R$ud0l?YwU~]4qz`)jj$yC=s4~IiDjO}5$!S}{`C=Fdqw0O_}ab55IFn8f|.yr^');
define('NONCE_KEY',        '?Vh=u&a<NHcg|z|_5R(EBl2hn`wZG-CG^tJnh`S#uwO^C[W+*+l=ib;Bw]5M>vUq');
define('AUTH_SALT',        '$/}g_ffCNKqnZ>m[*a!-@I-qIZ5s#+udk &XumED[`8J([~|ea_!ORo/M*8rnlUu');
define('SECURE_AUTH_SALT', '8dj,<@S%VFE[C R)R,fn%R%/0W|pHmA4fU{dS)f4s5cs#T$?HhY=vk6~5bd$-*Fz');
define('LOGGED_IN_SALT',   'lBlG~eYW+Bhs!1nW@N3`[-ZgQCF;nTZ{+&_a{G%xr< u+,!oe^wle6QJF7FTJ~HG');
define('NONCE_SALT',       ',W)dGE.)J]Yu..v,OB%q%`T^;NxJ^({X_<0&4c;4`0q.<;%o}9EwE>5k93y`ys;[');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
