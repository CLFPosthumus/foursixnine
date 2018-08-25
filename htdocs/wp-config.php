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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'ceriel');

/** MySQL database password */
define('DB_PASSWORD', 'gangster00');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'S-CQS P9UjUEtaz/%ohw9m/bTC*[QegJCQ|?0<K4]_bX3(N<,6^IbV)Wz1[nqu)B');
define('SECURE_AUTH_KEY',  'OE!dIbGBY]0`e-=1n(sL#O&&)Snw R,n)?&-w~.e8!;ivCRu(pd#mI4L%CVO4jWM');
define('LOGGED_IN_KEY',    'r7t^h2RyTkN^qQ]V2bCl^VxV+9Q1fgy,uiQ%o%tC=e$uf ?mRdq/L-*2~.B_yXly');
define('NONCE_KEY',        '[49_moE!*<[opdmEx)^T9C4fS5^MCx>P.}FeQyq%T nTWHZu1c>W>lb~Tx=!:G-z');
define('AUTH_SALT',        'q4kC}_,xpOFCJ:D_|MOa!<3E_$i[sR{qwdMcgUZHtW8P*wJMdme3i*DDm=5J=sW&');
define('SECURE_AUTH_SALT', 'T)^SS2G^jm@/@Q`RffUbpMMvB!aWK_F9rL=n@8cNyzOwOP+#V$>kIAGt~4T<QeJ{');
define('LOGGED_IN_SALT',   '<u~zW$d3RT$z)EyxFU%!4[^~wyB^-^09pfp0 6_WG+&GJ;@SY=7g $2[%QW|0i1q');
define('NONCE_SALT',       'Y0?u#U$Z7YNv2d.1ok-@q(E3GqKZda[Hq%C5j,,&`MM]S/n2`XPAR{88-m;uMvqd');

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
