<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
//END Really Simple SSL

define('WP_CACHE', true); // Added by WP Rocket
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_artenarvaez' );

/** MySQL database username */
define( 'DB_USER', 'admin_wp_ar' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Mp410982183' );

/** MySQL hostname */
define( 'DB_HOST', 'db-wp-artenarvaez.c9c8cihqpue2.eu-west-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'g|ekP ##8wcu44{_D;oO#K(8ZHVoRq$Cl_:-1~%Y:D`C<fju2#x(EwQCn&Q+ :eL' );
define( 'SECURE_AUTH_KEY',  ']pTBFNhRF-znM5th??105!8v[5&?u,W%sUcw.7dM,[U&M<Qc:)5X$@zTdW=Q}ayR' );
define( 'LOGGED_IN_KEY',    'b6XVA$c+o<r^B%-sR;4[ }]k|g_QY;rNj!(^QCnYP{?3]t4NrbjX0,`j~t_>,Rk^' );
define( 'NONCE_KEY',        '>y<.kbw^dLDj!=riDyl}N:w$.ZBug3yW6x2 &(CT2cypf!TFx$U8p^ikwkQ@2+l,' );
define( 'AUTH_SALT',        'Wv:rlcS$vCIk_v`@I9jp9}JDk3u 3FwWPvxNVa[[y@oI4W8$D]Uo9*UUXIE-N5~q' );
define( 'SECURE_AUTH_SALT', 'TYEqC.0obC=L 97@}y0:d(J[P2FX]W_i%G_p0]GmX:,q@9F:&YB-K/ dpy1d+HWC' );
define( 'LOGGED_IN_SALT',   '>!#-0p#?&{v{jk|>]_.7(wvhPW[K>3acA@PbBXM3EF^@0}r,k`xzqq#~N-rMLD*!' );
define( 'NONCE_SALT',       'hS{-Ft!t=KjWYTgN>Kpgz8k<(Vxf@S>.SMz&DU}7qEvt^`WcR%MF8y1T=UadP)wQ' );

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
