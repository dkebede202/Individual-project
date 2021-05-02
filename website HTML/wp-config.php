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
define( 'DB_NAME', 'ethioema_wp539' );

/** MySQL database username */
define( 'DB_USER', 'ethioema_wp539' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pS!BY5!4K1' );

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
define( 'AUTH_KEY',         'hqgzvnimywhwrp55ejds0kxvuevptjj7bblugxiucizju97mlypguhxhhocpkg7h' );
define( 'SECURE_AUTH_KEY',  'llnjrvo45m2lyyg5kheqikcgl9q5xuxsatlmw4lqmiwhgi6kqpy4uvhopcw2xel7' );
define( 'LOGGED_IN_KEY',    'ftdabv6p0g9fhxlgfhdignuggmyfyeoybv2uloz4qsk9lbhxorwymma51uqwoken' );
define( 'NONCE_KEY',        'wpofbt8oxazkabg6qcvd8ozbu9byz8nqtbpoqa2dresiueapdorx1bqovxnqliyr' );
define( 'AUTH_SALT',        'znubpxfirypmrhovmojj2yqf98znobgjwqdipy0kgakbpeq4nyksb0ljanbcsg8y' );
define( 'SECURE_AUTH_SALT', 'dbxua1qync5c9vqpmb6shsaoxflwuz36arckmsxg3ii81w2crrbglebyurmxdqyr' );
define( 'LOGGED_IN_SALT',   '9dom9fm6cq7rvzrnaw1paq9hcntliwwyddjdtvvrrbv9blcazv9qvoigqdpdf1nm' );
define( 'NONCE_SALT',       'aebv5knso4isacccyd3yr1pq0aqxwjgc6usxak8hqicuumq9atwg8grbjqmqhl9c' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wplz_';

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
