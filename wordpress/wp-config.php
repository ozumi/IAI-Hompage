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
define('DB_NAME', 'wordpressIAI');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'iVADER404-2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         '<~|rLzpj2^oiN+tgc-pK/a,[*>!CjK`8L%gI[>>}Qimld,Pvn%Li8D<<IO6@05(G');
define('SECURE_AUTH_KEY',  'a+$>S:KENC,m%[;]%T+wPgR+NcsBd8<Ys.w gT;z589f:DqeZV_typzD#7h;?~2P');
define('LOGGED_IN_KEY',    '++|4zJbo]<-}3df/j;!~DQ({@9>@iS>]e)(/lX-s |;-r4)zGjdnRAjM~56+H=_@');
define('NONCE_KEY',        '|E@0*)m,87|O;?$3J5j>Cb]$oa-g]!Zz@D~0NSj+-&Xo|O{|+x!N5:?J/JoX2Y29');
define('AUTH_SALT',        'g<_}eLgJ|U6p2hntEfzwN|%To2Uubbd6lpRi|#dR+pOW+%1t3a|5)H=iI/kjv3Yl');
define('SECURE_AUTH_SALT', '*FQnQD+z--%&8v$f9$zvPoHl(@.|/7J(<Q-Bqyue!@z%E-KTM[t|/nhLzWXP. =d');
define('LOGGED_IN_SALT',   'j(O)cwDx>6]ejmXFeW,u(uS-AxwbXLP-)Kj-T?b3_Ya^)E 5q6#Uk:>`UXo(h@b[');
define('NONCE_SALT',       ' xx$~-U2$P|o`@`ysqqb`#ef=6]^lsw|!H!S6-2sImjWlRr4Al(-ujoeiEc.~+dG');


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
