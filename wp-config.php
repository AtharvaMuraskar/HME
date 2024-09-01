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
define( 'DB_NAME', 'HMEDB' );

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
define( 'AUTH_KEY',         '?ywA$ZKwS+RV73[La5P7= 9Be_p%mj(5Qu>d&kLdOLyGOgYkxn[66[Go>^N+rx1/' );
define( 'SECURE_AUTH_KEY',  '+X?IDt]y T`a-P+uuz]W2y5Qj-UQQk5%|KG0qNvJ^[DsGIcx/h&UQ$T!E^Cc|=3w' );
define( 'LOGGED_IN_KEY',    '>!pT4ot(uUL1cZ.#@aGu s9rd7MWnoQ<OQtE]1vYDe0YL3SK+rK594]LskXJ}}#}' );
define( 'NONCE_KEY',        'WZ2OhGE`Y8^(k.r,nCw)Jeo}LPd?WEnlFls[3j~] &R3H=o:{O:N0)fQ.MyX=(l-' );
define( 'AUTH_SALT',        'pK!<Z}k4q*1Vt`}ZbkZOdd?vMaaXk~]E;e+:9Mzt*j|urJ.J1t=5jvgz<O@+>_[w' );
define( 'SECURE_AUTH_SALT', 'A)*G;ow JS&1*24bIIDKFZ~&~`~+Ts[`TfraVK1tA--Z{2afI:p-)oz0zV!~tL6 ' );
define( 'LOGGED_IN_SALT',   '[^pE!B?3w-@ VfGq#ukgT{0RT&?KJ&=y#Ovdhw,xmY!m)YB`NA<p_w_o O*e2ylh' );
define( 'NONCE_SALT',       'I=BI0<-~=K>EA.blPm+Lf,nk{.P/Pr:g}tl.pGg8=8;mL(Vfx._:*3%>:#M1i7G*' );

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
