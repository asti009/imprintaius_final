<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'asti_landing' );

/** Database username */
define( 'DB_USER', 'asti_landing' );

/** Database password */
define( 'DB_PASSWORD', 'Vinu@0927' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',          'E*<S%q{3rgi<aXaD8i%LCnZThBmnx?!RN<K1z?`!#_}VMY$z{GS/t3^vIyc2@Ss]' );
define( 'SECURE_AUTH_KEY',   '!)(Hc{$9-&5.WC]DN;!2x7bG7K.&0K4IS|`l?8!ax3}_?X9%f+cGia694/(Wxy7Q' );
define( 'LOGGED_IN_KEY',     'F=Z5{?`L3=15L=Qt=otY/z5Lq`J2fk:=(W@bewwrbzxVW(NM.|lrVOEO,?<e|98P' );
define( 'NONCE_KEY',         ')Pq+Uu8;6K]~A$dnf+wx{)QS3i@P0uf`9(o^SPhE<DxcEn_<p}?C*;3M.R9n~!S}' );
define( 'AUTH_SALT',         ' C=Z]O]J|<)(4|sIGxNSu*s<R=Bg#FxWuJ<Iu>IUuG. e.%B;;ipVKKBZ{Yn(!8<' );
define( 'SECURE_AUTH_SALT',  'lSNV.T,*-t9]v$[Py_c:Iq{(Dw7~5-_wmu;BA}iNxmzf6BeF/M&9!#&2yBy9?< :' );
define( 'LOGGED_IN_SALT',    '7?>m)pZE:+1n5d6VdQ+?={N/bE,1ifEyQU<)@z2r?D*4IT((Ku9fZD@~m*#w#X,W' );
define( 'NONCE_SALT',        'WYe*mnB)xm ?A]N&0<*a^jS.W+uP*$Jjd<]{TOYqN_>:gEKfZCR,{Xu~,-$SW> d' );
define( 'WP_CACHE_KEY_SALT', 'o*bSii],41]IQ=No}X(cpT@YPogA i#OEK?MAc!%OT|WiA=1o<C6WUKGikh ~7cE' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
