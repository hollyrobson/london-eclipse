<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'LONDON_ECLIPSE');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'VkeK1]+;53BJHVfc?|c{2^=F*|5Wfgc{/7WncfwqDZec1[N5I;]e>AEg1-^t~!|*');
define('SECURE_AUTH_KEY',  '){=q+/>c9I96()HPmR?+QY!;sO~nPtF+alEa$4EMJ%z_q|wJ/{|WKiSg0%(+INe+');
define('LOGGED_IN_KEY',    'm6t2C>v+%>ldHXyKrW1OoY~ ()a=AupxY7?]h5)pV(@,EXFS<39BRP`w,mc/%ln>');
define('NONCE_KEY',        '+`9CB<H.oK-B-W9,/zgK]1-d~<)e{@Pu+TfHf$@Sw0}i@EE3e3VoI-*sGg#tL>}y');
define('AUTH_SALT',        '#:^<mXlTcI:@Y0#j^f^#PH~]b|l=p7|$| 5GYqU-*@v%pKhD/LhxJ?iM.8;6jDI|');
define('SECURE_AUTH_SALT', 'rhpN=M|l$As|dXr:Pb(_N$@iN5vu&{7_5xcFB[|BxaI2e9;M):{-#:t|IJ8TP==[');
define('LOGGED_IN_SALT',   'sr3-_Y#FPln;dt/[`I dhea%}#-h5FB78$zUIYxge8aC*#x:+-FSq~*CH{GBJy{^');
define('NONCE_SALT',       'hN&661ig!s]1Q#bdK:5{-(%oQ|t_Vi5[/SQ,e4ltu$Q})N%hK&AUf1kPiWK-:|PC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
