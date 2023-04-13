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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'ao3u{L~Rn$6*n#C-_rWWyNO|ic9Kpp%HZ oUB7pKl[F82><I%i@$.M?4#q/r|cy@' );
define( 'SECURE_AUTH_KEY',  'LydR LLj!<yw*]Y`aPg}a]uYY(zewtY)DWpg>;|B)OEA`/4~CU:Vp`FnVHMgK7l]' );
define( 'LOGGED_IN_KEY',    '7nmAkpnhpxxYjQ/DYn 1$=zKb~h 29YN@MA&sS>n)|oz,L9FcLx2a{MW)X&R{~4(' );
define( 'NONCE_KEY',        'tpTg=R!,@{PmJAQY{ e!S.P)ezaZU>/BP4z0DMQmkDP5P*Ao*}j@<Mmz#k5{NXvK' );
define( 'AUTH_SALT',        'r1a=dS%7&|!)zwfdspHV?c4F1joo.>;.KzAo)93:R;hIzOu/]1?2NEdt7yYU/Z2e' );
define( 'SECURE_AUTH_SALT', 'B(5f$K~gD.cD}=qpF,Qyjs{D,t!hTpy88X6Euxs!rLAU3icoiZ@XDH. _y-t$6V+' );
define( 'LOGGED_IN_SALT',   'ud1b:[4)|pUZ=wo9rBuS-TO#+,]U<|gp7voP%fNY?y5O>Tfdq)Ckh2FA`,ua>k_l' );
define( 'NONCE_SALT',       '!s$bg+cJA76,g?VplBe|oW|7n^aii<)QfmAY/ HN]~+3Se8ZIfv8DLN7^z$Y4lHM' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
