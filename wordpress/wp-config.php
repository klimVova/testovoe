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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'h.%[4xjM=?2jg3v!-7TU=ER9ma!&>=-4+A oWvL3>hvOFxnJE*l Sk!?($Uxo9TI' );
define( 'SECURE_AUTH_KEY',  'DsWmCB74N7t?% ex*Hry1-FUxP;VDA`8WxfY,?1$cW4{ q)fpm`~#C%^t@`T$Ej`' );
define( 'LOGGED_IN_KEY',    'Y(IVvRH<>P8pA1pGqI5jJoE)+}@iU&yGw@I3l=@u-7}D)6Ib.L/M,N tda?Q#<?4' );
define( 'NONCE_KEY',        '.-ewi>dki&ct3cq]VR PI`M/2.f6=Hu0bfg vTgz&f,19C0]na rOuP%F1kJ)EJ6' );
define( 'AUTH_SALT',        'ba({7h=@qxIb.y<wYFas{1N&_z%swY-v:Q$ZZf$pzHb&m](JZ_<J|d=j01W8sSz/' );
define( 'SECURE_AUTH_SALT', 'a[<5ZPvKCnG{X~Hgr?1mHXkes UA/z@nV2NMRfKQ+>_yL;EZ~*7_;ud-cS95#Glo' );
define( 'LOGGED_IN_SALT',   ']fy-61^F3QxMYcS8^z>m^S,(8M,`9p(}@7mNLGuCXcT9c4W&[/5}3qjD:O7zF3c]' );
define( 'NONCE_SALT',       '|{^E=-]+}CqE1Mu)K`d%N-3,Jj6B@ -|UaFWz>`V_1,H:}wXMBF~j@oIqq6jK(eP' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
