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
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', '' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         's9AIHI4bt2e5jZ4V1daOmA5s3AosN76upuk3QZZaZxD0PNYztS8qeTLj9NXW75I9');
define('SECURE_AUTH_KEY',  'x0QwTBuNgcrWCOuPTh4vx0aZhl8v8yKBqZWItrdVZ1IKCWoDbNs0EpskyXnlyH8Q');
define('LOGGED_IN_KEY',    'hVFDyyrmtWRgkb2cK7ebnZ0yLoNZoSFOz25QJDTst9J1CkwMSEK0j41V1qX5FD5R');
define('NONCE_KEY',        'XSBkrLkRvvZsibmeiPLK2CgpNLT1vF424Y3Vy4Xk7VTN8ZFz80oTRa0FuULVk7qs');
define('AUTH_SALT',        'bhpf4t0ebu9gPP74lP6VL5COeAkOTfrskGpcf3yFe3OtG3QydobbLnBSkfe0XDLO');
define('SECURE_AUTH_SALT', 'ZEQB2C217iQf0LUSn8RPoJ76gagspCendJRwmQosCzEd952Qpi4P3PPOaF5xFvgT');
define('LOGGED_IN_SALT',   'M3rxIyefOjzA8YyCWKVAbwW7oAVWQdqRn4UyQYG6L3acDXJ8HvdDhaQlkH7kPmzh');
define('NONCE_SALT',       'OiN5DHxkHbqyXwwBv5rhn6FvcVED9KS80aXWofKzBDVC66ivIhRK9pWxCpKKUDq6');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
