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
define( 'DB_NAME', 'monjurul_qbfx1' );

/** Database username */
define( 'DB_USER', 'monjurul_qbfx1' );

/** Database password */
define( 'DB_PASSWORD', 'Y.rK1kryoOgfhO5wJzW50' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'vATbXBTolRXe6jKekyB6Pv4v9duXO358zxIHLMLR9CgosEFEocC6SAWrJ972GDoo');
define('SECURE_AUTH_KEY',  'ohAisK91u4LPwhgQcbcXGrJp8ge9vtpAgxOBMCJjvrsLlqvfdul7OYmUjM0tZVZA');
define('LOGGED_IN_KEY',    'jeH6CX6zewA9A8sH58mzhpKAYIFj9pceTdtqRnz1l5pwYGgm935X9Srd1OJtHvWH');
define('NONCE_KEY',        'wTyBlpEycS5A28FDN6goTMcpFyvqGNhXednPbAFDbrVOCM7uqMK8VAtz2zStSWpn');
define('AUTH_SALT',        't5G8DQAHa8EiJa4lL5k8odmlmFmfRAE7vXsyjwqTwHWiCWS6uH0BZ904q1rcSVQd');
define('SECURE_AUTH_SALT', '2NMRlhIG4eXvAMmxJ2KlsduWgM0xGgGwn4d6aNHYWB3w0EJLhE8mCfXDSJIqdHRj');
define('LOGGED_IN_SALT',   'XRW47sm5nJwR3dsc6QR5880YnoWN7X5Coraw8rVf8vhuWHOC818XaZmTZlg806UU');
define('NONCE_SALT',       'MsTKMNe180MgjPQAIddNTTH7bB4IIBUIR0THHdVTuvolcHg1GbM1FPoKO2ghoy0L');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ujbt_';

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
