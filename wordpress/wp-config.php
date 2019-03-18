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
define('DB_USER', 'thanhminh');

/** MySQL database password */
define('DB_PASSWORD', 'minh6464');

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
define('AUTH_KEY',         '^+#vwdNGwBv-vk>@^:M~T4CUA2C+{`j~P|idFamay49!AKAPF_<xrc5wS>z`*S(y');
define('SECURE_AUTH_KEY',  '{ZxeMIxy1Asy5Y{n`d&N}L2wv-2n.Iusgl.o=(tz=gb);T.35F8I5PCo1rga*4`Z');
define('LOGGED_IN_KEY',    'g}rrD{]nr&8q][6z?kPjb=WREd19m$_XoHAD8I?q,71aa(J4K:|ogr|4VBg:,@Q=');
define('NONCE_KEY',        'EhbLADSMkjlGILq!urs8^,;I8^b|n._aB[?D#YR 52hP?F)|%b:>=~VbqC7@AW~P');
define('AUTH_SALT',        ')uvv[oJ0ubpLY77OM4 -xOgBMXa8rkzW-:DEi3wE35 DwGS9,e-oc|P?A%yj`]Fz');
define('SECURE_AUTH_SALT', '<HlJ$YGfXdqY{>|Y)w}e0,[%OuL}/]v*w(Wzwo#<vcXDUU)G,FB[S8pxg 4[m#Sq');
define('LOGGED_IN_SALT',   'f5]wq~?gB V#7{PS|6$~HRi5@bk;-dD[ph[G&JL43 sy9depD!`}2Ri!-eaNSC1a');
define('NONCE_SALT',       '^*FXe8cvV<s7ElWNm^&l+S#sFGag%aegK4CuiSEbfAnmsWG@t9/DnY1pXw:npd|c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_admin';

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
