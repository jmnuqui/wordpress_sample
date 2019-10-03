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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'g3B=*_0@r2iZ`?ekk7iyM+oI>FOXIb6bU`;QDK~TBdgI`0g&QYY}G299b}Mk5msd' );
define( 'SECURE_AUTH_KEY',  '$9fSYoz!+^yq<RHW<LJd~}udENk}J_p@Oci/&+tB4SPF,Wc_rtWbhGY5>fu&6=Lg' );
define( 'LOGGED_IN_KEY',    '8$JW|P-xTT9^`O[TwU.O0y~T/3Vz4;M6$bLxP,zozf ^ACa,R6uj&[_hj_;d<OQi' );
define( 'NONCE_KEY',        'OVBX{acO,!Cl:Gtl>7I^F,SUdUzbqEqh K2Y0sXY<L{dI~sfXjVu{6wC>Mvr!cK#' );
define( 'AUTH_SALT',        'O}mPZ||4FwK03nil3CQ[nw=Hf#QO~-<Re*om=tf~/F@0|A}{#W^a>KwZPx}vh=tn' );
define( 'SECURE_AUTH_SALT', '9{Y&+lM <u#r.:IiFXxJ./#cw$T*[Hz FsezI+} VG3!=Sf7h{iiD*W}n{p&514M' );
define( 'LOGGED_IN_SALT',   '{;XcpW,3.kIbs`Q9g.0=5e:H^T=*!UVC<2{*$Rr~kogbZh(/hy,0MU8-Fa&b6&6t' );
define( 'NONCE_SALT',       '5E+y#j0{ly3Gj+h}(#}bI}*=@l!,Pjsn3@ba/V!0SI5tot^>bAD;QAh%e$Gos44;' );

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
