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
define( 'DB_NAME', 'portfolio website' );

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
define( 'AUTH_KEY',         'id4LSI{w6.;5D2AioW9YDAGl)h&7;MB7X,~52uAMs/K(Pn#/J3Qp8Nok=7C,rix9' );
define( 'SECURE_AUTH_KEY',  '=v3#675LQr;utXL#dZ TD~9wV=v#WRi>)+AG+LCt~j]VE7R}YxpB.02Uj;gz0yK0' );
define( 'LOGGED_IN_KEY',    'G3-3[8^GqOaB]*6%F;9`87JPB//g>>mgY8fY)/>FL`o+,*ipz>K^JyuO*%jc:HGi' );
define( 'NONCE_KEY',        'j0J[%6$:kO_BbiIp`TD<Fyszt23E]/bIy2$)Pp(HY2IANm;D{}Mt&^)dA<+^?ZIM' );
define( 'AUTH_SALT',        '3_e?d:craj}tOY>c]Y|dv|cZ(Ji0-ID)0%<|QFY,uv.3sA>zq#F)I-hCM0Od3Yy,' );
define( 'SECURE_AUTH_SALT', '4>!VHfOoF+-`zY<K&@4P:oE<-</n7Y?g%JbAoIzRxp,~Q>>osX!tM8Ud/>.x(;gn' );
define( 'LOGGED_IN_SALT',   ':YmP>0M]ZGL16cAzdm36maw)7_eEwg[.BexAQvkf[]J/z&9*@/V[=6umCqjSZS`C' );
define( 'NONCE_SALT',       '~lZAdHZr^CredT;r+Zx=ZZW37aVeNBaGWy^.!h4zdFv3--d=P3xJ;UVfPnL1/@0G' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'portfolio';

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
