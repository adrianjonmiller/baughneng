<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dev');

/** MySQL database username */
define('DB_USER', 'd3v');

/** MySQL database password */
define('DB_PASSWORD', 'oD&vipT&i^oTs)');

/** MySQL hostname */
define('DB_HOST', '104.131.141.243');

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

define('AUTH_KEY',         'KB2%WMfTwh #!XB20Of,%D1qeBw-w]+Rr~sFMG+9mwYc3uM8+9cNUcth+xZr[]5I');
define('SECURE_AUTH_KEY',  'R^+<YL#lCda.bZE`_Hw?uBuicS&^tHUYW-E7e4*w~`*3hR6e!R)AJSNm*vr4|5~h');
define('LOGGED_IN_KEY',    'nI+pGLj;xPIwJx*B.(eOvd=Y[sZ{xdY^AfE+a2?${Vo+5NnB])2b5XpR5U~}xpmN');
define('NONCE_KEY',        '!+fnQVg4cQ1={FguAWqHTLu_@/#gkbHH-@LVV(cbh*@l2P0!KwmEg0gYEux9eQ[(');
define('AUTH_SALT',        '<}&4HHAzYmI7JDaE@xl+X{5:RzrUM{t.|w7>FK)5.CC*-P6|u 4~W~{_&JsLFuw ');
define('SECURE_AUTH_SALT', 'g2L<uh)x|.g8g76t]K(nmc!!!w-~9$h}`K>tQv,UpyaF 7>c[oZyh1LJxTLlW.Q=');
define('LOGGED_IN_SALT',   'JE9WDO&R>`3dUH+,4b>w*,QWFU7ty}/EI6|CFstk$M%HSuNSTx+OW/+04dVTOe[5');
define('NONCE_SALT',       'Of9HaRP0;-b^vAvB w0U^ +`PVHJV`Gnq{GwFA)/nASp7v;Z3i`RVb3,0#~Fu;If');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpdevbaughn_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

