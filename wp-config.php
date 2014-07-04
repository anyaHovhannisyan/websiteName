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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'aq7:i43R*=0pwWPI[yP{l%b-F$,v6Lq*<]eOx+;$_9r+e&-d$-~Jj2E|-}!+Kx=y');
define('SECURE_AUTH_KEY',  '|Z+3N+<5bOL.0I?D25vHBW}zD75M!TSsbx$Z:yXHh>2Vt/=TPsOwsHu&66^6S)]h');
define('LOGGED_IN_KEY',    'c<&HYiD R]ECdYHYn>;wRF0xS;TrkK=-vBIxuwE{r4y:KDk07_2y.k;k|YEt~H-+');
define('NONCE_KEY',        'v0TS`1wH-~&GGyZ2HZ#-jUbq]/A0KTf-Bp,mb(}4p9$eA%-J1Gj-B0Ys[zz{B|*&');
define('AUTH_SALT',        ')|>-rA<^9ZPX(C`vsS:+~Wkw]TxX%&VT+)A1dJ^Nd_|jr|(fzh$qfsmbkRK]A)X2');
define('SECURE_AUTH_SALT', ')Cfj@jY!-B@Fw:2+^}k2 r2p><`{zpmi`~V,2sBt#>Vi6dP E?^a46V@p_E[c3Vo');
define('LOGGED_IN_SALT',   'D;A[$YJL6P@>C,){oCE%V((]USa/bhmL+ZCEOr?r=K<VC/c,9^` rU}kn<5=XT36');
define('NONCE_SALT',       'jB|7EUJHe|9O=P^UU )auh-TIvx{G{[gv:?LG9yhyCQh3*i=|NjeIfsyeft-xQ5m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
