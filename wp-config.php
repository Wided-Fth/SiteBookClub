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
define( 'DB_NAME', 'bdBookClub' );

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
define( 'AUTH_KEY',         'wKV%d[-l$3%0U:M(W1bR!n_|W(SO9tp3|GX6~$mg%Z&TaOPbtX3LQLROOLnj&bK0' );
define( 'SECURE_AUTH_KEY',  'eUpzUiGNXC&yD+j`ksCu2* > ]x~@(CfzQt?I>#^Km$a7WP&GIxgxF@SR??vfi?i' );
define( 'LOGGED_IN_KEY',    'aPR</e3E{^~9P&@(K!N0g{ %N N$#Szc?dx4,Ag[uuCS5]@ttjt+iNl`6d Dk`3G' );
define( 'NONCE_KEY',        '`3(<dUjH.gkixctw^>xF^HBFnOx18`f*C3rmA:LUEO^QI.OI*km?/DXXntp+,O7.' );
define( 'AUTH_SALT',        'J5lf8C/#*HO49]]+SI<C&nDCW:xd*vn#cG_i,h]GGlrz5_sCMMdCB<6t/k5lIVaJ' );
define( 'SECURE_AUTH_SALT', 'E2M>baO&mk;(ih%bg7YGG9fWRw>C&h)rZ4P5akb})@QprnxNp8 MJ!&a@t=;q5i;' );
define( 'LOGGED_IN_SALT',   '*/~&eZ _d!A,@^b0?y@!{$No^8^s!=Bc&T}I6(ha0D7t,g)K!o/=Co,e-Xy!8@ig' );
define( 'NONCE_SALT',       'S-2O![DNdK;FD@IaFa`2!0.U&dF{cCqjqp.*t,SiwFEMQvEWUPu?D4f+!p7v/JX+' );

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
