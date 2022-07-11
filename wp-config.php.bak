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
define( 'DB_NAME', 'wwf' );

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
define( 'AUTH_KEY',         'bJ+lV-i2j@Sfz?Z9#?H42P@&H]x9mFp#rkYNq9EUhr*DcxP$ei&%bE=WP6T>Ue/R' );
define( 'SECURE_AUTH_KEY',  'i&rBtC1B1Qpi9-DbD4,=m-1v2*kr-Plo@KJ5K4g/*MLLb<xKS>CFMY[BAmBhL,Vu' );
define( 'LOGGED_IN_KEY',    'JLhOkZhlQht&>oU<8/3z/iayuT*&65DXPrvS7o$kK:ZjR=9E5VfJOA5eg<GndmmA' );
define( 'NONCE_KEY',        'oW1Q~/v~/lbi&0m/Tx-UrWC#xQNCurpQ8>O%%8Z#M>u$e0-6,oW!@]EPd?H(sP:C' );
define( 'AUTH_SALT',        'g<:Ts)CfV=^ZQUxyMy%Bpn-?@ l/^y&MX;FdOH:=P0L{ ncL%wjcTX-&@n@RNFVy' );
define( 'SECURE_AUTH_SALT', 'lTf.=cW;|pfu:U8koc#gMZOSL&Gp7^TF^x3Z<}x!qQfTviH@K2I9B.vlAxx.*r.H' );
define( 'LOGGED_IN_SALT',   '}VOZ{fpef(&)k)L 3wHXt4B2>0[(SwJEjnq:~L=kkX;; @0`6B/Ip*P<;U7zU8~T' );
define( 'NONCE_SALT',       'H.,^wwB!z#ic<ruB/#:TJW`]M`cohZ8r32:}8vxa#lBc^Fj%~O.M&Wl]rLFW:#:>' );

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
