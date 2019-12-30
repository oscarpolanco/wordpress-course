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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DF5SMYdnQzm8rd1tS48YQ0TyyAWaUu/jbHuu+wQKsZPrcWxonU5RitRYzCMsNT5mFGH9hSPnCya7JF9H+9pwAA==');
define('SECURE_AUTH_KEY',  'uHb/xqzwaR46VF3EM5JaBHSeyPFnPcZHUPH4B5llISk828hF2CZzcWXv9TwvVT/hdsXFIaayCMGxLvRznzMWaA==');
define('LOGGED_IN_KEY',    'ZK1g9a4rNtTxD1As99EBVqUDpq4z5+sI6o0/2A1l0EJ9MIEl+sUR7bBY08GEvMGZFziMd4xaOHGElUvveeL6tw==');
define('NONCE_KEY',        'foj97NSKD6sYPBLX2/C4Yc/+Td2EH642uTgrn/O7RwD5y3j6wwJjMrv4fpPFfn4Dg9kPWPNR5egQIEwT8xGB+w==');
define('AUTH_SALT',        '06Y04b+5L2Asg7QEIdl0Ij1dt0jsVzC+o5h1wf7IheX9ocdFZaiFfYniYQbB2eJGjCiofyjXx/7eqdKjkoFfQw==');
define('SECURE_AUTH_SALT', 'tdPtrrO47049dEnat+eCrZ8D8I8uph4dasIQNG6WHYPe06bYNS0Y8Vyi9fJVuiyBlz6a8YzrczDQaVJy6BkSjA==');
define('LOGGED_IN_SALT',   'DjnC85fkfSDgiS7oLyF9p54casIZK5BHZD9IyzTlkgDEe+mMusUKE30ZqMY3Bs3BM09Mj4d0TKDBgQqfxOWRfQ==');
define('NONCE_SALT',       '8tSY0rZx9qZXyM+GPEZWtQSeMrPvZiCGg3xBEsjXLInzmt1UFtzxPznEuDVbfZKLi2beI7Cp+h0U8UR0mgtQtQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
