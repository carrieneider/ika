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
define('DB_NAME', 'iowakaya_WPPFI');

/** MySQL database username */
define('DB_USER', 'iowakaya_WPPFI');

/** MySQL database password */
define('DB_PASSWORD', 'F0LRI8Ulvc81WPTyU');

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
define('AUTH_KEY', '9164cf728242a02172c3df237a125155120d258121fc513692fe7901a1d26c87');
define('SECURE_AUTH_KEY', 'c4b36af47c9568b319dd5a32916b4c7b6ea4c7f0106872e77f99b902eda268ef');
define('LOGGED_IN_KEY', '8962afb8de071da701a0de056d7d730617b0d874a7eeb45a144b0477b3e0f78b');
define('NONCE_KEY', 'a1a80a3a48b1748fa3744d8c3b1d87d3f1987267ccf2661f05f120fdd2202ba4');
define('AUTH_SALT', 'f12d4af5d808aab6f0ab4de33ae9c6e4c59d431d53b2b43debfd08c88f3e3278');
define('SECURE_AUTH_SALT', '0d5f02af98c4c65591edb330bd36c6f2215ad09894735a86cfcd65883cb9688d');
define('LOGGED_IN_SALT', '53f1a01fc067e30dde306f9f5fb8d09ed26d66d34070289f2edfde454201856b');
define('NONCE_SALT', '3c27ed90cf741ea8a9b2cd75d8db02dba99f3c7c8dcfca48dd4778e8495a6427');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_PFI_';

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


// Settings modified by hosting provider
define( 'WP_CRON_LOCK_TIMEOUT', 120   );
define( 'AUTOSAVE_INTERVAL',    300   );
define( 'WP_POST_REVISIONS',    5     );
define( 'EMPTY_TRASH_DAYS',     7     );
define( 'WP_AUTO_UPDATE_CORE',  true  );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
