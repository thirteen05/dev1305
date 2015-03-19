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
define('DB_NAME', 'fontana');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Benny963.');

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
define('AUTH_KEY',         'K<tm f/Uz+sXN[=Q(m!YqU[_A-Vp7snM3jbF|bG-dDOhK@mAq2X)XZa;Rp2-=tmE');
define('SECURE_AUTH_KEY',  '(d`9E-MdGLM1MZ?[3.Jc=}Vh-&yqTG;rdT|p(UuI<-@D-t-LYw n}?5Ek)nC-+g$');
define('LOGGED_IN_KEY',    ']b;P6.9TX x/B^}W=W%#72MmkHU4P+7?!ozfL!0zy+3$16Q~M4x)^->hHTv_SN]x');
define('NONCE_KEY',        'uJNw6&oM.FiPs|,A+V(-B-KS:rA5N=@-:dbdSgvWv7z7f&aqQ+uPT#4Q-=VW4<[M');
define('AUTH_SALT',        '0>)u1://qH75!GcoE}wZZ{!|};0E|rgp&xU1qs.0<9|u(|S9,U[:#7S9iLsy5H$O');
define('SECURE_AUTH_SALT', 'B{MhihVx@$@>H_sFD4mNj@*!Ok*.wT*w>!+%7`+ 6KKAwZRk!^dN&2hkmpbapyN6');
define('LOGGED_IN_SALT',   ']LTzj5xZ`Y(v/>n3qNlG-^w&vW:|ac.3/2im-v_||[J|I<sVT~$13CH|O]ZvZe4]');
define('NONCE_SALT',       '-vn{HI_M],V34Jm;b8=]R*veyPY8+q=QDkyt,IHHTN]T-n53CzL=)mp_3Dtpl!3c');

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
/** Allows Local plug-in installation by switching off FTP and turning on direct */
define('FS_METHOD', 'direct');
