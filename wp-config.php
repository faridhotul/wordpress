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
define( 'DB_NAME', 'wp_learn' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'lwlSu;s$_U?Wh*EsMvdI% fP;JrZENVi]Vtl Tza G%`xa~WtaKoNds`OkNP+Bq=' );
define( 'SECURE_AUTH_KEY',  '.1#T2p%9l`JoIuP]?}.SCFynDW)=D&^0zN}y^yE?75@GshhoSXjmALpe GuV^9vz' );
define( 'LOGGED_IN_KEY',    'Z,+M+Ax3M+/8<E@5>weHR ovu-8#A:6?flFCaZ:l-US-XlkEuZc)sb}`X/yJ?]&Q' );
define( 'NONCE_KEY',        '3tij2%EF`R}:6]H<kw+EyvG|[I%Gv%x uhl.([#-|x1xzc`SNI/pTn;yf)oOY?_T' );
define( 'AUTH_SALT',        'x6;Obdg|1s1ZsdBYz;-+00}X[w9Rs/!}G$`Xv%o%Bv7O35M`a90S ZE$LeMZ/,P3' );
define( 'SECURE_AUTH_SALT', 'OHw|,8p}knaV-?+O&m<aWK]ClZX>MZ#0ULH&.AY1iV4o8]>9XG<xRo@nY|Z`;2j.' );
define( 'LOGGED_IN_SALT',   'KP$079 xZSJqxV6D4hQ&%9s0t]RPFdr4P%}mz]-teJ.YrDNqJ.,s_E(1sXZdMYfg' );
define( 'NONCE_SALT',       '{^HKks{RR0BCzr#vql1#>b35t$c|k< +uxZ>o)9IhPH_Kf8dFy:lv2^xV<)|rH12' );

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
