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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
define( 'FS_METHOD', 'direct' );

/** The name of the database for WordPress */
define( 'DB_NAME', 'tmop' );

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
define( 'AUTH_KEY',         'h(Kb`eieBE3&d!a3<,geEKKbi(N&g^@Bc}$d3: .Z@l$^#$Psu7q5PirqPjWcN!H' );
define( 'SECURE_AUTH_KEY',  'QkAhOIP1=<:z3%4l||mV5wxabNYDItG|,eK|1|!-+De^u8,U28$W;z,3;d%@%0Q1' );
define( 'LOGGED_IN_KEY',    '^ty9Fy-V~VA&ey!&zKqXBF?!UluX!u-u,n^W<X3bj]afoJh5vB7_tQ^b<S`cz?V|' );
define( 'NONCE_KEY',        'Gr3`Xb /+1oEHtsp<K_sN5BAs{b5ko]D.rXEVk47GF#>1|A,[zBc=NjLJP^f! Jw' );
define( 'AUTH_SALT',        '&,]guGk6Rg^0VFLzi5lO:Ta%LQn1!&vhp1.OSXY?3+#./3c&(s$pQ>gnmoJWIk}5' );
define( 'SECURE_AUTH_SALT', '#c9s,v#Wjo)CU@//tP0[+kd{Fx{d*C})&nWqSxr2m4td=k&w#4f+GT,7jQ@y(b75' );
define( 'LOGGED_IN_SALT',   'vtE/>f%a+SwQD*2I7FQoY%%RpqwWiFx=U4pg~&u1S*%x=qMGz_v@}Bg52vVVW/qw' );
define( 'NONCE_SALT',       'Rn)h>jjidbf>Slnr~0OS)~m8?RYh+[lxLl<A U9Xq@=9Dk,kA8F`I~w_1ZB-;pm4' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
