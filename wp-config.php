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
define( 'DB_NAME', 'wp2561591' );

/** Database username */
//define( 'DB_USER', 'root' );
define( 'DB_USER', 'frankgodlike' );
/** Database password */
//define( 'DB_PASSWORD', '' );
define( 'DB_PASSWORD', 'P0w9999%' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'xRdB*ZMvth#K;Eq}8zYcDGy cH,QxT-`{f9E]^bz4Tv1m/$Yk zCojW~,K<R4Q7H' );
define( 'SECURE_AUTH_KEY',  'kVIlh gw~]bDBG6((1D2.~ ll1gsacQtsMg63LoTz3RO~(wO}ILPSPc^S@WZ7u#O' );
define( 'LOGGED_IN_KEY',    '|)+xMy_-&z)VcfHvNE4J$:X?)8! d_OL<[nf:nRk:>K X-F2|Hr]QOrKfIel*b?q' );
define( 'NONCE_KEY',        'X8&V|3CZ~5),<4+tH4Y.L1N[ ]_5lSyy_:211[-o6#zEZ$^4]DgqiH5H@[3%U4I=' );
define( 'AUTH_SALT',        'tariQ*j&f1&{[,YnpuHFgPJ.7fX( r`+0BTXOg~)A1zcxcG^27vQpKUq=$E{g97-' );
define( 'SECURE_AUTH_SALT', 'B4|>l`QIE~36Fl8@Tx [N2ez/ix* W[/zZBQkEBMAU$az%;PIXE+Q>!2qzzsy*xM' );
define( 'LOGGED_IN_SALT',   'T#EQK;,f w|8#$r#|x.3Vx ?CagZ8KKgnX%MM!$$wEw<u/7Bj-Nr@QwhjP^8*aa0' );
define( 'NONCE_SALT',       'Q?fs)hEw5j[U$VGIVD|T;3p-:r=/`iPzhws]NC*Dtpy#3@*_WQUA[.FV!@Rd;?5}' );

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
