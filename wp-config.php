<?php
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
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         'd4p93)>bgl#zp$k5o)OI^;sR&5dDNZNWERe1m;,=X1hp#E7*LSbGbG&Fn1U^cfD&' );
define( 'SECURE_AUTH_KEY',  'hB&dip1Bg-ww`~=4B(v}{W/]jC>t5z7>_J2$W>e DjtEN$B7w%&VhbSU=p#]%47I' );
define( 'LOGGED_IN_KEY',    '< VV=X O!vC@L9ZN@|6;3TB XX4o+;g@9HiewAD0`ak}^5Urup3%A(Q6LB8{-L#y' );
define( 'NONCE_KEY',        'ygDHF[NP6a.B+p/yrAok8BN:{yj kLe#Q(:|=gb8Pt@C3{8]`h$tN25sppA.)Bu}' );
define( 'AUTH_SALT',        'YCpl[tUH)`wbZ^#^pN)~~#COSkgf>KzdKzY8Fgtf)08%TQ/S3|<[+}Y>7s#4>z@Z' );
define( 'SECURE_AUTH_SALT', 'HwX3G2Ao/K!@(}*padUm?sQM(I)-<Vn|Uqrfv-R ~09~~FtvG%S-q}jA7dcVy(UE' );
define( 'LOGGED_IN_SALT',   'LTFCa(`>[?DbZYKTzew#Z%sGQq^jvqBoVxk5=`~z nd,-w_To:1hXZt4Oc`%b7fB' );
define( 'NONCE_SALT',       'i`397p5*s<@_`K0K6`v6:c+7%DOd24)RjvSI~?]PB_[={Uf&8poE:-L)ypKR$Yj`' );

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
