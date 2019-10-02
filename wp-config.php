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
define( 'AUTH_KEY',         '$3mR*H4MvJTNJ,g8EIKH;yh7;83MXU-XuXe4s@?v;__}|Klg^_=@CXS`XOK,?G.]' );
define( 'SECURE_AUTH_KEY',  '~)fy|5P5Rno%2;#TLH4}H)f/z 1$Y8(%#;>/0debo[5$dT p6xj1)Eti%rx]nzOK' );
define( 'LOGGED_IN_KEY',    'kK0G{-Tj2SjH~Nec=zM5l|M:?48r-yR-I%x$vT__(R}i$J|%1:i2pB-.@)]y=v:i' );
define( 'NONCE_KEY',        'A+idW3de!4e`!@0e{UqZi7~C$BaO-c/RnY+6e|B@FY(b<PT+A]BNR_#iFwkVbNyk' );
define( 'AUTH_SALT',        '[8z/=&8sM`KaT=.E]J.L(=r]rN,i~qVAh`0;lby/zl:]|P6CXooJ)cSp+.~ZXo~+' );
define( 'SECURE_AUTH_SALT', 'Ppc13gQApL#XfnA 5MC8s h$5]n&u(SDr>QD`wUg~u7bZfhH_8h3XY>w8+&E@c.m' );
define( 'LOGGED_IN_SALT',   '/V~.iSzG  -.(;XaF<]L=j@Af^&: @LMQI50$I0RD:7R0M<`M|z7Wp23;!q{+]9s' );
define( 'NONCE_SALT',       ' G:{|VC:^)/;d+o g/Bdz{>~#?yAawx/a|l9XZD.3HUNcGW>J1-?M}SNp&PJHlMk' );

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
