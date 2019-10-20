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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'S(u~x2et6CwZ}80 )&x<2BQB{ieEsn.ytgn#f@O[ekMoxrBLw0)Jgp<r2;M/>?sh' );
define( 'SECURE_AUTH_KEY',  '<m=DLT0bq!/fXKv(nZ R3f<nW{-h;0T@i-F};=oec:?{VS@u]sW ^ RJ:;CyZI)4' );
define( 'LOGGED_IN_KEY',    'PX&*B(A@JK;j#<D-AqN`sk)w3TYUDuEW|Q3jwd/mwk0Aw]7ka7vf-;0c+e[R~.;_' );
define( 'NONCE_KEY',        'I?Ne;qC~lk,BN~&0Lm:h>>)R9?& kv&a[ZECA2FdG=X_C7NyqT(s&uLav?4ED=Jl' );
define( 'AUTH_SALT',        '5Y$vpEfM4&!!5S}4Z1U=r!{wbl4,>Ayi{:ZERpho*|M-i}~^_XgaN9l$Jm~>?lvb' );
define( 'SECURE_AUTH_SALT', 'mYzbvpyg>Ti/{1xk&LRm G3$y]4f.`V<YNs5bn& 2:oY?5v,O#+a;V%I>$B^.FRb' );
define( 'LOGGED_IN_SALT',   '(m+I/w*s~G6n6N=+t+paZoU_3n/9L,e+:G!bXs:HQ_!e_?<i%ot5D7fB;dR6wvnf' );
define( 'NONCE_SALT',       '2~4T)e,z4OQ/[Ph5qc!Tx#-24fX6M%_1S&qLv}Y|/3G7?Sb^d`(iFETFMWOJo($Z' );

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
