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
define( 'DB_NAME', 'rugatech_db' );

/** MySQL database username */
define( 'DB_USER', 'rugatech' );

/** MySQL database password */
define( 'DB_PASSWORD', '!Rugatech20' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(r0&_p%9kM.RYZ[)s:<<2|yE-tg_QLBTbjYc-s${!#/JW#N9P#6x3-0,~4Z>SnZ+');
define('SECURE_AUTH_KEY',  '0 8l=ou]8(%FPi*#OS8jecD<4oIy)jUU4utkPZK^%UR,)?u}uh:;Fnb|N*@ttcF:');
define('LOGGED_IN_KEY',    '1dX%ks$?=$m3R?+rot~O^UH#+JeDP-/AB85*er-noi|iulpuQi5/+J%:^XYX8DSr');
define('NONCE_KEY',        'j[swzGM{EKL)KO%1bEk_v0M:8U|6_^.J-cU/(JkLda*;Q7;%sH@V!Xu~O|9TB&8V');
define('AUTH_SALT',        'x*X,}$n|f`ye]r )S?3iZMep@9] }9bWZ<BVf[%GWzXNS7^B;4gf]X9bE+#F}8?q');
define('SECURE_AUTH_SALT', '6|xD},LUm5)NG}|um4C{F:A-}@Hyq|Z+zPhgip0/WjKQs_fnrmLv*TB>%/h/-Wt5');
define('LOGGED_IN_SALT',   'SL/r{|<yN_?ie-:Ga/BRzYZuW&7YlG0uT<3c);;z44[)]+8L! Q|V%6%5p6BR&e-');
define('NONCE_SALT',       'QZ<s?T+Y@/N6}{N>o-X-J(5g_::r4*M-bp.^ZA,)_1Fn+%` (aNIpL@&I:0rSe~#');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
