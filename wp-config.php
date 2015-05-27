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
define('DB_NAME', 'plugin_db');

/** MySQL database username */
define('DB_USER', 'plugin_user');

/** MySQL database password */
define('DB_PASSWORD', 'parola');

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
define('AUTH_KEY',         'a-R#ed6=2,%-k*mnB6Txx#%RK:g|D)vc|Ze^EQ0M+Hd/tZv<shNsX~3Obr!P|hl ');
define('SECURE_AUTH_KEY',  'R~.Qxk7)K28_Th}0+m!M@Z#_HK?OfwV `)a4cC&Ns,,e8TnJ&Fq~l4>O~W-?tAu|');
define('LOGGED_IN_KEY',    '|mM~>_EeYK2LQe}9{9w|uUh6I]Pu;2ld)Kz55^FUIgaPpACO`&Z6GjAj;Jm98LBg');
define('NONCE_KEY',        '|<~XeY7Wdn]o1p-!j>y.Q7K|?:-LDo]@S;A|2n6WeK<He^-:?hvMq%(,^86kd!Tj');
define('AUTH_SALT',        'Ch?5dh?>).>-uMj7?F9(2I!R &OE]np<wdwFzm.wL^74=T|Bex2F7Dj)6Jt|7RJ_');
define('SECURE_AUTH_SALT', 'tzRH-PS/&QG%5<T+C8oz)pKyY@v/E1::T1b,k%|fe2iF`UF@Gq`P+chE*8rP~7uj');
define('LOGGED_IN_SALT',   '~FZN:g.QWaMjkf$O,)pEU}f$H{%[GUMwv$`]LKOtCNL/Nz]TdgKxJ^I:D(1I32-S');
define('NONCE_SALT',       'y9`D]XM?L2>sYa=D*$*ZktkH3(+,|rKlshgb#hZF}AfqVcSJuA*19Z1O<qt#zjN|');

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
