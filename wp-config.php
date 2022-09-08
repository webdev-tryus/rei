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
define( 'DB_NAME', 'rei' );

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
define( 'AUTH_KEY',         '14Ly^xB)[A<0S&s7qe,oS:wFVjW;bG7]^8ZB(3-}kC4yPSnItO/2l qjJa<0][]]' );
define( 'SECURE_AUTH_KEY',  'oomUDH)2cI`Rp. L>iH1@HaBLsrU`xt*S(~Q(X~C*xyyU}mizQZh2?]:(@.=7Tml' );
define( 'LOGGED_IN_KEY',    'c;yNqlmFl1p20#.-;Fzg9d>G*Ub8vfv/=W%&GA$PonE&*vBM<*Dv<|KS<j>~l:2^' );
define( 'NONCE_KEY',        'hs;MPp^R73h7,SP*YKVljR=3lv-k;@@Tu;>N1{yN]r{<Rf+kGU*RE#pI#nLfVJn#' );
define( 'AUTH_SALT',        '9sK3Qp86EKvc%/d:&`8Ri$T!fGJIg4/[lv990K/upKwBbGWgZyb>WT8RQo? 1<*,' );
define( 'SECURE_AUTH_SALT', 'oRXf2fM&OxvB8NXd<{!,g,=1(0a#3VHd;/I$)yRN-/J4h96VPnnD>;GI%&V./rOW' );
define( 'LOGGED_IN_SALT',   '3x%NL^3,71g$}1/`kS_r.bfCzvG,#1VjB?fiBqqpUm/?88qR:2:R5/h6`c$vo* ;' );
define( 'NONCE_SALT',       'VnsEe-`aep5rz#bXU}i[b*ROST6nW)o089&+h7&#6uD!(>W~6rY5P?L&3@VyrLxf' );

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
