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
define('DB_NAME', 'wpfolder');

/** MySQL database username */
define('DB_USER', 'wpfolder');

/** MySQL database password */
define('DB_PASSWORD', 'ItslWXg8P9dclItC');

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
define('AUTH_KEY',         '[I2.E-)huq#D+|mO^g,h#;d8`Ut*KKxVMNVhyDAt>ok(&EM^V2WQ!Qw]$%@ASu-N');
define('SECURE_AUTH_KEY',  '`{+Wj`.K:vXl6|BP|SnMEl+>>+99?-PO`O#D-q9AUA|?ka1}*C  P^/A[GTu`TB!');
define('LOGGED_IN_KEY',    '`G?F!i|E+p*:%Hi(Vi=?sO8Vdx)Z1|CjLc48+|Y/:h2s=/nf@3gG&EtDg0V3r,A=');
define('NONCE_KEY',        'Xf}/;)[VXLT0|Cam2euRP&#?/:s~v_!QH32=?37uGtW#Y[TR3u<UmQ@B4b!-7ZY8');
define('AUTH_SALT',        'I(gW|L`-TS+<>d`O_NW*o8+3<ZwA.;%d0ns+i]N@J+|&0eXvocZ|;H%_vqHt#,30');
define('SECURE_AUTH_SALT', 'f*j|;m&k07t!2[i/q,$uda+fPczZ+S[u(h81!o]*mhI^z$`]60o(gP[KORol!/{U');
define('LOGGED_IN_SALT',   'gpx1]U(d{mQ+4-n~eu(503~MWW#EpL+C|pH`F*1/];a>cF>tEo{n ;a:2Sy]4U?|');
define('NONCE_SALT',       'R580}mcxXX|d?]ZB?b>7FL:1U)DmBjZ9yL@xVc0*{g+dlFwsjXAx0M__8CJ[60ea');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ghma3_';

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
