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
define( 'DB_NAME', 'text' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BGExwxIdfaBk7WPd8bEqu8Ghwz4EmDfjBdbBS1nzX0fvR7PD7OoCZKTKJf0fD90W' );
define( 'SECURE_AUTH_KEY',  '6rvMYLfHdouvk5gxT6xqtRNmhgJDjOf8bXMwTUnv1Nd03ZAah4gT3FZ7fay3N1j7' );
define( 'LOGGED_IN_KEY',    '8KfYri93oMuKZTcuTT0Rhu6AxVHVrXe4yqjGZKtC25ndZocToyo3q9L07CEXF2FQ' );
define( 'NONCE_KEY',        'mkrpXDW7eKG7pfiQDwV5phFqCa9Kf2wSBKLXc6KIYqw1vFUC4Pkj1yjkOfg9nYmS' );
define( 'AUTH_SALT',        'dutfqVCo0QIndZ4GoiLFty2n30c0990bVNhxjdTeZV5emf9Ku5d6QeEBqwh8OoNt' );
define( 'SECURE_AUTH_SALT', 'CKjhGcCfX7rL9rN8OY1y2FnShrwoII0Pg6gU0jjN2uu0iPgVQL9Va4GTd0OxV6NK' );
define( 'LOGGED_IN_SALT',   'GrjNk6kwT0pGdvqFGdRcE97m3BfNOx0Ggzw7i9MT8yP5YtNBTiFKDvaD0RmxrYTd' );
define( 'NONCE_SALT',       'HjYeyjcBMwYZxkPA82at9JeZDDcCsauPRzAM425RdhFqfmsa1Zz7cAY1R9iLh9C4' );

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
