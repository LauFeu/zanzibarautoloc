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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zanzibar_local' );

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
define( 'AUTH_KEY',         'WQwb,L-|Z{W;[2m_p[f%%H7}$p&ZT}`[tyMU,7DXj>{5!ZN:R@D(fl:9dwbSt6@{' );
define( 'SECURE_AUTH_KEY',  '<Iq$Di.G&.OnJb}aj`k]U&aomDS^o_`u@p&S5|NyaB1z~Zt1 /(oEEqn&~?DJ)-*' );
define( 'LOGGED_IN_KEY',    'z>j1Ivntrzm7k4&|u+LZ:4] A5cZjQPqVA_ cj<@~FXylYd:peTKl3|>T:xt};!$' );
define( 'NONCE_KEY',        '.Sq,u{XI9!`V)*TN/flqu6K oVcTnU[,3b5[uWco6Dzkt!`[8:U5)H?1dZ5V|l>,' );
define( 'AUTH_SALT',        '#&]P*o*pDVCV8uppcjBsyof1R~$l0fK(4SHK/8%BV3rk8:Yt|(pHwUIb[HH?kNvI' );
define( 'SECURE_AUTH_SALT', 'V26hjK<oUSF5VTPj)L>Y7GW=i1~[*ppFmm;0,[q0WEOSn1HM3ib$?]53=AHb8!4|' );
define( 'LOGGED_IN_SALT',   'swQZZn:o}@.[wMOFB([|?go=kcJmuW#2bW(?05_|UoUtH/3eu%$u}x_Ot.Hb&,g,' );
define( 'NONCE_SALT',       '3w}`*;_$vSMU#:>@Raq(QQV(4]C,r^CUk80lZFD[HEb{?3$I<PU$cb]},*QA5Cu1' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
