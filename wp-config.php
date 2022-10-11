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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'h!{&,YQ8CSf5ZPBzv/FN^Eejfen#Vv13!^pb$2&l++yqf;5B|@zB} !4Z5j%2gLw' );
define( 'SECURE_AUTH_KEY',  'GQf2h!jul`w7)YEerDmTpOjrR-Xi0mRqG|2Kklt9Hf(JLYf|lnLo/3Fu R[P)%^;' );
define( 'LOGGED_IN_KEY',    ' pt)63<XvW_Wmf?Xiz~&9 it>h.:fk03{<>ZHi(ZUT!m-TAp_f4(1jh8lm<f/Ddc' );
define( 'NONCE_KEY',        'j(0u4shN;%9Ib%cm8sa= [>d}eR~JEo,t,)f6upF2p;l$}mo~dD5~s3~*D#4Bges' );
define( 'AUTH_SALT',        'DA?OHwASZPL%9<*9S]6>Ls4<#Q5aF!q`2&#DGhZA9~}}EbEyMwv<>dvXq[<qrr:E' );
define( 'SECURE_AUTH_SALT', '7X>eU(|}y;`~4VkWfOCP3Tc~RC-FbZwQb]!Swue%G6_mMLn8w #JsX4]V=b7}So)' );
define( 'LOGGED_IN_SALT',   'u[S#C,]OuaZ/xgrt;|%i+TR9 y% (@M|XU$)t7q!)!)ZWnIvJp/iA1~v_ezf =$]' );
define( 'NONCE_SALT',       'Xgu>Rd;`~QW+|{$vTI<~4(Taea .5CB7sEVOPeV&aF;H*^.{]-jAAsBly*5s,&hf' );

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
