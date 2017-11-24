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
define('DB_NAME', 'vladymyr_lem');

/** MySQL database username */
define('DB_USER', 'vladymyr_lem');

/** MySQL database password */
define('DB_PASSWORD', 'Vl13ddt92');

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
define('AUTH_KEY',         'G3.hlzR4^_%)VBN5)ZBXR,n-nK<urW=l?qoBS;Ce1m&X$/Qx-L?Q:^/MTOJi&38z');
define('SECURE_AUTH_KEY',  'jA].m&Ku+x0bv&Km9^>:_><?&);?6F?jG}Jms]8Zhc} ]Dx}/370ZoAbOrHTz4Z;');
define('LOGGED_IN_KEY',    '[[<,$Ukk0hMM)J2QueF.QjYNMD@rQ3zo?B8+sJv/To)E+iIU|cUgf;@ QXfm;I*u');
define('NONCE_KEY',        'b+DrE-5Tlw]]JegLBlk8rQ]7[yX:7&H(dvl*/wh`U]d?j02?k.L?2T`HETS*F<58');
define('AUTH_SALT',        'Zs}<yL^>CqX|/=R@=<y3$%AQ#%1B(SR fc0s1Y|A+yzb^~HwTg2T4`TGpb:1(-E;');
define('SECURE_AUTH_SALT', ';$FJDH9[pH<KlSg^9@o|&9HXRus[KBsQ8]{Wtw_czj4|XtXcqH8:Yqrkf3ST%;#V');
define('LOGGED_IN_SALT',   ']!9Y45Zg?{h<IrHmK3MhSh}6ljiO-D wv!tVV_HN@m8)Y7/[oo#)p2jRIo-+1}va');
define('NONCE_SALT',       ')/e|G(WFeF[Gt}LON4|=-lqhz{bq> Z@*Ll}Xh>zI@kq6vX-tqXBzr;y8j(Lmmww');

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
