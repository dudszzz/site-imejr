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
define( 'DB_NAME', 'dbteste' );

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
define( 'AUTH_KEY',         'BZ*#0e55VcYS|4ofjT$vaZH2f]M?Z@s[W=*#&Olr.o*wy8&_j[_$Qcn-)*`82%K,' );
define( 'SECURE_AUTH_KEY',  'M8wb//_cbY(*{OP#,moW^8YEAYYM`UIJ$y@@JR+oWU6sF^TrWy1Z}6^vRdFWHP()' );
define( 'LOGGED_IN_KEY',    'H`>cXISZXV^d7Y#*o$9f:d7V|Uu[uFh^U*I&1xKlek%u%_:&RlbODIvEC<@d=ju{' );
define( 'NONCE_KEY',        'lwfw;saFz EygW|*61re9SO8$x$PVenP^`+C2G;oi)#4iKgp0u2VX&%}jiz&OgPq' );
define( 'AUTH_SALT',        's;u9^At^`y6H+Y@|3j&N|.# }}IsVOeOY[WFb(U.d`$]}y0q$)>[t`a-tYS{=6:~' );
define( 'SECURE_AUTH_SALT', '8W!5zEn?lu26ksdz+(W2[Uk14JyELkP44X9v?/hG^eZvpvO+njO-3M;;z$):$:Z.' );
define( 'LOGGED_IN_SALT',   '*<-}[^u&&8si~v#)Em{10=e[+d`Lm)7BsH$/}q&<vsc(.54*M0hi?uw?^Gvths_8' );
define( 'NONCE_SALT',       'DrHS tLD^.b:RcrV>~p_ZEo.br=m6`gf?7+ )&H.X_OMT9;b>w0%~9swROeZmkO{' );

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

