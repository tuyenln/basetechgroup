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
define( 'DB_NAME', 'basetechgroup' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '<SwV{]X?a@A5Gh*KdhtsC=T8:!bcAwY|([T?ni@y^|}lp[VR5@Bt>,&N=W`W$3oz' );
define( 'SECURE_AUTH_KEY',  '<u$xetx32hXfLYWvrF!RlpfXG2l%{,|I-mxgv<&mfFqa5HgC4ioFr& ?Jxn*D8}-' );
define( 'LOGGED_IN_KEY',    '*XDRz*_eiYxTdXR)~pj~jv)35iIQo&+S50i1SKpalOTLu9Kt;np6Ss9Ria<4yG4!' );
define( 'NONCE_KEY',        'J)LHr5f,h[/A3QXCsANDML$|v&6.J=:#;|rn~KiA1(HZ+3,iG1&U@{GUF*rg;Rba' );
define( 'AUTH_SALT',        ':% 5{qP8`^-*,#wy3s|xLICv}Em@hO!!((k],!Qc(>E[OA]7zMl4T<u+.amSgPoQ' );
define( 'SECURE_AUTH_SALT', ' XbKt8=j,:C/kd_G-}.3a`%D6?-0!K5H9]qPvbxejImVB%V;xvazMcxxXE[(_q``' );
define( 'LOGGED_IN_SALT',   'cznc8.ghR(1F|$ ^V)OE9v~,ZaR^Rgg+nc[v.y}^|W@Mv#{}w[mG(`2j8?VYny/L' );
define( 'NONCE_SALT',       '-Wv2@ztJzFKaZC&BL18p8SK,y(P`XirP=2D_$<IrqN39+cfCBB{DevkubPQSYVHn' );

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
