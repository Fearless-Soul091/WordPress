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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '~#l?Mr4-[5/(uT)zQnd}4t;.vSe+%3qHB|0jYDLj^TEo_voCTTglG&Kd(-O>Bj_W' );
define( 'SECURE_AUTH_KEY',  '=h:1B`8=M?^[)w!rTSnfJ< 2Zprn.Uu3wH9/>Byv3N1VU8>P&t?}d1q=C4;gQipm' );
define( 'LOGGED_IN_KEY',    'Ko8V}_`(NVO[R.Nzkdyy1(cgE)[$ezhI|OU]Hw5KZz(%Wc<h9VT9?PQe!wC&O.<P' );
define( 'NONCE_KEY',        'lXB~T];*4!i5pp;%Yzim~dD_z%W->fy]mT_>j+P$gb(Ac0q0K(307mSg?|LHCC7.' );
define( 'AUTH_SALT',        '~CZxr@w1EEW,#A`2Yd5}PZd7{!bgF<uhU`9>Wk:fiQHq6/8{J~FPB}8bDd_ivvQQ' );
define( 'SECURE_AUTH_SALT', 'At3ph[?z*(4JP7{V.a|NFlg1*~^e9b}J;e*Vv6.MOkLq+~QV?F.f{q+c_HT)NXw6' );
define( 'LOGGED_IN_SALT',   'W:MzA<xAC&BClU-oV;G1J1C[<o0@s;Q+Y1G@F)Kjr. G/>ZG#W}fF#m6_gK.Z/ C' );
define( 'NONCE_SALT',       '%l)OX?;@z]qghL2TgYt4~W,/PRyHD*.nJ8XxT]h7:y^jLj@O}QWdILV;z~xG q_@' );

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
