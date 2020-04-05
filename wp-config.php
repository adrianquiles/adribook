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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'O_pY]L?ZZ&+)[Vij=DipsH>$g&!423U;$sSD[$da1wSD6uShBKh}@H~Z49{HG>L]' );
define( 'SECURE_AUTH_KEY',  '@&Ixy>HS~Wa3*Z,~2.H~ZJ4UO@)4_|h^Upgig~xD5g.)MYlyU9u>r9/3q?SLVu~^' );
define( 'LOGGED_IN_KEY',    ',Kf2ag~G%4Il8O n`gJ:Q*:{vp7F]]K/]Yp>-i2O%afF:d.j/7-M-S>zj9l&mbOM' );
define( 'NONCE_KEY',        '%Ti|3)]7r 8|/0,lamNB3-(Iq@0OQ+7^E-gtHewp!fnNIj&^4@[YJVh$%Gg4T1jy' );
define( 'AUTH_SALT',        '6ApGV@T)OsIFu5OVI}r9veJSffYghV})U6=-SGS5K>eGu#V6I8Ktk#x#,m{f%T6b' );
define( 'SECURE_AUTH_SALT', 'Y[yn=&c1mDp}Ese,F`j===psd(hC9nZzv]q=!?Sq5ODJ5C]3hANkR+G+vG>-e{;I' );
define( 'LOGGED_IN_SALT',   '<hA6+L7 =g$QP*n+ih}j1g~Nj=[pmFk6O9F0r*-cY&_&v%QWG!1*q>|;gN^]/$?^' );
define( 'NONCE_SALT',       '/OuF)]jI0`F9.l3zIY6PiE#RJCqT9KQRoP2gmFISRMuhK^.dk8^A9RN0p5wn@Q_W' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
