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
define( 'DB_NAME', 'travelo' );

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
define( 'AUTH_KEY',         'UoyKEF;h0~x<!8B2Jf-iPaAb !`v}`s/2i/)c6o@5yD?zz{eM#h9?Sq <@F=gr:A' );
define( 'SECURE_AUTH_KEY',  'y{CAsL{#rQ0xD8HvAKDPAhh`bWcSg`k6FH]gw21kfo{VI[ q)Ur3y~-fdUKo^mEm' );
define( 'LOGGED_IN_KEY',    'rNj.yF>=#KJqK)]j!N0lN<kg?|W{./pw}5&9xD[>E_/NT#FQd<y2IKN[hgB2oZ7D' );
define( 'NONCE_KEY',        'U!oW<g_qCoTpm9A1(OPPSoT0XG9n]FKU{nnwyxTa9{uv-/otd~[0<` OK!N9(|`T' );
define( 'AUTH_SALT',        '.u+IRDd;b4AzvY%/Hb]j+vwm1|}%u1|Ox$1gkLDm.Tlln!J5zv=eMYJu4Q1SEYrW' );
define( 'SECURE_AUTH_SALT', '91,Jce1>7$ZvZr+GKp c39qf2o~gSX>hj+5JQ#qd5,KLR:N)S5z.gm0%u+)$-2o`' );
define( 'LOGGED_IN_SALT',   'lw*K z$#=d-_J-g5KD/mt-KrG=zMZ{95N<JCC*_3Sfp_Q|$>zqmoc>.R7uS24) R' );
define( 'NONCE_SALT',       '>D=Or_J4qFw#MRE!*iAz}E)?!&E`Jpj#o#z JK|}l_B[pYZzRT2_=p_AS1~,{>|m' );

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
