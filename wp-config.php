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
define( 'DB_NAME', 'runnerscamp' );

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
define( 'AUTH_KEY',         '8Eb%(9a {S$O3f~|Q4o,i`VHV!BBrS^fChp9a~qAOob6gYj[<m,OoS07u8ma/<oA' );
define( 'SECURE_AUTH_KEY',  '|POK5{:~~mex`Z(WWmhFdp{Me58>w<KP-}C@=+Kp{vgKI^M5N6)<Yitpp 32^Ka&' );
define( 'LOGGED_IN_KEY',    '<q-I=?}#oXGoC82jv0S6u*::Tuo5G|NXwb:%0crHe6c;Lz3(4rLQ?5YjI[DpSe18' );
define( 'NONCE_KEY',        '[I@eVN_+ww<GM0s3(|TJY=%^GB^7<!4Q({NnUf>3!FIgNdo!Al13a+?</nlGocAL' );
define( 'AUTH_SALT',        'y~wyNGLN4c)$R:|0wWifo/JLf)g5vFM~SbVng?qSt0#-:h2%g KvX1X0<etgcTSQ' );
define( 'SECURE_AUTH_SALT', 'IkaW)s7WB80t5!(k6.RfE@iHn^/`El;&<br`mzt#.gQWZbDPa-AzoT2GQmPfw4FF' );
define( 'LOGGED_IN_SALT',   'FMy$~Kfk`nGlcIPfd=L~0OYNz<u=Jw8 j.pX2 .+K+[c?^Qy7O$@~87S8iy)t.Cx' );
define( 'NONCE_SALT',       '=7dA+;A3;uU4z$gLkH;C2lvma-Nc,+jTZ5&A Xjp&}ROmdo8UTb0.RGh/J!b `}-' );

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
