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
define( 'DB_NAME', 'lapisroute_db' );

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
define( 'AUTH_KEY',         'JJSergL%TsC&J[8A0/K]t:m|efQ]xD6w|2@a.eI]@FgXpdON7PSU^$oCN,$/U>TZ' );
define( 'SECURE_AUTH_KEY',  'PujJ9(l%JXv*JiiZ5H{Cdfytg)wAzS%)U3u|eo^2[O_3WDo.Lc9/P5pxP-|jjnOv' );
define( 'LOGGED_IN_KEY',    '78g:~;?BSr2}*G=b&P[z6+)A#..3s^`YhO}`t@$$HUI[?=F!cV}AXL%x9+p3Tv9o' );
define( 'NONCE_KEY',        '*e--o,:;nhA4D^nma]W;]v]Cs}EUXLX#<io9Dk6^dBlx``DISJg^`7)Y*;c`~dmd' );
define( 'AUTH_SALT',        ']69^9y$.~&d*j@U,3Zh4)`<*T`BZvI,`u!4(0].XN cIm=TF^uKiXxS95^iCP 3(' );
define( 'SECURE_AUTH_SALT', 'w=k~F-k1cpG:n_BEJ,pJtVzG+]A`^Luf,ueYr;H)v22iec$XC*SJ<,.T062@AD 4' );
define( 'LOGGED_IN_SALT',   'cof|7oc,j:tqi#L?q!~pSBL=kWC7YL/2E&37#0<:>DT_H1!^S@l}a4VtLA  j?Dz' );
define( 'NONCE_SALT',       'u<P+Ap#Pf40g}YZP[y4%S)<T/i[3gz7Y+v+PH,/XSs6tokcUMIN0YeD>fj*9*S6i' );

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
