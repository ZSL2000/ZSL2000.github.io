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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '3,zF3/tW<-S[1f^Zov|`~^=%2Z/gNi>FH;/Wi9i1U7u6-/<]C+JNVMtSQcM^rw_+' );
define( 'SECURE_AUTH_KEY',  'QO}#lfhjpxs&v]mvFh0vu,KO&*ua%!;!=+EyD0o8f5?BK6./:jI9k/^g~?QZE!Xh' );
define( 'LOGGED_IN_KEY',    '0T,N5_a&%M(HA13wmoU=A>]i3Dhyv{m^%KscOUBn(qZw50saF/N $3ZpZ82Pi{VU' );
define( 'NONCE_KEY',        '.}|;|c}pQX$V!ne2k4zc4?T*A,EI@:+Lj>V6I8|ui)hT6RUYMd>Q6F0UY]C`Dqb!' );
define( 'AUTH_SALT',        'rC dNa`zyMx<j+^EyQ$Q;RGP;jxN e/u/ykjt#u.mVj=~waXkL0Z:[ygoJ6n~`Kr' );
define( 'SECURE_AUTH_SALT', 'W:=_o_,*m ?]VTP3mGQ#6r4NlmcMByOLBt<sxD$|jgZ9XK]$r6wL2q]%DEW)Lk<p' );
define( 'LOGGED_IN_SALT',   'iFv1B3lE<zspnT#cGs{B/d[ig)QucGAgog2r5N8 1qy2h}JE2%AzLs8td.TulYq8' );
define( 'NONCE_SALT',       'lj_4#4d?=.#! $J+*GxmJI~yxf5:e.%cf<*YgeYZKS5iSJ_7p^~._Juhw6n+/]1V' );

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
