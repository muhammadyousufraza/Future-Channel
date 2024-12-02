<?php
define( 'WP_CACHE', true );
 // Added by SpeedyCache

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
define( 'DB_NAME', 'evsaewdi_wp903' );

/** Database username */
define( 'DB_USER', 'evsaewdi_wp903' );

/** Database password */
define( 'DB_PASSWORD', '@3S0SfJgWYp(!4]@' );

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
define( 'AUTH_KEY',         'pagsx0o88j2r9may5dedfrqmpxnpctajxadnc7bftgntr3t6upvkdtr27dazbr4p' );
define( 'SECURE_AUTH_KEY',  '1qrp6gsasttmtoobqngerq3e43o1phk9zjxvg3tbyiulzvptyoy18ertqamunkf6' );
define( 'LOGGED_IN_KEY',    'xlkmgmzuv2fjlj0gjr3yjx01fk51sjrxzihyipb7gnntqdnygcnhfek0vmwhtfdq' );
define( 'NONCE_KEY',        'tkuspuf5vzknwp9r8z7kgdw4lqrovpsgzidjorcsybnnbyo4ltavspf7nkdqgw1p' );
define( 'AUTH_SALT',        'yvcallnadirpm0pa5nnygsg4qfhxmmmhw4m6wjtj6y5sbl3uqgcag4jg9gdn9isj' );
define( 'SECURE_AUTH_SALT', 'we2t3wukquiovmuo8mykjonprz9imtuo2bqqlijunkccrls10exf2farpvqewa2j' );
define( 'LOGGED_IN_SALT',   'ioqcbyo6go8lw35rauonqh4sdlmkecw1rrudcqbxb04nvqn0nc45o1plg0hdkkrf' );
define( 'NONCE_SALT',       'vfmejmx2x50oawokjmcsw4cytfefy6pwgpg8dy2bk7ro7lsxtbgplarra3hocy0u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpf4_';

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
