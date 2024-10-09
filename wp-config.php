<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'esc10stock' );

/** Database username */
define( 'DB_USER', 'guemes_user' );

/** Database password */
define( 'DB_PASSWORD', 'tec_10%$escuela' );

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
define( 'AUTH_KEY',         'B-6TLtt;D,Uiw~Sn?ONij<kisoQ}k?}Cme$.edtEz UVO1+V+S7+w~yK$M}yaWMI' );
define( 'SECURE_AUTH_KEY',  'wE+M+}?B2rl7 vo5q);Dxj1@)H%K3X=EwRcf09-fDs>6u[A<5BcR77pc7;np|OsM' );
define( 'LOGGED_IN_KEY',    'f+&]>N=k$6Mg;pYniJ3b4gA{=9WDGnjHP2]B,E*4<i9EUC:>/-<xl?WPlH|L73El' );
define( 'NONCE_KEY',        'V7z}O%C=@APvQ % I|u4] .i}QIJ-u;^{s10^{/5Wf Z&vOS~EEc]#o4kWsy}`2 ' );
define( 'AUTH_SALT',        'AfbZl-W{Nj8cO7/sT{,Wg2xevZsVp^zvXQ<1HJfl;~R]L;%-hU4b3jhdh*bQ2?7m' );
define( 'SECURE_AUTH_SALT', 'C{ NKQ6/9&9RVQ|Y#[Bl7 e9)~tb,wZ_4.zx]dw?9N8~QU#8:SpV^q3U;4&}dqsV' );
define( 'LOGGED_IN_SALT',   'c5T8&ye3i9kYud.9@;_VEtGS+x},b[|+M&$)V$P;sa[}e($%o~p8rDMl[UiL~d9`' );
define( 'NONCE_SALT',       '*:@Tj0w/k~8wW:eJ=5}i,X&;&*O?agR!s$i#TM7QQ]2Nayb+y@SvJS-^~N<saW[P' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'esc10_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

