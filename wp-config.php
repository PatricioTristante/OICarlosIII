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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oicarlosiii' );

/** Database username */
define( 'DB_USER', 'oicarlosiii' );

/** Database password */
define( 'DB_PASSWORD', 'oicarlosiii' );

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
define( 'AUTH_KEY',         'bc5v `rS+iWDgfH(4kzqY$i?evkz{[_P06A=*aw0QE8k+fF $t{h[Q_S_3yraFG4' );
define( 'SECURE_AUTH_KEY',  'ChPPu2Qvo|qhGX)$C#mZd;p|1`g_7VFVg#`OYr7VE:m;dogBJx5N/#Y^Wf-G2l)7' );
define( 'LOGGED_IN_KEY',    'q%[m:#g$Z8#opNExl):9!-4Af}P,yfG9i[7ChR.YGpp;*2FHI~``Vw%]GBg_( 4e' );
define( 'NONCE_KEY',        ',-MV(FS$!HO7DSrwLYWSc~-z8V;mUXq>Go4vA^-{g#W~Ef[7fz}vk=4v`T7L%]41' );
define( 'AUTH_SALT',        '2y7s-4T`QwAFcbG2Vq`vG#gi9`}o9iPmA_R>~`P?}T^11rbs8/4GW3M%;$E5E6Kz' );
define( 'SECURE_AUTH_SALT', 'E{h7O?o5+hr_v,[ZxCpC)h^LiGGSbgt=)~rCEoUMz}(X#<kwcm4db^NwM:GO^&y!' );
define( 'LOGGED_IN_SALT',   '7T[wZ=j5B 4.t%uPf7/I;qZ--BdR}@{nzApkSFcg:7~Kl&b<?.NE]]_1qTt_O<tb' );
define( 'NONCE_SALT',       'L~k&{+;Avhg B1dK>zm16wLoN1{c<BEYu+^b%^KY &a5l5o;?1AVRD+4JoI[O4#9' );

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
