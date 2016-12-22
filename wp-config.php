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
define('DB_NAME', 'tiwence');

define('DB_USER', 'root');

define('DB_PASSWORD', 'root');

define('DB_HOST', 'localhost');

define('DB_CHARSET', 'utf8mb4');

define('DB_COLLATE', '');

/*define('DB_NAME', 'tiwencefuytiwenc');

define('DB_USER', 'tiwencefuytiwenc');

define('DB_PASSWORD', 'Tiwence11');

define('DB_HOST', 'tiwencefuytiwenc.mysql.db');

define('DB_CHARSET', 'utf8mb4');

define('DB_COLLATE', '');*/

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C4H^(^_M~F$*h;Ak52u~`,^ xNh]V%ZWbCDh &oX=Y~3/3>AwQ(8C*lb;NRh|V7c');
define('SECURE_AUTH_KEY',  '.Qv}-ogU/,5yS|:#^qY_qpDufLYMXJP}/pRpGHk>m1LH!]NXz|4#U5oa{FYg{I<!');
define('LOGGED_IN_KEY',    'R6>/I6}ot.E*-Cz#xzua]H,@u*l571/!Ikco)fH_a*hlBx= w&1<|{G<8SVBjn$s');
define('NONCE_KEY',        'OOs;oVz<[LP!?Et.>xY%u>EJ1>X:KzDE4cAmkhQg3S)|Caa!0a9bwxK56kkOVy5K');
define('AUTH_SALT',        '>Epd4gAM]9[+$arL09amxYE1sy<oQ1sO5LjjEEyFT3&sZbz5^=2M]]753E36,;&P');
define('SECURE_AUTH_SALT', 'g;afLk`p5_UPT,4WwUQMpJA~WZR(,$_7Wx}yF,i5~a2nLr#UwmN2{qKNa-*_!:]Z');
define('LOGGED_IN_SALT',   '.[9w^}K]As_1)Xa$F39k{5ppa+:sbfVFS4i.rqYZj@DyKr>bOrN=`(Ihr1XU+G^5');
define('NONCE_SALT',       '0S49pQzxI2D&4w5H6GM7(gC8s@CZ)(34O:vgO=5)Wz^t/c|_}%yJV^ _T1MRY,^U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
