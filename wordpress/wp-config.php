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
define('DB_NAME', 'michaelr_wordpress');

/** MySQL database username */
define('DB_USER', 'michaelr_wp');

/** MySQL database password */
define('DB_PASSWORD', 'michaelr_wppw!');

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
define('AUTH_KEY',         '~4x1m>e5*V, qD>(NsVL`*ey|0xA_CdIOGRpZ|rYJM&p!4h--(IFi-L|QjO:Q6;8');
define('SECURE_AUTH_KEY',  'z)R[~S:|Rn,0Ws|1SjOr}q}L)kF5L0fp!+K3l|U27Abw+cB5&fxt;{<lg4(G&7-U');
define('LOGGED_IN_KEY',    '?VBcfn;62KfojFUv}=Ek28XV#.S)y/rU}b[=u;_$>N/@UD=bpgVMGML-L:(j^d&9');
define('NONCE_KEY',        '_a[i.DXnLGRVM7h@yMR%X>sIVK>R&aSwkS{%J_SrL]MI7v-qCG8rME6aC4.~H5)l');
define('AUTH_SALT',        '.[/RDx+$JIN%*Z4d*|r$i/FH6|oQtQ0v!wOmgi0~e94ad:b4@7i/dhro[N<;Z<{4');
define('SECURE_AUTH_SALT', 'i=|P|08{Cl5Ct{jA>uMwiAQfB3Ve6mgm#-d<1]3,y-iKPkYoD6-bW0)&RIY&CDZs');
define('LOGGED_IN_SALT',   'I-,Mm9#H RsL&pZs?*,5laNZYh]??={Qq|15Z18cY](RS+,;`TQC|8qe*$^oJzA0');
define('NONCE_SALT',       '~|UosDbb?8pOffjT|l9qmwA~1s* +wy-kir;J&^QHx3q[s=6m=axc)|rA|Dc=|ZJ');

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
