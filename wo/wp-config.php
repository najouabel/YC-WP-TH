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
define( 'DB_NAME', 'wo' );

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
define( 'AUTH_KEY',         'PmcMWa!k,b1(:0r%YYyfJfL(eo!]R%!0z!ToXxn2V)zu|27|PE,P|ZJ~N4s0h&o.' );
define( 'SECURE_AUTH_KEY',  '<RNB,Jn1;6wg@Q+4aV%_HfWGo0<A.zazhM=->+Tg=[)wb[ze2.D*Jf `zm }|NE7' );
define( 'LOGGED_IN_KEY',    '4m?p02mv&@^*GntW ,,zp|/9eec3.QwtCL6|+T{Cl%MH~kY>@cF3VQQ<Uw`}*QKj' );
define( 'NONCE_KEY',        '/tP?8FT8rA(]F%AuQfyNV>Ww#JTuxS#!XYxmuz<98!wH7(ng j-ed& 4FJl]XOBn' );
define( 'AUTH_SALT',        '_J/ ~CvG,fYQMWUxp5ky$x%?)eLo$`|M[bWzy))s#e0kiB$~eaxx9S}gi`l}Il**' );
define( 'SECURE_AUTH_SALT', 'S}[i0Rbfp$`tGbL$I^HXbfjpWI#>g0<MNA<;eZA_c>tj{gH!jx1le[dZUpCqhYIq' );
define( 'LOGGED_IN_SALT',   '?!}+W_$U{e6?=Tm>)5Hv+d`I@[^R9/`^9Z?Agrg hwi~y8~]t= -kc&MlKBE=*(]' );
define( 'NONCE_SALT',       'fzj^OHUR7jXn$;?teBR&n~Dg#ZE.~m)VvX;E|)kTfGCT&fU+yXi_? +)I!m|~^P%' );

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
