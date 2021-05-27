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
define( 'DB_NAME', 'vertexglobal' );

/** MySQL database username */
define( 'DB_USER', 'phpmyadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'phpmyadmin' );

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
define( 'AUTH_KEY',         'WSfdce.4_~_:4wl`ZQl&lSl4u`!x)YA#1DkZNVudt7!#^P>p~c(dM%{14a:(|,RB' );
define( 'SECURE_AUTH_KEY',  'eP8MZ`]}^.?[(-bH850#$_ZRnnLf;;JN+Iv#WOzEt?B89/`!%UmfdKnv3hOl*K@!' );
define( 'LOGGED_IN_KEY',    '<(#]-UeY7I_mTBWE@<%X<Cxgv/5-dZD>PGLh,5YPV,q]qic6c@_glW7XfL)C(+=O' );
define( 'NONCE_KEY',        'Kd,Q36$c^4L:Bt 9F+h^&H)H>i09dn0A-)ECrjhS`1cQ,0xKk}7.S9_Cn^Wc1-tv' );
define( 'AUTH_SALT',        'an,@z?zj/SS@e8RQ4`BXpo^M3@ M >ulIAJi}Ng}j,-s/cJhx|grC~=% ]E<u@wy' );
define( 'SECURE_AUTH_SALT', '+N/(d^[4@3{g@pcHT-&u`GG::rx!,$a9:lfVVg}]S}<+[>d-2 *%SMz<,DsG<zl{' );
define( 'LOGGED_IN_SALT',   'iwIA&AUnT8_h6fF|;}CCIF.7-;_^$jOSq?AmxplI#f[Q.J*{eUrNPh8.)k:CzB6w' );
define( 'NONCE_SALT',       '1ty<A=#e%T 9BC[rG5(O(BU$VYX+/?O?F_T7rmoV%eAjc1(qIR4U;E,8@fko1v)p' );

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
