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
define( 'DB_NAME', 'novacommerce' );

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
define( 'AUTH_KEY',         '4jdrZTH7x4irIXVU6aKtUCEp4piNBUxovqISRqCeuYRmY4WdwHugSh4SwoT4T1gr' );
define( 'SECURE_AUTH_KEY',  'Sr3w8qBjD85ZoEt7dKQUojN4JjzoTFfrszwONUOeCH5v0qLaTX7PKj1qKsPSHWGS' );
define( 'LOGGED_IN_KEY',    'zetkEm9FwyhaZt6NyIISjuAhJHJEnChBLNwG0DeLLZclEI6DwP8tZTbz1OhyLYyO' );
define( 'NONCE_KEY',        'iRgczXvfsESVlwW8k69dmyXmUcFvjLZutuJ4TiRoTEQLzMge7xMB9P44vAl1wKNm' );
define( 'AUTH_SALT',        '6aJciPyfv5gTfZfG2hGiImv0qZav0k3O1altqQRh31xkknd5xXKG7vjfufF4EWPb' );
define( 'SECURE_AUTH_SALT', 'Rscd3ICextFQatzfHsdn5a4WWLEvZS60yPXTYnRaandT5Y0TZnIL5ayrtTY6M0QZ' );
define( 'LOGGED_IN_SALT',   'KeGrXxcRKReBnBAHKRpyRAniXXufb38FkXbRHKrpjOta5RJ6flDgMVSHcP0vXx3G' );
define( 'NONCE_SALT',       'FQwJh1DH1TbWmXPKeG07NTiv9h8zQpPTwzBkO3dMtCf2uwaor0bfo4SjbcWHQDB1' );

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
