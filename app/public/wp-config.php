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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'bM(v){w;m(t<p6:@,ED#&KABieS2$S-+-&hM.^ovoJr,0LM0$z.hMkk1yre7Vhve' );
define( 'SECURE_AUTH_KEY',   'DvrewX xHbqiK[Z:Pt6[8cZt` Rndy[7y7[z8UR<8f6^0Pz~]HQ]I%N:aLwn,S^]' );
define( 'LOGGED_IN_KEY',     'q`O.Hf?|*y4DN9nXt|)0dHaCdiHWSn!cVI*x_~n`&/ao!l6jM61h0be<+wHM3!fs' );
define( 'NONCE_KEY',         'b)!-fY]{4i<wrHuCMP$,N|Z!}!B=Lt_jj4P_a9B3muSSd*zO.;o3<cpN9)rc=szx' );
define( 'AUTH_SALT',         'j+EAX4c*!7Iz[XS2ZN5PvKAFgvx`cn1jV*)9_i~S`cQG|XwWig*(3`vDF^O51FoP' );
define( 'SECURE_AUTH_SALT',  'ZW#2k`+Rs.9/vs_T7tzf`AU$@Gn/O 5GNAvhC1<tNSi9<uGjV0`|gU4wyM?Qmasp' );
define( 'LOGGED_IN_SALT',    'UNx0SzLU6:PJ$BT6<x<I/L3(I6#GP_:Snnl%EkSBB;umq6!C$-P4$OTO2bGgU7w6' );
define( 'NONCE_SALT',        'VAJ^%X[ D`I(iK:18Icr{hK}{Uu1B6q%T%Rt}^Oj<].~<N-/4bIfD$h9:KMgFU{S' );
define( 'WP_CACHE_KEY_SALT', 'vhw=[,z*a%~k/b&%JeA d]27fvXQ!y,X.1f:vG.T6en7nL_J)1a<)({AH|F=1UV9' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
