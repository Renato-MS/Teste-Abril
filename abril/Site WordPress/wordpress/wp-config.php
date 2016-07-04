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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         '5QwlXsqi+: S9,S~;M(3 :kOyd1m)wEgc]]&Xq JilB? ([)D(>6&rZ{o*lEa_f*');
define('SECURE_AUTH_KEY',  ')^Pf__1u}Qy)1{NH5@YQir~Y}itm<Sx97+:g5R)Pj<wyj-/=/B!D$Ww+Hz(i^|cc');
define('LOGGED_IN_KEY',    ' 7JgL5t@9X<NP_{>&~4akn&Xi:l+/ZFc[/Ejz[Xtd+qHO=@lmb66:;~:Vf;?;ML+');
define('NONCE_KEY',        'u/~8!*1B!^u0sn]Tt)dyLzkJV};.5kph6f@j)$]17h`B[{,IPsd(eqZK+)dpoYiV');
define('AUTH_SALT',        'wN>4(KT/J#SJSxUf8k;T1p|E#4i?K;$gHRQ~X|tBf}f<TUk=kni(<-eSQ>$JHDOu');
define('SECURE_AUTH_SALT', 'Uu,;UV+W7nJ99=z`&Q86 >02heyXK>d+Y[*;;~-l#7Z:T=3d^#g.pq=($VI8&>-y');
define('LOGGED_IN_SALT',   '/L}~Zz}xb*{J4l<A>|(9f],Iy`bw(fAs}k{^_?1Q9h]xM}w_C#l*-B8#RESld<Vw');
define('NONCE_SALT',       'zCCA1)Gs/i3&7QzI;)b#^9WUp<TIbYo2@;g)c*R$spc7~}3uB#nYFz.})Z@Lw3i@');

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
