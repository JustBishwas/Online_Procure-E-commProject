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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecomm' );

/** MySQL database username */
define( 'DB_USER', 'Bishwas' );

/** MySQL database password */
define( 'DB_PASSWORD', '7__KUxLBh2)(@p)x' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '#VSOF/$t7N$?7[3.kr.Ybf^0u)?!]oxE<,Tz/@Z3,1C[(]){#~t7T+(%hk|P-|A1' );
define( 'SECURE_AUTH_KEY',  'jg*q[~-~0IP=f{cX5w8Mw9_K0E:[u2B&/b~@HMwhlV:G%}4OHq~p?xkno]/8qp_u' );
define( 'LOGGED_IN_KEY',    'T|J?ff*&Dz]O>8.KF(GaND@3z]nNSK^(#l8lJ/rn~q<-F@d<,-kBImNAB_hU5(NX' );
define( 'NONCE_KEY',        '_< @mWi1-uWh<*5Xb@x@$xYmjA>h^7702^RLt#k {T8L7{+|0TYVCNj>+(Kg?9Cf' );
define( 'AUTH_SALT',        'UZK~,Hzw49/D!iLoIVewmFF9%vhCywY9ns>D)a4iin<N!=zw_DDo_KYgzE7U#e2M' );
define( 'SECURE_AUTH_SALT', '6}-Ry*Ss1@txHeE0b+JZWe%~31URDbFVK8q-a 6a]s%1z -=<y(laeV}QP?^e#h*' );
define( 'LOGGED_IN_SALT',   'GhX}Io=72k,s8/?,!t6:XWraH)B(ZZ]jh*xvPt<):,</|-mu}nu5b#!L(e6qV(Mn' );
define( 'NONCE_SALT',       'nVe(qK+wx#w<{,>p`d[DRU;.!DQ}z|!KA.Aw5uIi14]`f1;E8sw*v9$,[1zAdXo=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ec_';

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
