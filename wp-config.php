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
define('DB_NAME', 'royalcut_WPLCD');

/** MySQL database username */
define('DB_USER', 'royalcut_WPLCD');

/** MySQL database password */
define('DB_PASSWORD', '9w41atlUnvdiPOyKb');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'dcf30c52bd3ac5a8d10f806acbf1d7cb452d1ae0302874dd2bb60985d2e1db0e');
define('SECURE_AUTH_KEY', 'b148de380a096809aabcf8d16eca5c6f2f25b4a1a624673b7f8bd29e7e4a034a');
define('LOGGED_IN_KEY', '5d523d6ee579f51ba6e0328cafbd10ba20f2010e8f4fa254c0434943dd754b91');
define('NONCE_KEY', '4e638d7a63b474d75fc8e6c199493edb767f8d923a7db4397fe8a12cf5cbef05');
define('AUTH_SALT', 'e73af5ac89de4cb41bf2d68e71a0a5b0e44866ffbede426479deb4be7d3f1caa');
define('SECURE_AUTH_SALT', '35e10de799d00a16f99701e5a499dfdff4054de8bec0baf0ab7d251ce25b5b2e');
define('LOGGED_IN_SALT', '50d55e3a3fc6615fef88311b94717bf62b94442120733735b8f6b846d2e57524');
define('NONCE_SALT', '413253b90ed2a718a2f592c68472c23fa239dfed512933dffce7ed37bb3f79fe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_LCD_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_CRON_LOCK_TIMEOUT', 120   ); 
define( 'AUTOSAVE_INTERVAL',    300   );
define( 'WP_POST_REVISIONS',    5     );
define( 'EMPTY_TRASH_DAYS',     7     );
define( 'WP_AUTO_UPDATE_CORE',  true  );


