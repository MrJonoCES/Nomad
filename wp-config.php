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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nomadsun' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'ho9u6ENng3yvt&w;x;~T6HD+$ !:wLs-ziWoNc<SV:5!,<wOtSTg[uyKq}.D]yb,' );
define( 'SECURE_AUTH_KEY',  '`vPG]#?g#JIc8{2R-B?egb[ s@Uq@k&>vR5wAAa;_f#TXZz@-ZJ<D;|@3!<q3/wH' );
define( 'LOGGED_IN_KEY',    '|q$q!a.B!ja(h$2&e W.bs#pgavgi&+mv,PLL_`#).#OH CLs1}(Y7W!Yk8Ui6dY' );
define( 'NONCE_KEY',        'pzuIY.myE@yLKjR]i=<:nKskD4]oF,T-&,f)&Oj:;!ns}JfbZ&0QbGBBwKQK_:Ep' );
define( 'AUTH_SALT',        ')N;+)y)3t0T36@N%ICTGC4onMcI~=4Z^MdG*NGAOfg/3zt{]QU-jZ/<0}uk#t],5' );
define( 'SECURE_AUTH_SALT', '*2v}qq74?P5I0vvG9 (_D~D4&07[ 0wu:CMx]:BhO89x[mK`7btC`z_~l#of(<S.' );
define( 'LOGGED_IN_SALT',   'W>Uc.4lP.!{*-@<3cS[RSddb)A,mSo2wVY%YLceu `37X4NgdtsM2z(!PIwX{uCR' );
define( 'NONCE_SALT',       'Z:Dp<_Q_WB@1LQ&K)0[@dC8L{X$RKESM.K^zi5T+W%^/nZ3QfQP&[gxNVQ8gG/>2' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
