<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dingxin_2023' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ctboa:xfda+5 -5Jf/xJN-4{-!0b)l6!}:zYeL.g6pj=^X+3;*M:2#cwqb]t1P/<' );
define( 'SECURE_AUTH_KEY',  '5->gJF}jCjFn)hC4F4/dT=A:NeUl&}aWZH#,a7,=8ps&$f+6FQp!=$eodqhVdv=J' );
define( 'LOGGED_IN_KEY',    'q_pcNeYYb<3}a(fTNo@f&5<,.yD;}:MG?34fh(AOvm4AyE&>i57+F&L{@x~HA}/4' );
define( 'NONCE_KEY',        'p_{9;<Ix}2W7@pAx%DXS#}Cb(hl._U#P1YyXjsLT26o9]QzO}*Z84LIVl!xjP.IV' );
define( 'AUTH_SALT',        '%m:-O7J^ QlTps&687J&y&+XH|Y]C;D.L`(`PfKjnC4MVlvmF+[{`:(b,bTW:B*7' );
define( 'SECURE_AUTH_SALT', 'gg~uR$IB_yP%!5Mp1r[fF}AF)Umx_IU)H]4W*(Xst|(d:} sO<VG:y,Q!ItLa1Hy' );
define( 'LOGGED_IN_SALT',   '+~b]irah^2ntjzeF$=cu5?+YwkW[6|p?Z4 nKXH0;^XD>H&1oVOud]3c3}mVD#2H' );
define( 'NONCE_SALT',       '/mO!V%GMMNz6W0TM/0QY3Dc7qCHm;g3`e!J8J!(HNt+?zMbo>I~h[{;$Sl*;RN[o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dx_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
