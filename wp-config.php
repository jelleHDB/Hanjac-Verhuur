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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hanjac-verhuur' );

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
define( 'AUTH_KEY',         '<;mPYBL/kJ@w:pRn,A{``Go>w{b2TzVOE#7qxW}~g@?}g9C,^SfUK_e>>?TQ:{[r' );
define( 'SECURE_AUTH_KEY',  '[7A-nXnm@CmxVvbRdQXN@=4$uC|a8R=KkL+cY.{bG8X>)nUtE+kS11q` [0W2*oK' );
define( 'LOGGED_IN_KEY',    'M JTl .9(!lNhjRwdv-Jz9};ox/[PK|j{0vRbwv3^zjjkQJOA:#Z+LDmFR%>]-;8' );
define( 'NONCE_KEY',        '#tD!Nhz !DPx@7!hoNnu~UeitE`|P&zx!1 OOXbms<*7myrm#Hs;-9~0B:-Sj{&(' );
define( 'AUTH_SALT',        'lKWQEddknvVz{~tR-8yBcM?)M2O%6iGfqZzX7aTsFIS)>ss@<8J>ZS}Wfs{9S^GD' );
define( 'SECURE_AUTH_SALT', 'O5DY)(IQAp]N>WleF/q]7~J.71j4Er4>ynBe#HQ=Fbh)8zG!7BViWqMv~&b3E&{k' );
define( 'LOGGED_IN_SALT',   ':# w1/}W5-6s 2;q@>_x4Msi+>aER]VU? 1m+n!uB9JHfXJU<kDs;I&G:){)SUP@' );
define( 'NONCE_SALT',       '1O,/oHn1,9bud~!bX0[!KaBvDuNH>B8{).F[8E;u3^0G8Rb#MWX#_c$cl.Q/V6FP' );

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
