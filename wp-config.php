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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'bG1^SZ~(+0W)?xD(ku,K!~BOpD^~ws:?uL~f8p-wU>=74^i&?MUZ0=i_7*@)$!Yg' );
define( 'SECURE_AUTH_KEY',  'kvfO;jK D6z,X~mGTb,ZEQ:39IijMO^dsdvj:zga9x8R{a![]EP_I5KOv6o=T.`D' );
define( 'LOGGED_IN_KEY',    ']dHTnk{o;M3$S~O/nR}^n~=9::6`t=a=f180%1Cz*2C~V]j#r5r^)klH9*I$i^(l' );
define( 'NONCE_KEY',        ';b1alE0k{yQ[Dt+XP{E`!=}h%`Iq_%SjXSlV#Dk3erX,emDSCciw|@6-^A<}($CX' );
define( 'AUTH_SALT',        'IFKS:Y*[,r:FtXL~3J=Dwmq]zp4A wEL2%I>W Zw4gV7MH^eG.1GczF}7BmNG%kj' );
define( 'SECURE_AUTH_SALT', 'Ue> K[c-|<2o+0KmgvctQ_G?_p,!+lB(-MJ!61D773?RTgd{!?`!>fo:56iw9Y^%' );
define( 'LOGGED_IN_SALT',   '}#q+4`}C*+d%.-WbkVKBqq-uL*/s(7U!qE/HUq4Zs };+m`$0KC=}o;DZs,HB(_%' );
define( 'NONCE_SALT',       'iTdC>/XA$1z&(?dZi$vc{ l!p85Ar|vPxtY9#+,$ Q9)<<Ddv^5OZ`W|0`$7FCIv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'test_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
