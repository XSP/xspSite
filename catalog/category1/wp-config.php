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
define('DB_NAME', 'thetecha_gall_1');

/** MySQL database username */
define('DB_USER', 'thetecha_gall1');

/** MySQL database password */
define('DB_PASSWORD', 'password123@');

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
define('AUTH_KEY',         ')>(+@czr_!w2ntdc-zySlm?Ec4V+$K|$sm#5cwesMU>&+<!f(R@n6#x-Kr5{5IGr');
define('SECURE_AUTH_KEY',  '@eX,s)P!*0&k@z>2Nl,2)/`XoWzD2}&<u<2{p|@&]Rq@!M?:$<OeH&|q&l{!= cN');
define('LOGGED_IN_KEY',    '+aa<z6- `/i[? ZGJ3K.NZ$w%oiy@H>-Nke*X|.2n}I9w&Kj5r#M78v0 *UumYX:');
define('NONCE_KEY',        'sFNC8+tY!~dz/|,crZp.Bw_:1<+-&I&F:+FdzqfDI.q~d]Q:arXelXG_kVJf#:0?');
define('AUTH_SALT',        ',CPD5k.A]ghZ:bEOFNWXb>,c9w87:>G[Y1QxkEu*:vMg-bj86;TeYj9M.br#?LpD');
define('SECURE_AUTH_SALT', 'KpO_%D7$4T/{6+}Xi1z$RrzG-gxd-/J>kse)Y_7-K1LRBji uwj [r&B%MFkJE)(');
define('LOGGED_IN_SALT',   '|B`O7-{%B*1lXE2.S_wzpT5Gys.t{70R3xXaN y+JjU]vJ!kJ.+KoSb|^uXk$n-J');
define('NONCE_SALT',       '-b8+V6)#kpUT?LbLVjneYcwzLvKlb{aGs36f{Z=tbma5kcz!Un,D=EZE`YKkai#r');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gall1_';

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

define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
$base = '/catalog/category1/';
define('DOMAIN_CURRENT_SITE', 'www.thexsp.com');
define('PATH_CURRENT_SITE', '/catalog/category1/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
